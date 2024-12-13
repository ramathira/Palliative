<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    public function index()
    {
        $users_list = User::with('roles')->get();
        return view('pages.users.index', compact('users_list'));
    }
    public function create()
    {
        return view('pages.users.create');
    }
    public function store(Request $request)
    { 
        try
        {
            $request->validate([
                'role' => ['required', 'integer', 'exists:roles,id'],
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'lowercase',  'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            
           
    
            $user = User::create([
                'name' => $request->name,
                // 'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

        //    event(new Registered($user));
            $user->roles()->attach($request->role);
    
            // Auth::login($user);
    
            return redirect()->route('users.index')->with('success', 'User created successfully');
        }
        catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
        catch (\Exception $e) {
            \Log::error('Error creating users: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }

    }


}
