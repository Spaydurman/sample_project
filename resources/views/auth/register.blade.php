@extends('welcome')

@section('content')
    <div class="RegisterContainer">
        <form action="/register" method="post">
            @csrf
            <div class="ri-1">
                <h1 class="register-head">
                    Registration
                </h1>
            </div>
            <div class="ri-1">
                <label for="SFirstname"></label>
                <input type="text" name="SFirstname" id="SFirstname" class="s-input"placeholder="First Name" value="{{ old('SFirstname')}}">
                @error('SFirstname')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="ri-1">
                <label for="SLastName"></label>
                <input type="text" name="SLastName" id="SLastName"  class="s-input" placeholder="Surname" value="{{ old('SLastName')}}">
                @error('SLastName')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="ri-1">
                <label for="SUsername" ></label>
                <input type="text" name="SUsername" id="SUsername" class="s-input" placeholder="Username" value="{{ old('SUsername')}}">
                @error('SUsername')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="ri-1">
                <label for="SEmail" ></label>
                <input type="text" name="SEmail" id="SEmail" class="s-input" placeholder="Email" value="{{ old('SEmail')}}">
                @error('SEmail')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="ri-1">
                <label for="SPassword" ></label>
                <input type="password" name="SPassword" id="SPassword" class="s-input" placeholder="Password" value="{{ old('SPassword')}}">
                @error('SPassword')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="ri-1">
                <label for="SPassword_confirmation"></label>
                <input type="password" name="SPassword_confirmation" id="SPassword_confirmation" class="s-input"placeholder="Confrim Password" value="{{ old('SPassword_confirmation')}}">
                @error('SConfirmPassword')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
           
            <button class="register-btn">Register</button>
            <div class="ri-1">
                <a href="http://127.0.0.1:8000/main" class="go-back">Go Back</a>
            </div>
           
        </form>
      
    </div>
@endsection