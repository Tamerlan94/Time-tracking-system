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

            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <div>
                                <span style="width: 20px">Задачи по проекту 1:  </span>
                                <span>всего:</span>
                                <input style=" width: 25px"></input>

                                <span>выпалнено:</span>
                                <input style=" width: 25px"></input>

                                <span>%выполнения:</span>
                                <input style="width: 25px"></input>
                            </div>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">

                            <div class="container">
                                <div class="border rounded-2">
                                    <div class="d-flex justify-content-between m-3">
                                        <div class="d-flex">
                                            <h4 class="me-2"> </h4>
                                            <div class="input-group date">
                                                <input type="text" class="form-control datepicker" value="{{ date('d-m-Y') }}">
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
                                            @foreach($users as $user)
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>{{ $user->first_name}} {{ $user->last_name }} {{ $user->middle_name }}</td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="p-4">
                <form action="/api/user-action" method="post">
                    @csrf
                    <div class="row g-3">
                        <label for="">Добавление пользователя</label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Middle name" aria-label="Middle name" name="middle_name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Login" aria-label="Login" name="username">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Password" aria-label="Password" name="password">
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="role" name="role_id">
                                <option selected disabled>Выберите роль</option>
                                <option value="1">Админ</option>
                                <option value="2">Менеджер</option>
                                <option value="3">Юзер</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Добавить пользователя</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="p-4">
                <form action="/api/project-action" method="post">
                    @csrf
                    <div class="row g-3">
                        <label for="">Добавление проекта</label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Название проекта" aria-label="Project name" name="name">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="ID менеджера" name="manager_id">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Добавить проект</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="p-4">
                <form action="/api/task-action" method="post">
                    @csrf
                    <div class="row g-3">
                        <label for="">Добавление задачи</label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Название задачи" name="name">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="ID проекта" name="project_id">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Название задачи" name="name">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="ID статуса" name="status_id">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="ID пользователя" name="user_id">
                        </div>
                        <div class="col">
                            <div class="input-group date">
                                <input type="text" class="form-control datepicker" value="{{ date('Y-m-d') }}" name="deadline">
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
                        <div class="col-12">
                            <textarea class="form-control mb-3" id="comment" rows="3"
                                      placeholder="Комментарий" name="comment"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Добавить задачу</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
