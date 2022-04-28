@extends('layouts.master')

@section('title', 'Регистрация')

@section('content')
    <div class="container">
        <img src="https://st2.depositphotos.com/3369547/11437/v/450/depositphotos_114375706-stock-illustration-businessman-avatar-icon-person-design.jpg" alt="" style="max-height: 225px; margin-left: 490px" >
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('sign_up')}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input name= 'name' type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input name="password" type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-success ">Регистрация</button>
        </form>
    </div>
@endsection
