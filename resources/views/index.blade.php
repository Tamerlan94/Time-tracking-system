@extends('layout.main')

@section('content')
    <div class="border rounded-2">
        <div class="d-flex">
            <div class="p-2 text-center">
                <img
                    src="https://advancingdatajustice.turing.ac.uk/assets/decidim/default-avatar-43686fd5db4beed0141662a012321bbccd154ee1d9188b0d1f41e37b710af3cb.svg"
                    class="img-fluid" alt="avatar" style="width: 130px">
                <select name="" class="form-select form-select-sm" disabled>
                    <option selected value="1">{{ auth()->user()->role->name }}</option>
                </select>
            </div>
            <div class="text-center align-self-center flex-fill">
                <h1>Учет рабочего времени</h1>
            </div>
        </div>
        <hr class="m-2">
        <div class="d-flex justify-content-between m-3">
            <button type="button" class="btn btn-secondary">Посмотреть персональную статистику</button>
            <div class="d-flex">
                <h4 class="me-2">Сегодня: </h4>
                <div class="input-group date" data-provide="datepicker-inline">
                    <input type="text" class="form-control">
                    <div class="input-group-addon">
                    </div>
                    <div class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path
                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Проект</th>
                    <th scope="col"><a href="" class="link-secondary">Задача</a></th>
                    <th scope="col"><a href="" class="link-secondary">Дэдлайн</a></th>
                    <th scope="col">07</th>
                    <th scope="col">08</th>
                    <th scope="col">09</th>
                    <th scope="col">10</th>
                    <th scope="col">11</th>
                    <th scope="col">12</th>
                    <th scope="col">13</th>
                    <th scope="col">14</th>
                    <th scope="col">15</th>
                    <th scope="col">16</th>
                    <th scope="col">17</th>
                    <th scope="col">18</th>
                    <th scope="col">19</th>
                    <th scope="col">20</th>
                    <th scope="col">21</th>
                    <th scope="col">22</th>
                </tr>
                </thead>
                <tbody class="table table-hover">
                @foreach($tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <th>{{ $task->project->name }}</th>
                        <th>{{ $task->name }}</th>
                        <th>{{ $task->deadline }}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
