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
                                                    <th>Проект 1</th>
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