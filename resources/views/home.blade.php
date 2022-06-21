@extends('layouts.app')

@section('title', 'Активные задачи')

@section('content')

    <div class="todo">
        
        <div class="container">

            <div class="auth">  
                <a class="auth__link" href="{{ route('login') }}">Войти</a>
                <a class="auth__link" href="{{ route('register') }}">Зарегестрироваться</a>
            </div>

                <div class="todoAdd">

                    <h1 class="todoAdd__title">Добавить задачу</h1>

                    <form action="" method="POST" class="todoAdd__form">
                        @csrf

                        <input class="todoAdd__input" type="text" placeholder="Задача">
        
                        <button class="todoAdd__submit" type="submit">Добавить</button>
        
                    </form>
                </div>

                <div class="main">

                    <h1 class="main__title">Список задач</h1>

                    <div class="todoList">
                        <div class="todoList__item">

                            <h1 class="todoList__title">Скушать супчик</h1>

                            <form action="" method="POST">
                                @csrf
                                @method('put')
                                <button type="submit">Выполнено</button>
                            </form>

                            <form action="" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Удалить</button>
                            </form>

                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
