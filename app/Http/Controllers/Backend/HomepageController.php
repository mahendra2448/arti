<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\T_Home;
use App\Models\T_HomeDesc;
use App\Models\T_HomeExp;
use App\Models\T_HomeTesti;
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
        return view('backend.homepage.homepage', $rows);
    } 
    public function upload(Request $req) {
        $req->validate([
            'heading_text'  => 'nullable',
            'caption'       => 'nullable',
            'image'         => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
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
                        <input type="file" id="editfoto" name="image" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" hidden>
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

    
    public function expIndex() {
        $homeset    = T_HomeExp::get();  
        $rows       = [
            'exp'      =>$homeset,
        ];
        return view('backend.homepage.exp', $rows);
    } 
    public function uploadExp(Request $req) {
        $req->validate([
            'heading_text'  => 'nullable',
            'image'         => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);
        try {
            $imageName  = 'exp-'.date('dmYhis.').$req->image->extension();
            $imageSave  = storage_path('app/public/kit/images/'.$imageName);
            $imagePath  = '/storage/kit/images/'.$imageName;

            try {
                Image::make($req->image)->resize(1366, 768)->save($imageSave); // image resized to 1366*768px and saved
                T_HomeExp::create([
                    'heading_text'  => $req->heading_text,
                    'image'         => $imagePath
                ]);
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('New thumbnail successfully added.');
            return redirect()->route('admin.home.exp.exp-index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editExp(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_HomeExp::where('id', $id)->get();
        $toEdit = $this->setup_editExp($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_editExp($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <div class="container">
                <h5 class="float-right text-info">ID: '.$t->id.'</h5>
                <form action="'. route('admin.home.exp.exp-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="'.$csrf.'">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="head">Heading Text</label>
                        <input id="head" class="form-control" type="text" name="heading_text" value="'.$t->heading_text.'">
                    </div>
                    <small class="text-danger"><em>(Ukuran file tidak boleh lebih dari 2MB)</em></small>
                    <div class="custom-upload">
                        <input type="file" id="editfoto" name="image" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" hidden>
                        <label for="editfoto">Choose file...</label>
                        <span id="file-edit">'.$t->image.'</span>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                </form>
            </div>';
        }

        return $result;
    }
    public function updateExp(Request $req) {
        // dd($req->image);
        $req->validate([
            'heading_text'  => 'nullable',
            'caption'       => 'nullable'
        ]);
        try {
            try {
                if ($req->image) {
                    $imageName  = 'exp-'.date('dmYhis.').$req->image->extension();
                    $imageSave  = storage_path('app/public/kit/images/'.$imageName);
                    $imagePath  = '/storage/kit/images/'.$imageName;
                    Image::make($req->image)->resize(1366, 768)->save($imageSave); // image resized to 1366*768px and saved
                    
                    $old    = T_HomeExp::where('id',$req->id)->pluck('image');
                    File::delete(public_path($old[0])); // delete old image file

                    T_HomeExp::where('id',$req->id)->update([ // update the row
                        'heading_text'  => $req->heading_text,
                        'image'         => $imagePath
                    ]);
                } else {
                    T_HomeExp::where('id',$req->id)->update([
                        'heading_text'  => $req->heading_text,
                    ]);
                }
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('Thumbnail successfully updated.');
            return redirect()->route('admin.home.exp.exp-index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deleteExp($id){
        $rows = T_HomeExp::where('id',$id)->first();
        
        File::delete(public_path($rows->image)); // hapus file image
        T_HomeExp::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }

    
    public function testiIndex() {
        $testi  = T_HomeTesti::get();  
        $rows   = [
            'testi' => $testi,
        ];
        return view('backend.homepage.testi', $rows);
    } 
    public function uploadTesti(Request $req) {
        $req->validate([
            'name'      => 'required',
            'position'  => 'required',
            'desc'      => 'required',
        ]);
        try {
            T_HomeTesti::create([
                'name'      => $req->name,
                'position'  => $req->position,
                'desc'      => $req->desc,
            ]);  
            toastr()->success('New testimonial successfully added.');
            return redirect()->route('admin.home.testi.testi-index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editTesti(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_HomeTesti::where('id', $id)->get();
        $toEdit = $this->setup_editTesti($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_editTesti($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <div class="container">
                <h5 class="float-right text-info">ID: '.$t->id.'</h5>
                <form action="'. route('admin.home.testi.testi-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="'.$csrf.'">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" required value="'.$t->name.'">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input id="position" class="form-control" type="text" name="position" required value="'.$t->position.'">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc_one" class="form-control descCK" required>'.$t->desc.'</textarea>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                </form>
            </div>';
        }

        return $result;
    }
    public function updateTesti(Request $req) {
        $req->validate([
            'name'      => 'required',
            'position'  => 'required',
            'desc'      => 'required',
        ]);
        try {
            T_HomeTesti::where('id',$req->id)->update([
                'name'      => $req->name,
                'position'  => $req->position,
                'desc'      => $req->desc,
            ]);  
            toastr()->success('Testimonial successfully updated.');
            return redirect()->route('admin.home.testi.testi-index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deleteTesti($id){
        $rows = T_HomeTesti::where('id',$id)->first();
        T_HomeTesti::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }
}
