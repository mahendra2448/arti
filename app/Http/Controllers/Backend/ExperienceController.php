<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\T_Partner;
use App\Models\T_Pendidikan;
use App\Models\T_Penelitian;
use App\Models\T_Publikasi;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Yoeunes\Toastr\ToastrServiceProvider;
use Intervention\Image\Exception\NotSupportedException;
use Image;
use File;

class ExperienceController extends Controller {

    public function indexResearch() {
        $penelitian = T_Penelitian::get();
        $rows       = [
            'research'  => $penelitian
        ];
        return view('backend.exp.research', $rows);
    } 
    public function uploadResearch(Request $req) {
        $req->validate([
            'title' => 'required',
            'year'  => 'required',
            'desc'  => 'required'
        ]);
        try {
            T_Penelitian::create([
                'title' => $req->title,
                'year'  => $req->year,
                'desc'  => $req->desc,
            ]);  
            toastr()->success('New research successfully added.');
            return redirect()->route('admin.exp.penelitian.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editResearch(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_Penelitian::where('id', $id)->get();
        $toEdit = $this->setup_Research($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_Research($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <form action="'. route('admin.exp.penelitian.penelitian-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="'.$csrf.'">
                <input type="hidden" name="_method" value="PUT">
                <div class="row">
                    <div class="col-md-10">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title" value="'.$t->title.'">
                    </div>
                    </div>
                    <div class="col-md-2">
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input id="year" class="form-control" type="text" name="year" value="'.$t->year.'">
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" class="form-control descCK" required>'.$t->desc.'</textarea>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                    </div>
                </div><h5 class="float-left text-info">ID: '.$t->id.'</h5>
            </form>';
        }

        return $result;
    }
    public function updateResearch(Request $req) {
        $req->validate([
            'title' => 'required',
            'year'  => 'required',
            'desc'  => 'required'
        ]);
        try {
            T_Penelitian::where('id',$req->id)->update([
                'title' => $req->title,
                'year'  => $req->year,
                'desc'  => $req->desc,
            ]);  
            toastr()->success('Research successfully updated.');
            return redirect()->route('admin.exp.penelitian.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deleteResearch($id){
        $rows = T_Penelitian::where('id',$id)->first();
        T_Penelitian::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }

    public function indexStudy() {
        $pendidikan = T_Pendidikan::get();
        $rows       = [
            'study' => $pendidikan
        ];
        return view('backend.exp.study', $rows);
    } 
    public function uploadStudy(Request $req) {
        $req->validate([
            'title' => 'required',
            'year'  => 'required',
            'desc'  => 'required'
        ]);
        try {
            T_Pendidikan::create([
                'title' => $req->title,
                'year'  => $req->year,
                'desc'  => $req->desc,
            ]);  
            toastr()->success('New study successfully added.');
            return redirect()->route('admin.exp.pendidikan.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editStudy(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_Pendidikan::where('id', $id)->get();
        $toEdit = $this->setup_Study($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_Study($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <form action="'. route('admin.exp.pendidikan.pendidikan-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="'.$csrf.'">
                <input type="hidden" name="_method" value="PUT">
                <div class="row">
                    <div class="col-md-10">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title" value="'.$t->title.'">
                    </div>
                    </div>
                    <div class="col-md-2">
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input id="year" class="form-control" type="text" name="year" value="'.$t->year.'">
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" class="form-control descCK" required>'.$t->desc.'</textarea>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                    </div>
                </div><h5 class="float-left text-info">ID: '.$t->id.'</h5>
            </form>';
        }

        return $result;
    }
    public function updateStudy(Request $req) {
        $req->validate([
            'title' => 'required',
            'year'  => 'required',
            'desc'  => 'required'
        ]);
        try {
            T_Pendidikan::where('id',$req->id)->update([
                'title' => $req->title,
                'year'  => $req->year,
                'desc'  => $req->desc,
            ]);  
            toastr()->success('Study successfully updated.');
            return redirect()->route('admin.exp.pendidikan.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deleteStudy($id){
        $rows = T_Pendidikan::where('id',$id)->first();
        T_Pendidikan::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }

    public function indexPub() {
        $publikasi  = T_Publikasi::get();
        $rows       = [
            'public'    => $publikasi
        ];
        return view('backend.exp.publication', $rows);
    } 
    public function uploadPub(Request $req) {
        $req->validate([
            'title'     => 'required',
            'year_desc' => 'required',
            'by'        => 'required'
        ]);
        try {
            T_Publikasi::create([
                'title'     => $req->title,
                'year_desc' => $req->year_desc,
                'by'        => $req->by,
            ]);  
            toastr()->success('New publication successfully added.');
            return redirect()->route('admin.exp.publikasi.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editPub(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_Publikasi::where('id', $id)->get();
        $toEdit = $this->setup_Pub($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_Pub($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <form action="'. route('admin.exp.publikasi.publikasi-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="'.$csrf.'">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" class="form-control" type="text" name="title" value="'.$t->title.'" required>
                </div>
                <div class="form-group">
                    <label for="year">Year/Desc</label>
                    <input id="year" class="form-control" type="text" name="year_desc" value="'.$t->year_desc.'" required>
                </div>
                <div class="form-group">
                    <label for="by">By:</label>
                    <input id="by" class="form-control" type="text" name="by" value="'.$t->by.'" required>
                </div>
                <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                <h5 class="float-left text-info">ID: '.$t->id.'</h5>
            </form>';
        }

        return $result;
    }
    public function updatePub(Request $req) {
        $req->validate([
            'title'     => 'required',
            'year_desc' => 'required',
            'by'        => 'required'
        ]);
        try {
            T_Publikasi::where('id',$req->id)->update([
                'title'     => $req->title,
                'year_desc' => $req->year_desc,
                'by'        => $req->by,
            ]);  
            toastr()->success('Publication successfully updated.');
            return redirect()->route('admin.exp.publikasi.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deletePub($id){
        $rows = T_Publikasi::where('id',$id)->first();
        T_Publikasi::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }

    public function indexPartner() {
        $partner    = T_Partner::get();  
        $rows       = [
            'partners'  => $partner,
        ];
        return view('backend.exp.partners', $rows);
    } 
    public function uploadPartner(Request $req) {
        $req->validate([
            'name'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:1025'
        ]);
        try {
            $imageName  = 'partner-'.date('dmYhis.').$req->image->extension();
            $imageSave  = storage_path('app/public/kit/images/'.$imageName);
            $imagePath  = '/storage/kit/images/'.$imageName;

            try {
                Image::make($req->image)->save($imageSave,70); // image resized to 1366*768px and saved
                T_Partner::create([
                    'name'  => $req->name,
                    'image' => $imagePath
                ]);
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('New partner successfully added.');
            return redirect()->route('admin.exp.partners.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editPartner(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_Partner::where('id', $id)->get();
        $toEdit = $this->setup_editPartner($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_editPartner($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <div class="container">
                <h5 class="float-right text-info">ID: '.$t->id.'</h5>
                <form action="'. route('admin.exp.partners.partners-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="'.$csrf.'">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="'.$t->name.'">
                    </div>
                    <small class="text-danger"><em>(Ukuran file tidak boleh lebih dari 1MB)</em></small>
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
    public function updatePartner(Request $req) {
        $req->validate([
            'name'  => 'required'
        ]);
        try {
            try {
                if ($req->image) {
                    $imageName  = 'exp-'.date('dmYhis.').$req->image->extension();
                    $imageSave  = storage_path('app/public/kit/images/'.$imageName);
                    $imagePath  = '/storage/kit/images/'.$imageName;
                    Image::make($req->image)->save($imageSave,70); 
                    
                    $old    = T_Partner::where('id',$req->id)->pluck('image');
                    File::delete(public_path($old[0])); // delete old image file

                    T_Partner::where('id',$req->id)->update([ // update the row
                        'name'  => $req->name,
                        'image' => $imagePath
                    ]);
                } else {
                    T_Partner::where('id',$req->id)->update([
                        'name'  => $req->name,
                    ]);
                }
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('Partner successfully updated.');
            return redirect()->route('admin.exp.partners.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deletePartner($id){
        $rows = T_Partner::where('id',$id)->first();
        
        File::delete(public_path($rows->image)); // hapus file image
        T_Partner::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }
}
