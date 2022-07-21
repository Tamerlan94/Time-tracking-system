@extends('layout.main')

@section('content')
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="border rounded-2 p-4">
            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Имя пользователя</label>
                    <input name="username" type="text" class="form-control" id="username" required aria-describedby="validationUsername">
                    <div id="validationUsername" class="form-text text-danger">
                        {!! session()->get('loginError') !!}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input name="password" type="password" class="form-control" id="password" required aria-describedby="validationPassword">
                    <div id="validationPassword" class="form-text text-danger">
                        {!! session()->get('passwordError') !!}
                    </div>
                </div>
                <button type="submit" id="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>
@endsection



