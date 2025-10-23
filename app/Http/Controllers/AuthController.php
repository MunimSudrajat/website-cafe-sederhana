<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function showLogin(){
        return view('pages.login');
    }

    public function login(Request $request){
        $data = $request->only('email','password');
        $remember = $request->filled('remember');

        if(Auth::attempt($data, $remember)){
            $request->session()->regenerate();
            // $request->session()->put('name', Auth::user()->name);

            return redirect('/dashboard');
        }

        return redirect()->back()->with('gagalLogin', 'Username atau password salah!');
    }


    public function showRegister(){
        return view('pages.register');

    }

    public function register(AuthRequest $request){
        $validasi = $request->validated();
        $validasi['password'] = Hash::make($validasi['password']);
        $user = User::create($validasi);

        return redirect('/login')->with('register','Registration succes');
    }

    public function showForgotPassword(){
        return view('pages.forgotPassword');
    }

    public function forgotPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ],[

            'email.required' => 'Email must be filled in!',
            'email.email' => 'only email is included',
            'email.exists' => 'email does not exist!'
        ]
    );

        $password = Password::sendResetLink($request->only('email'));

        return $password === Password::ResetLinkSent
                ? back()->with('password', 'Link berhasil dikirim, cek emailmu!')
                : back()->with('password', 'Link gagal dikirim');

    }

      public function showResetPassword($token){
        return view('/pages.resetPassword',['token' => $token]);
    }

    public function resetPassword(Request $request){
                $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function($user) use ($request){
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60)
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', 'Password berhasil diubah!')
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerateToken();
        $request->session()->invalidate();

        return redirect('/');
    }
}
