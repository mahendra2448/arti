<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Frontend\Contact;
use App\Models\T_ContactMsgs;
use Illuminate\Http\Request;

/**
 * Class HomeController.
 */
class FrontendController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
        return view('frontend.home');
    }

    public function about() {
        return view('frontend.about');
    }

    public function approach() {
        return view('frontend.approach');
    }

    public function team() {
        return view('frontend.team');
    }
    
    public function experiences() {
        return view('frontend.experiences');
    }

    //Contact Us 
    public function contact() {
        return view('frontend.contact');
    }
    
    public function contactSubmit(Request $req) {
        $req->validate([
            'name'      => 'required',
            'email'     => 'required',
            'message'   => 'required'
        ]);

        // $rules = ['captcha' => 'required|captcha'];
        // $validator = validator()->make(request()->all(), $rules);

        // if ($validator->fails()) {

        //     toastr()->error('Sorry, you input a wrong captcha.');
        //     return redirect()->route('frontend.contact','#contact-form');

        // } else {

            T_ContactMsgs::create([
                'name'      => $req->name,
                'email'     => $req->email,
                'message'   => $req->message
            ]);
    
            toastr()->success('Thank you! <br> Your message has been sent.');
            return redirect()->route('frontend.contact');
            
        // }

    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
    
}
