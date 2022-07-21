@extends('layout.main')

@section('content')
    <div class="container">
        <div class="border rounded-2">
            <div class="d-flex">
                <div class="text-center align-self-center flex-fill">
                    <h1>Персональная статистика</h1>
                </div>
            </div>
            <hr class="m-2">

            <div>
                <span style="padding-right: 5%">Задачи по проекту 1:  </span>
                <span>всего:</span>
                <span style="padding-right: 5%">[вывод]</span>

                <span>выпалнено:</span>
                <span style="padding-right: 5%">[вывод]</span>

                <span>%выполнения:</span>
                <span>[вывод]</span>
            </div>


            <div class="d-flex justify-content-between m-3">

                <div class="d-flex">
                    <h4 class="me-2"></h4>
                    <div class="input-group date" data-provide="datepicker-inline" style="width: 200px">
                        <input type="text" class="form-control">
                        <div class="input-group-addon">
                        </div>
                        <div class="input-group-text">

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Пользователь</th>
                        <th scope="col">Задача</th>
                        <th scope="col">Срок выполнения</th>
                        <th scope="col">Время работы сегодня</th>
                        <th scope="col">Общее время работы</th>
                        <th scope="col">Статус задачи</th>

                    </tr>
                    </thead>
                    <tbody class="table table-hover">
                    <tr>
                        <th scope="row">1</th>
                        <th>ФИО</th>
                        <th>Задача 1</th>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th>ФИО</th>
                        <th>Задача 2</th>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <th>ФИО</th>
                        <th>Задача 3</th>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div>
                <span style="padding-right: 5%">Задачи по проекту 2:  </span>
                <span>всего:</span>
                <span style="padding-right: 5%">[вывод]</span>

                <span>выпалнено:</span>
                <span style="padding-right: 5%">[вывод]</span>

                <span>%выполнения:</span>
                <span>[вывод]</span>
            </div>


            <div>
                <span style="padding-right: 5%">Задачи по проекту 3:  </span>
                <span>всего:</span>
                <span style="padding-right: 5%">[вывод]</span>

                <span>выпалнено:</span>
                <span style="padding-right: 5%">[вывод]</span>

                <span>%выполнения:</span>
                <span>[вывод]</span>
            </div>

        </div>
    </div>
@endsection
