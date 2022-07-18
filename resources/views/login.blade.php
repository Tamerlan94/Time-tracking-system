@extends('Layout.main')

@section('content')
    <div class="h-100 d-flex align-items-center justify-content-center">
        <form action="/login" method="post">
            @csrf
            <h1>{!! session()->get('error') !!}</h1>
            <div class="mb-3">
                <label for="username" class="form-label">Имя пользователя</label>
                <input name="username" type="text" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Войти</button>
        </form>
    </div>
@endsection



