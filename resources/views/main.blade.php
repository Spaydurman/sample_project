@extends('welcome')

@section('content')
    <div class="RightContent">
        <div class="LogRegisterContainer">
            <div class="btnLogIn">
                <button class="btnLR" onclick="location.href='/login'">Log In</button>
            </div>
            <div class="btnRegister">
                <button class="btnLR"  onclick="location.href='/register'">Register</button>
            </div>
        </div>
    </div>
@endsection