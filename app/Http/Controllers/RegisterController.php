<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class RegisterController extends Controller
{

    /**
     * Method create
     *
     * @return View
     */
    function create () : View {
        return view('create_user');
    }

    function store (Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        return "Successfully";
    }

}
