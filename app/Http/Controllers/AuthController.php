<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function handleRegister(Request $request){
        dd(Auth::user());
   
        $request->validate([
            'username' => 'required|string|max:50|unique:users,username',
            'fullname' => 'required|string|max:255',
            'age'      => 'required|integer|min:17',
            'email'    => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8'
        ]);

        DB::beginTransaction();

        try {
         
            $user = User::create([
                'username' => $request->username,
                'fullname' => $request->fullname,
                'age'      => $request->age,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);

          
            DB::table('role_ownerships')->insert([
                'user_id' => $user->id,
                'role_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::commit();

         
            Auth::login($user);
            

            return redirect()->route('main')->with('success', 'Registration successful');

        } catch (\Throwable $th) {
           
            DB::rollBack();
            Log::error('Registration Error: ' . $th->getMessage());

            return redirect()->route('main')
                ->withErrors(['error' => 'Registration failed. Please try again later.']);
        }
    }

     public function handleLogin(Request $request){

        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], [
            'username.required' => 'Username tidak boleh kosong.',
            'password.required' => 'Password tidak boleh kosong.',
        ]);

       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('main')->with('success', 'Login successful.');
        }

        return back()->withErrors([
            'username' => 'Invalid username or password.',
        ]);
    }

    public function handleLogout(Request $request){
  
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('main')->with('success', 'You have been logged out.');
    }

}
