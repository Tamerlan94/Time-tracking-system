$(document).ready(function () {
    $('.datepicker').datepicker({
        format: "dd-mm-yyyy",
        todayHighlight: true,
        todayBtn: "linked",
    });

    $('.input-daterange input').each(function () {
        $(this).datepicker('clearDates', {
            format: "dd-mm-yyyy",
            todayHighlight: true,
            todayBtn: "linked",
        });
    });

    $('#timepicker1').timepicker();
    $('#timepicker2').timepicker();

    setTimeout(function () {
        let element = $('.search').detach();
        element.appendTo('#searchPlace');
    }, 10);

    let project_id;
    let project_name;
    let project_description;
    let task_id;
    let task_name;
    let task_comment;
    let task_time_from;
    let task_time_to;

    $('.task-b').on("click", function (e) {
        let taskId = $(this).parent().children("td:first").text();
        console.log(taskId);

        $.ajax({
            url: 'api/get-info',
            method: 'post',
            dataType: 'json',
            data: {id: taskId},
            success: function (e) {
                console.log(e);
                project_id = e.project_id;
                task_id = e.id;


                task_name = $('.modal-header div h5').text(e.name);
                project_name = $('.modal-header div h6').text(e.project.name);
                project_description = $('.modal-body #desc').text(e.description);
                task_comment = $('.modal-body #comment').text(e.work_hours[0].comment);
            }
        })

        let modalWindow = new bootstrap.Modal($('#modal'));
        // $('.modal-title').append('Задача');
        modalWindow.show();
        // console.log($(this).text());
    });

    $('#save').click(function (e){
        e.preventDefault();
        $.ajax({
            url: 'api/createOrUpdateTask',
            method: 'post',
            dataType: 'json',
            data: {
                // project_id:
                //         status_id:
                // user_id:
                // name:
                // description:

            }
        });
    });

});
