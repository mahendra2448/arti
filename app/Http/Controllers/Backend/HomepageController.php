<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\T_Home;
use App\Models\T_HomeDesc;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Yoeunes\Toastr\ToastrServiceProvider;
use Intervention\Image\Exception\NotSupportedException;
use Image;
use File;

class HomepageController extends Controller {

    public function index() {        
        $homeset    = T_Home::latest('created_at')->get();        
        $homedesc   = T_HomeDesc::first();        
        $rows       = [
            'home'      =>$homeset,
            'desc'      =>$homedesc,
        ];
        return view('backend.homepage', $rows);
    } 
    public function upload(Request $req) {
        $req->validate([
            'heading_text'  => 'nullable',
            'caption'       => 'nullable',
            'image'         => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        try {
            $imageName  = 'bg-'.date('dmYhis.').$req->image->extension();
            $imageSave  = storage_path('app/public/kit/images/'.$imageName);
            $imagePath  = '/storage/kit/images/'.$imageName;

            try {
                Image::make($req->image)->resize(1366, 768)->save($imageSave); // image resized to 1366*768px and saved
                T_Home::create([
                    'heading_text'  => $req->heading_text,
                    'caption'       => $req->caption,
                    'image'         => $imagePath
                ]);
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('New header successfully added.');
            return redirect()->route('admin.home.header.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function edit(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_Home::where('id', $id)->get();
        $toEdit = $this->setup_editRow($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_editRow($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <div class="container">
                <h5 class="float-right text-info">ID: '.$t->id.'</h5>
                <form action="'. route('admin.home.header.update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="'.$csrf.'">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="head">Heading Text</label>
                        <input id="head" class="form-control" type="text" name="heading_text" value="'.$t->heading_text.'">
                    </div>
                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input id="caption" class="form-control" type="text" name="caption" value="'.$t->caption.'">
                    </div>
                    <small class="text-danger"><em>(Ukuran file tidak boleh lebih dari 2MB)</em></small>
                    <div class="custom-upload">
                        <input type="file" id="editfoto" name="image" class="form-control" accept="image/jpg, image/jpeg, image/png" hidden>
                        <label for="editfoto">Choose file...</label>
                        <span id="file-edit">'.$t->image.'</span>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                </form>
            </div>';
        }

        return $result;
    }
    public function update(Request $req) {
        // dd($req->image);
        $req->validate([
            'heading_text'  => 'nullable',
            'caption'       => 'nullable'
        ]);
        try {
            try {
                if ($req->image) {
                    $imageName  = 'bg-'.date('dmYhis.').$req->image->extension();
                    $imageSave  = storage_path('app/public/kit/images/'.$imageName);
                    $imagePath  = '/storage/kit/images/'.$imageName;
                    Image::make($req->image)->resize(1366, 768)->save($imageSave); // image resized to 1366*768px and saved
                    
                    $old    = T_Home::where('id',$req->id)->pluck('image');
                    File::delete(public_path($old[0])); // delete old image file

                    T_Home::where('id',$req->id)->update([ // update the row
                        'heading_text'  => $req->heading_text,
                        'caption'       => $req->caption,
                        'image'         => $imagePath
                    ]);
                } else {
                    T_Home::where('id',$req->id)->update([
                        'heading_text'  => $req->heading_text,
                        'caption'       => $req->caption
                    ]);
                }
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('New header successfully updated.');
            return redirect()->route('admin.home.header.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function delete($id){
        $rows = T_Home::where('id',$id)->first();
        
        File::delete(public_path($rows->image)); // hapus file image
        T_Home::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }

    
    public function updateDesc(Request $req) {
        $req->validate([
            'desc_one'  => 'required',
            'desc_two'  => 'required'
        ]);
        try {
            T_HomeDesc::where('id',$req->id)->update([
                'desc_one'  => $req->desc_one,
                'desc_two'  => $req->desc_two
            ]);
                    
            toastr()->success('Description successfully updated.');
            return redirect()->route('admin.home.header.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
}
