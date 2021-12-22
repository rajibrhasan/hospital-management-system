<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='admin')
            {
                return view('admin.home');
            }
            else if(Auth::user()->usertype=='patient')
            {
                return view('patient.home'); 
            }
            else if(Auth::user()->usertype=='doctor')
            {
                return view('doctor.home'); 
            }

        }
        else
        {
            return redirect()->back();
        }
    }
}
