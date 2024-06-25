<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Mail\ResetPasswordLink;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AuthenticateController extends Controller
{
    public function loginCreate(): View
    {
        return view('auth.login');
    }

    public function loginStore(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            if ($request->has('remember_me') && $request->remember_me == 'on') {
                Cookie::queue('email', $request->email, 43200);
                Cookie::queue('password', $request->password, 43200);
            } else {
                Cookie::queue(Cookie::forget('email'));
                Cookie::queue(Cookie::forget('password'));
            }

            return Redirect::route('dashboard');
        }

        return Redirect::back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function registerStore(RegisterRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if($request->has('password')) {
            $data['password'] = Hash::make($request->password);
        }

        User::create($data);

        return Redirect::route('dashboard');
    }

    public function forgotPasswordCreate(): View
    {
        return view('auth.forgot-password');
    }

    public function forgotPasswordStore(ForgotPasswordRequest $request): RedirectResponse
    {
        $request->validated();

        $user = User::whereEmail($request->only('email'))->first();

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);

        $token_info = DB::table('password_reset_tokens')->whereEmail($request->email)->first();

        $link = config('app.url')."/reset-password/{$token_info->token}/{$token_info->email}";

        Mail::to($request->email)->send(new ResetPasswordLink($user, $link));

        return Redirect::back()->with('message', 'We have sent password reset link on your email!');
    }

    public function resetPasswordCreate(): View
    {
        return view('auth.reset-password');
    }

    public function resetPasswordStore(ResetPasswordRequest $request): RedirectResponse
    {
        $input = $request->validated();

        $token_info = DB::table('password_reset_tokens')->whereToken($input['token'])->first();

        if($token_info) {
            User::whereEmail($input['email'])->update([
                "password" => Hash::make($request->password)
            ]);

            DB::table('password_reset_tokens')->whereToken($input['token'])->delete();
        }

        return Redirect::route('login');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return Redirect::route('login');
    }
}
