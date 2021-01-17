<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'schoolname' => ['required', 'string', 'max:255'],
            'contactpersonname'=>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone'=>['required', 'numeric'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],
        [
            'schoolname.required'=>"School Name must be fill out",
            'contactpersonname.required'=>"Person Name must be fill out",
            'email.required'=>"Email must be fill out",
            'email.email'=>"Email must be valid",
            'phone.required'=>"Phone must be fill out",
            'phone.required'=>"Phone No should be Numeric",
            'password.required'=>'Name must be fill out',
            'password.confirmed'=>'Password and Confirme password must be match',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'schoolname' => $data['schoolname'],
            'contactpersonname' => $data['contactpersonname'],
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
    }
}
