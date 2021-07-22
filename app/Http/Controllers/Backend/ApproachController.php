<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\T_Approach;
use App\Models\T_ApprMethod;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Yoeunes\Toastr\ToastrServiceProvider;
use Intervention\Image\Exception\NotSupportedException;
use Image;
use File;

class ApproachController extends Controller {
    public function index() {
        $apprUpdate = T_Approach::latest('created_at')->first();
        $apprMethod = T_ApprMethod::get();
        $rows       = [
            'updates'   => $apprUpdate,
            'methods'   => $apprMethod
        ];
        return view('backend.approach', $rows);
    } 
    public function updates(Request $req) {
        $req->validate([
            'actres_desc'   => 'required',
            'capbuild_desc' => 'required',
        ]);

        T_Approach::where('id',$req->id)->update([
            'actres_desc'   => $req->actres_desc,
            'capbuild_desc' => $req->capbuild_desc
        ]);

        toastr()->success('Description successfully updated.');
        return redirect()->route('admin.approach.index');
    }
    

    public function uploadMet(Request $req) {
        $req->validate([
            'name'  => 'required',
            'desc'  => 'required'
        ]);
        try {
            $imageName  = 'method-'.date('dmYhis.').$req->image->extension();
            $imageSave  = storage_path('app/public/kit/images/'.$imageName);
            $imagePath  = '/storage/kit/images/'.$imageName;

            try {
                Image::make($req->image)->save($imageSave,70); // image quality set to 70 (range 0-100) to reduce size
                T_ApprMethod::create([
                    'name'  => $req->name,
                    'desc'  => $req->desc,
                    'image' => $imagePath
                ]);
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('New method successfully added.');
            return redirect()->route('admin.approach.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editMet(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_ApprMethod::where('id', $id)->get();
        $toEdit = $this->setup_editRow($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_editRow($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <div class="container">
                <h5 class="float-right text-info">ID: '.$t->id.'</h5>
                <form action="'. route('admin.approach.method.met-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="'.$csrf.'">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="'.$t->name.'">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <input id="desc" class="form-control" type="text" name="desc" value="'.$t->desc.'">
                    </div>
                    <small class="text-danger"><em>(Ukuran file tidak boleh lebih dari 2MB)</em></small>
                    <div class="custom-upload">
                        <input type="file" id="editfoto'.$t->id.'" name="image" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" hidden>
                        <label for="editfoto'.$t->id.'">Choose file...</label>
                        <span id="file-edit'.$t->id.'">'.$t->image.'</span>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                </form>
            </div>';
        }

        return $result;
    }
    public function updateMet(Request $req) {
        $req->validate([
            'name'  => 'required',
            'desc'  => 'required'
        ]);
        try {
            try {
                if ($req->image) {
                    $imageName  = 'method-'.date('dmYhis.').$req->image->extension();
                    $imageSave  = storage_path('app/public/kit/images/'.$imageName);
                    $imagePath  = '/storage/kit/images/'.$imageName;
                    Image::make($req->image)->save($imageSave,70); // image quality set to 70 (range 0-100) to reduce size
                    
                    $old    = T_ApprMethod::where('id',$req->id)->pluck('image');
                    File::delete(public_path($old[0])); // delete old image file

                    T_ApprMethod::where('id',$req->id)->update([ // update the row
                        'name'  => $req->name,
                        'desc'  => $req->desc,
                        'image' => $imagePath
                    ]);
                } else {
                    T_ApprMethod::where('id',$req->id)->update([
                        'name'  => $req->name,
                        'desc'  => $req->desc
                    ]);
                }
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('Method successfully updated.');
            return redirect()->route('admin.approach.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deleteMet($id){
        $rows = T_ApprMethod::where('id',$id)->first();
        T_ApprMethod::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }
}
