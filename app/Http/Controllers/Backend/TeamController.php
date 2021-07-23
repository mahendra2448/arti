<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\T_TeamLead;
use App\Models\T_TeamAssist;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Yoeunes\Toastr\ToastrServiceProvider;
use Intervention\Image\Exception\NotSupportedException;
use Image;
use File;

class TeamController extends Controller {
    
    public function indexLead() {
        $team    = T_TeamLead::get();  
        $rows       = [
            'lead'      =>$team,
        ];
        return view('backend.team.lead', $rows);
    } 
    public function uploadLead(Request $req) {
        $req->validate([
            'name'      => 'required',
            'surname'   => 'required',
            'desc'      => 'nullable',
            'image'     => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);
        try {
            $imageName  = 'lead-'.date('dmYhis.').$req->image->extension();
            $imageSave  = storage_path('app/public/kit/images/'.$imageName);
            $imagePath  = '/storage/kit/images/'.$imageName;

            try {
                Image::make($req->image)->save($imageSave,70);
                T_TeamLead::create([
                    'name'      => $req->name,
                    'surname'   => $req->surname,
                    'desc'      => $req->desc,
                    'image'     => $imagePath
                ]);
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('New team lead successfully added.');
            return redirect()->route('admin.team.lead.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editLead(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_TeamLead::where('id', $id)->get();
        $toEdit = $this->setup_editLead($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_editLead($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <div class="container">
                <h5 class="float-right text-info">ID: '.$t->id.'</h5>
                <form action="'. route('admin.team.lead.lead-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="'.$csrf.'">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="'.$t->name.'" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input id="surname" class="form-control" type="text" name="surname" value="'.$t->surname.'" required>
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" class="form-control descCK">'.$t->desc.'</textarea>
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
    public function updateLead(Request $req) {
        $req->validate([
            'name'      => 'required',
            'surname'   => 'required',
            'desc'      => 'nullable'
        ]);
        try {
            try {
                if ($req->image) {
                    $imageName  = 'lead-'.date('dmYhis.').$req->image->extension();
                    $imageSave  = storage_path('app/public/kit/images/'.$imageName);
                    $imagePath  = '/storage/kit/images/'.$imageName;
                    Image::make($req->image)->save($imageSave,70);
                    
                    $old    = T_TeamLead::where('id',$req->id)->pluck('image');
                    File::delete(public_path($old[0])); // delete old image file

                    T_TeamLead::where('id',$req->id)->update([ // update the row
                        'name'      => $req->name,
                        'surname'   => $req->surname,
                        'desc'      => $req->desc,
                        'image'     => $imagePath
                    ]);
                } else {
                    T_TeamLead::where('id',$req->id)->update([
                        'name'      => $req->name,
                        'surname'   => $req->surname,
                        'desc'      => $req->desc
                    ]);
                }
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('Team lead successfully updated.');
            return redirect()->route('admin.team.lead.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deleteLead($id){
        $rows = T_TeamLead::where('id',$id)->first();
        
        File::delete(public_path($rows->image)); // hapus file image
        T_TeamLead::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }

    
    public function indexAss() {
        $assist = T_TeamAssist::get();  
        $rows   = [
            'assist'  => $assist,
        ];
        return view('backend.team.assist', $rows);
    } 
    public function uploadAss(Request $req) {
        $req->validate([
            'name'      => 'required',
            'surname'   => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);
        try {
            $imageName  = 'assist-'.date('dmYhis.').$req->image->extension();
            $imageSave  = storage_path('app/public/kit/images/'.$imageName);
            $imagePath  = '/storage/kit/images/'.$imageName;

            try {
                Image::make($req->image)->save($imageSave,70);
                T_TeamAssist::create([
                    'name'      => $req->name,
                    'surname'   => $req->surname,
                    'image'     => $imagePath
                ]);
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('New team asisstant successfully added.');
            return redirect()->route('admin.team.assist.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editAss(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_TeamAssist::where('id', $id)->get();
        $toEdit = $this->setup_editAss($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_editAss($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <div class="container">
                <h5 class="float-right text-info">ID: '.$t->id.'</h5>
                <form action="'. route('admin.team.assist.ass-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="'.$csrf.'">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="'.$t->name.'" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input id="surname" class="form-control" type="text" name="surname" value="'.$t->surname.'" required>
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
    public function updateAss(Request $req) {
        $req->validate([
            'name'      => 'required',
            'surname'   => 'required'
        ]);
        try {
            try {
                if ($req->image) {
                    $imageName  = 'assist-'.date('dmYhis.').$req->image->extension();
                    $imageSave  = storage_path('app/public/kit/images/'.$imageName);
                    $imagePath  = '/storage/kit/images/'.$imageName;
                    Image::make($req->image)->save($imageSave,70);
                    
                    $old    = T_TeamAssist::where('id',$req->id)->pluck('image');
                    File::delete(public_path($old[0])); // delete old image file

                    T_TeamAssist::where('id',$req->id)->update([ // update the row
                        'name'      => $req->name,
                        'surname'   => $req->surname,
                        'image'     => $imagePath
                    ]);
                } else {
                    T_TeamAssist::where('id',$req->id)->update([
                        'name'      => $req->name,
                        'surname'   => $req->surname,
                    ]);
                }
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }
                    
            toastr()->success('Training Assistant successfully updated.');
            return redirect()->route('admin.team.assist.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deleteAss($id){
        $rows = T_TeamAssist::where('id',$id)->first();
        
        File::delete(public_path($rows->image)); // hapus file image
        T_TeamAssist::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }
}
