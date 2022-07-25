@extends('layout.main')

@section('content')
    <div class="border rounded-2">
        <div class="d-flex">
            <div class="card ms-3" style="width: 100px;">
                <img src="https://advancingdatajustice.turing.ac.uk/assets/decidim/default-avatar-43686fd5db4beed0141662a012321bbccd154ee1d9188b0d1f41e37b710af3cb.svg"
                     class="card-img-top" alt="avatar" style="width: 100px">
                <div class="text-center p-1">
                    <h5 class="card-title">{{ auth()->user()->role->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ auth()->user()->first_name }}</h6>
                    <a class="btn btn btn-outline-secondary" href="/api/logout">выход</a>
                </div>
            </div>
            <div class="text-center align-self-center flex-fill">
                <h1>Учет рабочего времени</h1>
            </div>
        </div>
        <hr class="m-2">
        <div class="d-flex justify-content-between m-3">
            <button type="button" class="btn btn-secondary" id="bbb">Посмотреть персональную статистику</button>
            <div class="d-flex">
                <h4 class="me-2">Сегодня: </h4>
                <div class="input-group date">
                    <input type="text" class="form-control datepicker" value="{{ date('d/m/Y') }}">
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
            <div class="d-flex" role="search" id="searchPlace">

            </div>
        </div>
        <div>
            <table class="table table-striped table-bordered" id="table" data-toggle="table" data-search="true" data-search-highlight="true">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col" data-field="project" data-sortable="true" id="projectFilter">Проект</th>
                    <th scope="col" data-field="task" data-searchable="true">Задача</th>
                    <th scope="col" data-field="deadline" data-sortable="true" id="deadlineFilter">Дэдлайн</th>
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
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->project->name }}</td>
                        <td class="task-b">{{ $task->name }}</td>
                        <td>{{ $task->deadline }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title" id="staticBackdropLabel">Задача 1</h5>
                        <h6 class="">Проект 1</h6>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control mb-3" id="" rows="3" placeholder="Описание">Описание задачи</textarea>
                    <div class="d-flex align-items-center mb-3">
                        <p class="m-0 me-2">С</p>
                        <div class="input-group date">
                            <input type="text" class="form-control datepicker" value="{{ date('d/m/Y') }}">
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
                        <p class="m-0 me-2">По</p>
                        <div class="input-group date">
                            <input type="text" class="form-control datepicker" value="{{ date('d/m/Y') }}">
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
                    <select class="form-select mb-3">
                        <option disabled selected>Тип работы</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <textarea class="form-control mb-3" id="" rows="3" placeholder="Комментарий">Комментарий</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Сохранить</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
@endsection
