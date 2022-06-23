@extends('layouts.app')

@section('title', 'Активные задачи')

@section('content')
    <div class="todo">  
        <div class="container">
            <div class="authBtns">  
                @auth('web')
                    <h1 class="countDone">Выполнено {{ $doneCount }} из {{ count($todos) }}</h1>
                    <h2>{{ auth()->user()->name }}</h2>   
                    <a href="{{ route('logout') }}" class="authBtns__link">Выйти</a>
                @endauth

                @guest
                    <a class="authBtns__link" href="{{ route('login') }}">Войти</a>
                    <a class="authBtns__link" href="{{ route('register') }}">Зарегестрироваться</a>
                @endguest
            </div>

            <div class="todoAdd">

                <h1 class="todoAdd__title">Добавить задачу</h1>

                <form action="{{ route('todos.create') }}" method="POST" class="todoAdd__form">
                    @csrf

                    <input class="todoAdd__input" name="todo_name" type="text" placeholder="Задача">
    
                    <button class="todoAdd__submit" type="submit">Добавить</button>
    
                </form>
            </div>

            <div class="main">
                <div class="todoList">

                    @foreach ($todos as $todo)
                        @if ($todo -> todo_status_id == 2)
                            <div class="todoList__item closed">
                        @else
                            <div class="todoList__item">
                        @endif
                        
                        <h1 class="todoList__title">{{ $todo -> todo_name }}</h1>

                        <h4 class="todoList__date">{{ $todo -> updated_at }}</h3>

                        <form action="{{ route('todo.update', ['todo_id' => $todo -> id])}}" method="POST">
                            @csrf
                            @method('put')

                            @if ($todo -> todo_status_id == 2)
                                <button class="todoList__againBtn" type="submit">Выполнить снова</button>
                            @else
                                <button class="todoList__acceptBtn" type="submit">Выполнить</button>
                            @endif

                        </form>

                        

                        <form action="{{ route('todo.destroy', ['todo_id' => $todo -> id]) }}" method="POST">
                            @csrf
                            @method('delete')

                            <button class="todoList__deleteBtn" type="submit">Удалить</button>
                        </form>

                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
@endsection
