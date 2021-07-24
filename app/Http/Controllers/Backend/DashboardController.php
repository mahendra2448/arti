<?php

namespace App\Http\Controllers\Backend;

use App\Models\T_ContactMsgs;
use App\Models\T_ContactPub;

/**
 * Class DashboardController.
 */
class DashboardController {
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
        $countMsg   = count(T_ContactMsgs::where('read',0)->get());
        $countPub   = count(T_ContactPub::where('read',0)->get());
        $rows   = [
            'countMsg'  => $countMsg,
            'countPub'  => $countPub
        ];
        return view('backend.dashboard',$rows);
    }
}
