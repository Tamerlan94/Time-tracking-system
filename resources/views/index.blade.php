@extends('layout.main')

@section('content')
    <div id="mainApp">
        <div class="border rounded-2">
            <div class="d-flex">
                <div class="card ms-3" style="width: 100px;">
                    <img
                        src="data:image/png;base64,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"
                        class="card-img-top" alt="avatar" style="width: 95px">
                    <div class="text-center p-1">
                        <h5 class="card-title">{{ auth()->user()->role->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ auth()->user()->first_name }}</h6>
                        <a class="btn btn btn-outline-secondary" href="/api/logout">выход</a>
                        @if(auth()->user()->role_id == 1)
                            <a class="btn btn btn-outline-secondary" href="/admin">админка</a>
                        @endif
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
                            <td v-bind:class="{'table-color': colored[0]}"></td>
                            <td v-bind:class="{'table-color': colored[1]}"></td>
                            <td v-bind:class="{'table-color': colored[2]}"></td>
                            <td v-bind:class="{'table-color': colored[3]}"></td>
                            <td v-bind:class="{'table-color': colored[4]}"></td>
                            <td v-bind:class="{'table-color': colored[5]}"></td>
                            <td v-bind:class="{'table-color': colored[6]}"></td>
                            <td v-bind:class="{'table-color': colored[7]}"></td>
                            <td v-bind:class="{'table-color': colored[8]}"></td>
                            <td v-bind:class="{'table-color': colored[9]}"></td>
                            <td v-bind:class="{'table-color': colored[10]}"></td>
                            <td v-bind:class="{'table-color': colored[11]}"></td>
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
                                  placeholder="Комментарий" v-model="taskComment">@{{ taskComment }}</textarea>
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
