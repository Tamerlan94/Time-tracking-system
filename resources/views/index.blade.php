@extends('layout.main')

@section('content')
    <div id="mainApp">
        <div class="border rounded-2">
            <div class="d-flex">
                <div class="card ms-3" style="width: 100px;">
                    <img
                        src="https://advancingdatajustice.turing.ac.uk/assets/decidim/default-avatar-43686fd5db4beed0141662a012321bbccd154ee1d9188b0d1f41e37b710af3cb.svg"
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
                <a href="/statistic" type="button" class="btn btn-secondary" id="bbb">Посмотреть персональную статистику</a>
                <div class="d-flex">
                    <h4 class="me-2">Сегодня: </h4>
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
                <div class="d-flex" role="search" id="searchPlace">

                </div>
            </div>
            <div>
                <table class="table table-striped table-bordered" id="table" data-toggle="table" data-search="true"
                       data-search-highlight="true">
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
                            <td class="
                        @php
                    $date = strtotime($task->deadline);
                    $currentDate = strtotime(date('d-m-Y'));
                    $result = ($date - $currentDate) / (60*60*24);
                    if($result <= 0){
                        echo "table-end";
                    }
                    if($result <= 3 && $result > 1){
                        echo "table-warn";
                    }
                    if($result == 1){
                        echo "table-alarm";
                    }
                    @endphp">{{ $task->deadline }}</td>
                            <td v-bind:class="{'table-color': colored[0] === 'true'}"></td>
                            <td v-bind:class="{'table-color': colored[1]}"></td>
                            <td v-bind:class="{'table-color': colored[2]}"></td>
                            <td v-bind:class="{'table-color': colored[3]}"></td>
                            <td v-bind:class="{'table-color': colored[4]}"></td>
                            <td v-bind:class="{'table-color': colored[5]}"></td>
                            <td v-bind:class="{'table-color': colored[6]}"></td>
                            <td v-bind:class="{'table-color': colored[7]}"></td>
                            <td v-bind:class="{'table-color': colored[8]}"></td>
                            <td v-bind:class="{'table-color': colored[9]  === 'true'}"></td>
                            <td v-bind:class="{'table-color': colored[10]}"></td>
                            <td v-bind:class="{'table-color': colored[11] === 'true'}"></td>
                            <td v-bind:class="{'table-color': colored[12]}"></td>
                            <td v-bind:class="{'table-color': colored[13]}"></td>
                            <td v-bind:class="{'table-color': colored[14]}"></td>
                            <td v-bind:class="{'table-color': colored[15]}"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        {{--  Модальное окно  --}}
        <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="staticBackdropLabel">@{{ taskName }}</h5>
                            <h6>@{{ taskProject }}</h6>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <textarea @if(auth()->user()->role_id == 3) disabled @endif
                    class="form-control mb-3" id="desc" rows="3" placeholder="Описание">@{{ taskDescription }}</textarea>
                        <div class="d-flex align-items-center mb-3">
                            <p class="m-0 me-2">С</p>
                            <div class="input-group bootstrap-timepicker timepicker">
                                <input type="text" id="timepicker1" class="form-control" v-model="taskFrom">
                                <div class="input-group-text input-group-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-stopwatch" viewBox="0 0 16 16">
                                        <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
                                        <path
                                            d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="m-0 me-2">По</p>
                            <div class="input-group bootstrap-timepicker timepicker">
                                <input type="text" id="timepicker2" class="form-control" v-model="taskTo">
                                <div class="input-group-text input-group-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-stopwatch" viewBox="0 0 16 16">
                                        <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
                                        <path
                                            d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <select class="form-select mb-3" id="selectStatus" v-model="taskStatuses">
                            <option disabled selected value="0">Тип работы</option>
                            @foreach($statuses as $status)
                                @if($status->role_id == auth()->user()->role_id)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <textarea class="form-control mb-3" id="comment" rows="3"
                                  placeholder="Комментарий">@{{ taskComment }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="save" data-bs-dismiss="modal" v-on:click="saveTask">Сохранить</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
