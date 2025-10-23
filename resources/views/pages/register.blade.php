@extends('layouts.master')


@section('content')
    <div class="h-screen justify-center items-center flex flex-col pb-5">
        <div class="grid text-center">
            <div class="">
                <p class="text-accent-dark text-2xl font-extrabold">Join Our Exclusive Cafe <br>Community</p>
                <p class="text-thin text-primary text-sm mt-2">Create an account to enjoy our premium offerings and <br>
                    services</p>
            </div>
            <form class="text-left grid mt-3" action="/register" method="POST">
                @csrf
                <label class="text-primary mt-2" for="">Email</label>
                <input class="rounded outline-0 p-2 w-[350px] mt-1 bg-muted-dark" type="email" name="email"
                    id="" placeholder="Enter your email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
                <label class="text-primary mt-2" for="">Username</label>
                <input class="rounded outline-0 p-2 w-[350px] bg-muted-dark" type="text" name="name" id=""
                    placeholder="Enter your username" value="{{ old('name') }}">
                      @error('name')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
                <label class="text-primary mt-2" for="">Password</label>
                <input class="rounded outline-0 p-2 w-[350px] mt-1 bg-muted-dark" type="password" name="password"
                    id="" placeholder="Enter your password" value="{{ old('password') }}">
                      @error('password')
                    <p class="text-red-500 mt-1">{{$message}}</p>
                @enderror
                <label class="text-primary mt-2" for="">Password Confirmation</label>
                <input class="rounded outline-0 p-2 w-[350px] mt-1 bg-muted-dark" type="password"
                    name="password_confirmation" id="" placeholder="Enter your password confirmation"
                    value="{{ old('password_confirmation') }}">
                <div class="flex justify-center mt-3">
                    <span class="text-sm">Already have an account?</span>
                    <a class="text-thin text-primary underline text-center text-sm" href="/login">Log in!</a>
                </div>
                <button type="submit"
                    class="font-bold text-center w-[300px] text-light bg-primary mt-5 rounded p-2 m-auto cursor-pointer hover:bg-muted-dark hover:text-dark"
                    type="submit">Create Account</button>
            </form>
        </div>
    </div>
@endsection
