<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ValidatesRequests;

    // Change this method to return 'email'
    protected function username()
    {
        return 'email';  // Use 'email' for login
    }


public function login(Request $request)
{
    // Validate the incoming request
    $this->validate($request, [
        'email' => 'required|string|email|exists:users,email',
        'password' => 'required|string',
    ]);

    // Attempt to log the user in
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Redirect based on user role
        $user = Auth::user();
        switch ($user->role->name) {
            case 'Admin':
                return redirect('/admin/views/import-data');
            case 'Manager':
                return redirect('/import-data');
            case 'User':
                return redirect('/import-export');
            case 'Editor':
                return redirect('/import');
            case 'Viewer':
                return redirect('/admin/views/import-data');
            default:
                return redirect('/home');
        }
    }

    // If the login attempt was unsuccessful, redirect back to the login form with an error
    return back()->withInput($request->only('email', 'remember'))->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}
}