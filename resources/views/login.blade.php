@extends('layouts.master')

@section('title')
    Авторизация
@endsection

@section('content')
    <div>
        <img src="https://st2.depositphotos.com/3369547/11437/v/450/depositphotos_114375706-stock-illustration-businessman-avatar-icon-person-design.jpg" alt="" style="max-height: 350px; margin-left: 500px" >
    </div>
    <div class="container">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-success">Войти</button>
        </form>
    </div>

@endsection
