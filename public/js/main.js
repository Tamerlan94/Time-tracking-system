$(document).ready(function () {
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        todayHighlight: true,
        todayBtn: "linked",
    });

    $('.input-daterange input').each(function() {
        $(this).datepicker('clearDates',{
            format: "dd/mm/yyyy",
            todayHighlight: true,
            todayBtn: "linked",
        });
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
            method: 'post',
            dataType: 'json',
            data: {id: taskId},
            success: function (e) {
                console.log(e);
            }
        })


        let modalWindow = new bootstrap.Modal($('#modal'));
        // $('.modal-title').append('Задача');
        modalWindow.show();
        // console.log($(this).text());
    });


    console.log('end of js');
});
