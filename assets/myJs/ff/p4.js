$(document).ready(function () {
    $(`#comboTable tbody>tr>th`).find('input').prop('disabled', true).prop('checked', false);
    $('#comboTable').on('click', '.combination', function (e) {
        e.preventDefault();
        let target = parseInt($(this).attr('data-target') - 1);
        $('.combination').each(function () {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        $(`#comboTable tbody>tr>th`).find('input').prop('disabled', true).prop('checked', false);
        $(`#comboTable tbody>tr>th:eq(${target})`).find('input').prop('disabled', false);
    })



});