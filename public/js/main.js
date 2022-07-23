$(document).ready(function () {
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        todayHighlight: true,
        todayBtn: "linked",
    });

    setTimeout(function () {
        let element = $('.search').detach();
        element.appendTo('#searchPlace');
    }, 10);

    $('.task-b').on("click", function (e) {
        let taskId = $(this).parent().children("td:first").text();
        console.log(taskId);

        $.ajax({
            url: 'api/task',
            method: 'get',
            dataType: 'json',
            data: {id: taskId},
            success: function (data) {
                console.log(data);
            }
        })


        // let modalWindow = new bootstrap.Modal($('#modal'));
        $('.modal-title').append('Задача');
        // modalWindow.show();
        // console.log($(this).text());
    });


    console.log('end of js');
});
