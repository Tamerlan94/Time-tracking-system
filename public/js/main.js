$(document).ready(function () {
    $('.datepicker').datepicker({
        format: "dd-mm-yyyy",
        todayHighlight: true,
        todayBtn: "linked",
    });

    // $('#timepicker1').timepicker();
    // $('#timepicker2').timepicker();

    setTimeout(function () {
        let element = $('.search').detach();
        element.appendTo('#searchPlace');
    }, 10);

    $('.task-b').on("click", function (e) {
        let taskId = $(this).parent().children("td:first").text();
        console.log(taskId);

        maimApp.taskInfo(taskId);

    });
    // $.ajax({
    //     url: 'api/get-info',
    //     method: 'post',
    //     dataType: 'json',
    //     data: {id: taskId},
    //     success: function (e) {
    //         console.log(e);
    //         project_id = e.project_id;
    //         task_id = e.id;
    //         user_id = e.user_id;
    //
    //         status = $('#selectStatus').val();
    //         task_name = $('.modal-header div h5').text(e.name);
    //         project_name = $('.modal-header div h6').text(e.project.name);
    //         project_description = $('.modal-body #desc').text(e.description);
    //         task_comment = $('.modal-body #comment').text(e.work_hours[0].comment);
    //     }
});

//     let modalWindow = new bootstrap.Modal($('#modal'));
//     // $('.modal-title').append('Задача');
//     modalWindow.show();
//     // console.log($(this).text());
// });


let maimApp = new Vue({
    el: '#mainApp',
    data: {
        taskName: '',
        taskProject: '',
        taskDescription: '',
        taskFrom: '7',
        taskTo: '22',
        taskStatuses: '0',
        taskComment: '',
        colored: [ false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false ],
        colorArray: [ 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22 ]
    },
    mounted() {
    },
    methods: {
        checkColor(){
            let first = this.taskFrom;
            let end = this.taskTo;

            let firstIndex = this.colorArray.findIndex((element, index, array) => {
                if(first == element) return index;
            });

            let endIndex = this.colorArray.findIndex((element, index, array) => {
                if(end == element) return index;
            });

            for (let i = firstIndex; i < endIndex; i++) {
                Vue.set(this.colored, i, true);
            }
        },
        saveTask() {

        },
        taskInfo(taskId) {
            axios
                .post('api/get-info', {
                    id: taskId,
                })
                .then(response => {
                    console.log(response);

                    this.taskName = response.data.name;
                    this.taskProject = response.data.project.name;
                    this.taskDescription = response.data.description;
                    this.taskComment = response.data.comment;
                    this.taskFrom = response.data.work_hours[0].start_hour;
                    this.taskTo = response.data.work_hours[0].end_hour;
                    this.taskStatuses = response.data.status_id;

                    let modalWindow = new bootstrap.Modal($('#modal'));
                    modalWindow.show();

                    this.checkColor();
                })
                .catch(error => {
                    console.log(error);
                })
        }

    },
});
