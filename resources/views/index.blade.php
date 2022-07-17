@extends('Layout.main')

@section('content')
    <div class="border rounded-2">
        <div class="d-flex">
            <div class="p-2 text-center">
                <img
                    src="https://advancingdatajustice.turing.ac.uk/assets/decidim/default-avatar-43686fd5db4beed0141662a012321bbccd154ee1d9188b0d1f41e37b710af3cb.svg"
                    class="img-fluid" alt="avatar" style="width: 100px">
                <select class="form-select form-select-sm" disabled>
                    <option value="1">Админ</option>
                    <option value="2">Менеджер</option>
                    <option selected value="3">Пользователь</option>
                </select>
            </div>
            <div class="text-center align-self-center flex-fill">
                <h1>Учет рабочего времени</h1>
            </div>
        </div>

    </div>

@endsection
