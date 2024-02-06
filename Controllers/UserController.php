<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo; 

class UserController extends Controller
{
    public function showForm()
    {
        return view('user_form');
    }

    public function submitForm(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|string|max:20',
        ]);

        // Insert data into the database
        UserInfo::create($request->all());

        // Redirect back to the form with a confirmation message
        return redirect()->route('user.form')->with('success', 'User information saved successfully.');
    }
}