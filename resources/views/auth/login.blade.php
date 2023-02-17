@extends('welcome')

@section('content')
    <div class="SignUpContainer">
        
        <form action="/login" method="post">
            @csrf         
            <div class="ri-1">
                <h1 class="register-head">
                    Log In
                </h1>
            </div> 
            <div class="ri-1">
                <label for="username" ></label>
                <input type="text" name="username" id="username" class="s-input" placeholder="Username" value="{{ old('username')}}">
                @error('username')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="ri-1">
                <label for="password" ></label>
                <input type="password" name="password" id="password" class="s-input" placeholder="Password" value="{{ old('password')}}">
                @error('password')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
           
           
            <button class="login-btn">Log In</button>
            <div class="ri-1">
                <a href="http://127.0.0.1:8000/main" class="go-back">Go Back</a>
            </div>
        </form>
      
    </div>
@endsection