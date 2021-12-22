<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'usertype'=>['required','string'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $usertype = $input['usertype'];


        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'usertype'=> $input['usertype'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'password' => Hash::make($input['password']),
        ]);

         if($usertype=='doctor'){
            $doctor = new Doctor;
            $doctor->id = $user->id;
            $doctor->name = $input['name'];
            $doctor->email = $input['email'];
            $doctor->phone = $input['phone'] ;
            $doctor->address = $input['address'];
            $doctor->save();
        }

        else if($usertype=='patient'){
            $patient = new Patient;
            $patient->id = $user->id;
            $patient->name = $input['name'];
            $patient->email = $input['email'];
            $patient->phone = $input['phone'] ;
            $patient->address = $input['address'];
            $patient->save();
        }

        else if($usertype=='admin'){
            $admin = new Admin;
            $admin->id = $user->id;
            $admin->name = $input['name'];
            $admin->email = $input['email'];
            $admin->phone = $input['phone'] ;
            $admin->address = $input['address'];
            $admin->save();
        }

        return $user;
    }
}
