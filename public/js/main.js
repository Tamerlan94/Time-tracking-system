$(document).ready(function () {
    $('.datepicker').datepicker({
        format: "dd-mm-yyyy",
        todayHighlight: true,
        todayBtn: "linked",
    });

    $('#timepicker1').timepicker();
    $('#timepicker2').timepicker();

    setTimeout(function () {
        let element = $('.search').detach();
        element.appendTo('#searchPlace');
    }, 10);

    // $('.task-b').on("click", function (e) {
        // let taskId = $(this).parent().children("td:first").text();
        // console.log(taskId);

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
        taskFrom: '',
        taskTo: '',
        taskStatuses: '',
        taskComment: ''
    },
    mounted() {
        $('.task-b').on("click", function (e) {
            let taskId = $(this).parent().children("td:first").text();
            this.taskInfo(taskId);
        });
    },
    methods: {
        saveTask() {

        },
        taskInfo(taskId) {
            axios
                .post('api/get-info', {
                    id: taskId,
                })
                .then(response => {
                    this.taskName = response.data.name;
                    this.taskProject = response.data.project.name;
                    this.taskDescription = response.data.description;
                    this.taskComment = response.data.comment;
                })

            let modalWindow = new bootstrap.Modal($('#modal'));
            // $('.modal-title').append('Задача');
            modalWindow.show();
        }

    },
});
