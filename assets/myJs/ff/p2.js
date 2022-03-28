$(document).ready(function () {
    const insertGoal = $('#insertGoal');

    $('#addGoal').on("click", function () {
        let _html = `<tr class="goals">
        <td>
            <input type="text" name="purpose" list="purposelist" class='form-control info-fld purpose-dd-field' data-fld-name='purpose' placeholder="You can select or type">
            <datalist id="purposelist">
                <option value="Retirement: ">
                <option value="Holiday: ">
                <option value="Special Event: ">
                <option value="Object: ">
                <option value="Future Plan: ">
            </datalist>
        </td>
        <td>
            <input type="text" name="priority" list="prioritylist" class='form-control info-fld priority-dd-field' data-fld-name='priority' placeholder="You can select or type">
            <datalist id="prioritylist">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
                <option value="5">
            </datalist>
        </td>
        <td>
            <input type="text" name="term" list="termlist" class='form-control info-fld term-dd-field' data-fld-name='term' placeholder="You can select or type">
            <datalist id="termlist">
                <option value="Short term">
                <option value="Medium term">
                <option value="Long term">
            </datalist>
        </td>
        <td>
            <input type="text" name="time" list="timelist" class='form-control info-fld time-dd-field' data-fld-name='time' placeholder="You can select or type">
            <datalist id="timelist">
                <option value="Age: ">
                <option value="Year/s: ">
                <option value="Month/s: ">
            </datalist>
        </td>
        <td>
            <button class="btn btn-danger removeMe"><i class="fa fa-trash"></i></button>
        </td>
        </tr>`;
        insertGoal.append(_html);
    })

    $('#goalsTable').on('click', '.removeMe', function () {
        $(this).parents('.goals').remove();
    });
    $('[data-toggle="popover"]').popover();

});