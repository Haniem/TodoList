@extends('layouts.app')

@section('title', 'Авторизация')

@section('content')

<div class="todo">
    <div class="container">

        <div class="auth">

            <h1 class="auth__title">Авторизация</h1>

            <form action="{{ route('login__process') }}" method="post" class="authForm">
                @csrf

                <div class="authForm__group">
                    <label for="email" class="authForm__label">Почта</label>
                    <input type="text" name="email" class="authForm__input" placeholder="email">
                </div>

                <div class="authForm__group">
                    <label for="password" class="authForm__label">Пароль</label>
                    <input type="password" name="password" class="authForm__input" placeholder="password">
                </div>

                <button class="authForm__submit" type="submit">Войти</button>

            </form>

            <p>У вас еще нет аккаунта? <a href="{{ route('register') }}">Зарегетрируйтесь</a>!</p>
            <p>На <a href="{{ route('home') }}">главную</a></p>
        </div>
    </div>
</div>


@endsection

