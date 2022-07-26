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

    $('#timepicker1').timepicker();
    $('#timepicker2').timepicker();

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
                $('.modal-header div h5').text(e.name);
            }
        })


        let modalWindow = new bootstrap.Modal($('#modal'));
        // $('.modal-title').append('Задача');
        modalWindow.show();
        // console.log($(this).text());
    });
});
