<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function create()
    {
      return view('registration.create');
    }

    public function store()
    {
        // validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        // Create and save the user.
        $user = User::create([
          'name' => request('name'),
          'email' => request('email'),
          'password' => bcrypt(request('password'))
        ]);

        // Sign them in.
        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        // flash message to user
        session()->flash('message', 'Thanks so much for signin up!');

        // Redirect to the home page
        return redirect()->home();
    }
}
