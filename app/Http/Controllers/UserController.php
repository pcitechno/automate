<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // Get all Admins
        $admins = User::whereHas('role', function($query) {
            $query->where('name', 'Admin');
        })->get();

        // Get users with a specific role using role_id directly
        $managers = User::where('role_id', 2)->get(); // For Managers

        // Get all users belonging to a specific role
        $role = Role::where('name', 'User')->first();
        $users = $role ? $role->users : collect();

        return view('users.index', compact('admins', 'managers', 'users'));
    }
}
