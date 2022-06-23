@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')

    <div class="todo">
        <div class="container">

            <div class="auth">

                <h1 class="auth__title">Регистрация</h1>

                <form action="{{ route('register__process') }}" method="POST" class="authForm">
                    @csrf

                    <div class="authForm__group">
                        <label for="name" class="authForm__label">Ваше имя</label>
                        <input type="text" name="name" class="authForm__input" placeholder="name">
                    </div>

                    <div class="authForm__group">
                        <label for="email" class="authForm__label">Почта</label>
                        <input type="text" name="email" class="authForm__input" placeholder="email">
                    </div>

                    <div class="authForm__group">
                        <label for="password" class="authForm__label">Пароль</label>
                        <input type="password" name="password" class="authForm__input" placeholder="password">
                    </div>

                    <div class="authForm__group">
                        <label for="password_confirmation" class="authForm__label">Подтверждение пароля</label>
                        <input type="password" name="password_confirmation" class="authForm__input" placeholder="password confirmation">
                    </div>

                    <button class="authForm__submit" type="submit">Войти</button>

                </form>

                <p>Уже есть аккаунт? <a href="{{ route('login') }}">Авторизируйтесь!</a></p>
                <p>На <a href="{{ route('home') }}">главную.</a></p>
            </div>
        </div>
    </div>

@endsection
