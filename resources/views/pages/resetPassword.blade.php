@extends('layouts.master')
@include('layouts.navbar')

@section('title', 'Reset Password')

@section('content')
     <div class="h-screen justify-center items-center flex flex-col pb-5">
        <div class="grid text-center">
            <form class="text-left grid mt-3" action="/reset-password" method="POST">
                @csrf
                <input type="text" name="token" value="{{$token}}" hidden>
                <label class="text-primary mt-2" for="">Email</label>
                <input class="rounded outline-0 p-2 w-[350px] mt-1 bg-muted-dark" type="email" name="email"
                    id="" placeholder="Enter your email" value="{{ old('email') }}">
                @error('email')
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
                <button type="submit"
                    class="font-bold text-center w-[300px] text-light bg-primary mt-5 rounded p-2 m-auto cursor-pointer hover:bg-muted-dark hover:text-dark"
                    type="submit">Reset Password</button>
            </form>
        </div>
    </div>



@include('layouts.bottom')
@endsection
