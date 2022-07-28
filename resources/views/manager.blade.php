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
                                                        <td>{{ $user-> first_name}} {{ $user-> last_name }} {{ $user-> middle_name }}</td>
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



                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <div>
                                <span style="width: 20px">Задачи по проекту 2:  </span>
                                <span>всего:</span>
                                <input style=" width: 25px"></input>

                                <span>выпалнено:</span>
                                <input style=" width: 25px"></input>

                                <span>%выполнения:</span>
                                <input style="width: 25px"></input>
                            </div>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">

                            <div class="container">
                                <div class="border rounded-2">
                                        <div class="d-flex justify-content-between m-3">
                                            <div class="d-flex">
                                                <h4 class="me-2"> </h4>
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
                                                    <th scope="col">Проект</th>
                                                    <th scope="col">Задача</th>
                                                    <th scope="col">Время работы сегодня</th>
                                                    <th scope="col">Общее время работы</th>
                                                    <th scope="col">Статус задачи</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table table-hover">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <th>Проект 2</th>
                                                    <th>Задача 1</th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>


                        </div>
                      </div>
                    </div>



                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            <div>
                                <span style="width: 20px">Задачи по проекту 3:  </span>
                                <span>всего:</span>
                                <input style=" width: 25px"></input>

                                <span>выпалнено:</span>
                                <input style=" width: 25px"></input>

                                <span>%выполнения:</span>
                                <input style="width: 25px"></input>
                            </div>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">

                            <div class="container">
                                <div class="border rounded-2">

                                        <div class="d-flex justify-content-between m-3">
                                            <div class="d-flex">
                                                <h4 class="me-2"> </h4>
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
                                                    <th scope="col">Проект</th>
                                                    <th scope="col">Задача</th>
                                                    <th scope="col">Время работы сегодня</th>
                                                    <th scope="col">Общее время работы</th>
                                                    <th scope="col">Статус задачи</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table table-hover">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <th>Проект 3</th>
                                                    <th>Задача 1</th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>


                        </div>
                      </div>
                    </div>


                  </div>



         </div>
    </div>
@endsection
