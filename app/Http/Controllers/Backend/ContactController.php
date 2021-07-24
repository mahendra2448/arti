<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\T_ContactMsgs;
use App\Models\T_ContactPub;
use Illuminate\Http\Request;
use Yoeunes\Toastr\ToastrServiceProvider;

class ContactController extends Controller {
    public function indexMsg() {
        $message    = T_ContactMsgs::get();
        $rows       = [
            'message'  => $message
        ];
        return view('backend.contact.messages', $rows);
    } 
    public function deleteMsg($id){
        $rows = T_ContactMsgs::where('id',$id)->first();
        T_ContactMsgs::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }
    public function readMsgStatus(Request $req) {
        T_ContactMsgs::where('id',$req->id)->update(['read'=>1]);
    }

    public function indexPub() {
        $pubreq     = T_ContactPub::get();
        $rows       = [
            'pubreq'  => $pubreq
        ];
        return view('backend.contact.pubreqs', $rows);
    } 
    public function deletePub($id){
        $rows = T_ContactPub::where('id',$id)->first();
        T_ContactPub::where('id',$id)->forceDelete();  // hapus dari row db
    
        return redirect()->back();
    }
    public function readPubStatus(Request $req) {
        T_ContactPub::where('id',$req->id)->update(['read'=>1]);
    }
}
