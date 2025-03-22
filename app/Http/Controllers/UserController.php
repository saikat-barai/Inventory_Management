<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function userRegistration(){
        return view('pages.auth.registration');
    }

    function userLogin(){
        return view('pages.auth.login');
    }

    function reset_password_page(){
        return view('pages.auth.password-reset');
    }

    function sent_OTP(){
        return view('pages.auth.sent-otp');
    }

    function verify_OTP(){
        return view('pages.auth.verify-otp');
    }

    function user_profile(){
        return view('pages.dashboard.profile-page');
    }
}
