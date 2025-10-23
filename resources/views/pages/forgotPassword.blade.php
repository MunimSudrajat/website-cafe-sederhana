@extends('layouts.master')


@section('content')
    <div class="h-screen justify-center items-center flex flex-col">
        <div class="border border-muted-dark rounded-full">
            <img src="{{ asset('storage/images/logo_kafeKita.png') }}" class="w-24 h-24" alt="">
        </div>
        <div class="grid text-center">
            <div class="mt-8">
                <p class="text-accent-dark text-3xl font-extrabold">Forgot Password?</p>
                @if (session('password'))
                <p class="text-sky-500 font-bold mt-1">{{session('password')}}</p>
                @endif
                <p class="text-thin text-primary text-sm mt-5">Enter your email address or username to reset your <br> password. You will receive an email with instructions</p>
            </div>
            <form action="/forgot-password" method="POST" class="text-left grid mt-10">
                @csrf
                <label class="text-primary" for="">Email</label>
                <input class="rounded outline-0 p-2 w-[350px] mt-2 bg-muted-dark" type="email" name="email" id="" placeholder="Enter your email">
                @error('email')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
                <button class="font-bold text-center w-[200px] text-light bg-primary mt-10 rounded p-2 m-auto cursor-pointer hover:bg-muted-dark hover:text-dark" type="submit">Send reset link</button>
                <a class="text-thin text-primary underline text-center text-sm mt-5" href="/login">return to login?</a>
            </form>
        </div>
    </div>
@endsection
