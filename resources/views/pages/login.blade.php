@extends('layouts.master')


@section('content')
    <div class="h-screen justify-center items-center flex flex-col">
        <div class="border border-muted-dark rounded-full">
            <img src="{{ asset('storage/images/logo_kafeKita.png') }}" class="w-24 h-24" alt="">
        </div>
        <div class="grid text-center">
            <div class="mt-8">
                @if (session('register'))
                <p class="text-green-500">{{session('register')}}</p>
                @elseif (session('gagalLogin'))
                    <p class="text-red-500">{{session('gagalLogin')}}</p>

                @endif
                <p class="text-accent-dark text-3xl font-extrabold">Welcome Back</p>
                <p class="text-thin text-primary text-sm">Sign in to Continue</p>
            </div>
            <form action="/login" method="POST" class="text-left grid mt-5">
                @csrf
                <label class="text-primary" for="">Email</label>
                <input class="rounded outline-0 p-2 w-[350px] mt-2 bg-muted-dark" type="email" name="email" id="" placeholder="Enter your email">
                <label class="text-primary mt-5" for="">Password</label>
                <input class="rounded outline-0 p-2 w-[350px] mt-2 bg-muted-dark" type="password" name="password" id="" placeholder="Enter your password">
                <div class="flex ml-2 mt-2">
                    <input type="checkbox" name="remember" id="">
                    <label for="remember" class="ml-2 text-primary">Remember me</label>
                </div>
                <a class="text-thin text-primary underline text-center text-sm mt-5" href="/forgot-password">Forgot Password?</a>
                <button class="font-bold text-center w-[300px] text-light bg-primary mt-8 rounded p-2 m-auto cursor-pointer hover:bg-muted-dark hover:text-dark" type="submit">Login</button>
                <div class="flex justify-center mt-5">
                    <span class="text-sm">Don't have account?</span>
                    <a class="text-thin text-primary underline text-center text-sm" href="/register">Register</a>
                </div>
            </form>
        </div>
    </div>
@endsection
