<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\T_Footer;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Yoeunes\Toastr\ToastrServiceProvider;

class FooterController extends Controller {
    public function index() {
        $footer = T_Footer::latest('created_at')->first();
        $rows   = [
            'updates'   => $footer
        ];
        return view('backend.footer', $rows);
    } 
    public function updates(Request $req) {
        T_Footer::where('id',$req->id)->update([
            'address'   => $req->address,
            'email'     => $req->email,
            'fb'        => $req->fb,
            'ig'        => $req->ig,
            'phone'     => $req->phone
        ]);

        toastr()->success('Footer updated.');
        return redirect()->route('admin.footer.index');
    }
    
}
