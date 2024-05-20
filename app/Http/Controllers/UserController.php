<?php

namespace App\Http\Controllers;

use App\Models\allUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = allUsers::orderBy('id', 'ASC')->get();


        return view('users', [
            'allUsers' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function signup()
    {
        return view('pages\signup');
    }

    public function login()
    {
        return view('pages\login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'username' => 'required|regex:/^[a-z0-9._]+$/|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|regex:/^[0-9]{10,15}$/|unique:users,phone',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/
',
            ],
        ];

        $messages = [
            'username.required' => 'Please enter a username',
            'username.regex' => 'A username should only contain lowercase letters, periods, numbers, and underscores',
            'username.unique' => 'Username unavailable, please choose another.',

            'email.required' => 'Please enter an email address',
            'email.email' => 'Please enter a valid email address',
            'email.unique' => 'This email is already registered, please choose a different email address',

            'phone.required' => 'Please enter a phone number',
            'phone.regex' => 'Please enter a valid phone number',
            'phone.unique' => 'This phone number is already registered, please choose a different phone number',

            'password.required' => 'A password is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.regex' => 'The password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('UserCreate')->withErrors($validator)->withInput();
        }

        // Continue with storing the user data
        $users = new allUsers();

        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->password = bcrypt($request->input('password')); // Hash the password
        $users->save();


        $image = $request->pfp;
        $ext = $image->getClientOriginalExtension();
        $imgName = time() . "." . $ext;

        $image->move(public_path('uploads/images'), $imgName);

        $users->profile = $imgName;
        $users->save();

        return redirect()->route('UserLogin')->with('success', 'Registration successful');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
