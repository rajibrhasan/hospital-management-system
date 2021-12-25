<?php

namespace App\Actions\Fortify\PasswordValidationRules;
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {

    }
     function adduser(Request $request)
    {
        $validator = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'usertype'=>['required','string'],
        ]);



        $usertype = $request['usertype'];


        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'usertype'=> $request['usertype'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'password' => Hash::make($request['password']),
        ]);

         if($usertype=='doctor'){
            $doctor = new Doctor;
            $doctor->id = $user->id;
            $doctor->name = $request['name'];
            $doctor->email = $request['email'];
            $doctor->phone = $request['phone'] ;
            $doctor->address = $request['address'];
            $doctor->save();
        }

        else if($usertype=='admin'){
            $admin = new Admin;
            $admin->id = $user->id;
            $admin->name = $request['name'];
            $admin->email = $request['email'];
            $admin->phone = $request['phone'] ;
            $admin->address = $request['address'];
            $admin->save();
        }

        echo $user;

        return redirect('adm/adduser')
                        ->with('success','User created successfully.');



    }
}
