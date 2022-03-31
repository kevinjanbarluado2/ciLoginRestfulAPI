function showHide(e) {
    $(`#${e}`).fadeToggle();
    
}
$(document).ready(function () {


    //Define Constants
    const partnerTab = $('#pills-partner-tab');
    const solicitor = $('#showSolicitor');
    const acct = $('#showAccountant');

    const showAdvisers = $('#showAdvisers');

    countAdviser = () => {
        $('.adviserCount').each(function (ind) {
            $(this).html(`Adviser # ${ind + 1}`);
        })
    }

    $('#enablePartner').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
        ($(this).hasClass('active')) ? partnerTab.hide() && $(this).html('enable partner') && ($(this).removeClass('btn-danger').addClass('btn-success')) : partnerTab.show() && $(this).html('disable partner') && ($(this).removeClass('btn-primary').addClass('btn-danger'))
        return false
    })

    $('#haveSolicitor').on('change', function (e) {
        ($(this).val() == "1") ? solicitor.fadeIn() : solicitor.fadeOut(0);
        return false;
    })

    $('#haveAccountant').on('change', function (e) {
        ($(this).val() == "1") ? acct.fadeIn() : acct.fadeOut(0);
        return false;
    })

    $('#addAdviser').on('click', function (e) {
        let count = $('.adviser').length + 1;
        let addAdv = `
        <div class="adviser">
        <div class="d-flex">
        <h4 align="left" class="adviserCount">Adviser # ${count}</h4>
        <button class="removeAdviser btn btn-danger ml-auto px-3"><i class="fa fa-trash"></i></button>
        </div>

        <div class="row">
            <div class='form-group col-md-12' align='left'>
                <label>Adviser's Name: </label>
                <input type='text' class="form-control info-fld" data-parent='adviser' data-fld='name' placeholder="Enter name..." />
            </div>
        </div>
        <div class="row">
            <div class='form-group col-md-12' align='left'>
                <label>Company Name: </label>
                <input type='text' class="form-control info-fld" data-parent='adviser' data-fld='company' placeholder="Enter company name..." />
            </div>
        </div>
        <div class="row">
            <div class='form-group col-md-4' align='left'>
                <label>Street Address: </label>
                <input type='text' class="form-control info-fld" data-parent='adviser' data-fld='street' placeholder="Enter street address..." />
            </div>
            <div class='form-group col-md-4' align='left'>
                <label>Suburb: </label>
                <input type='text' class="form-control info-fld" data-parent='adviser' data-fld='suburb' placeholder="Enter suburb..." />
            </div>
            <div class='form-group col-md-4' align='left'>
                <label>City: </label>
                <input type='text' class="form-control info-fld" data-parent='adviser' data-fld='city' placeholder="Enter city..." />
            </div>
        </div>
        <div class="row">
            <div class='form-group col-md-6' align='left'>
                <label>Work Phone: </label>
                <input type='phone' class="form-control info-fld" data-parent='adviser' data-fld='workphone' placeholder="Enter work phone..." />
            </div>
            <div class='form-group col-md-6' align='left'>
                <label>Email Address: </label>
                <input type='email' class="form-control info-fld" data-parent='adviser' data-fld='email' placeholder="Enter email address" />
            </div>
        </div>
        </div>`;
        let _html = showAdvisers.html().concat(addAdv)
        showAdvisers.html(_html);
    })

    $('#showAdvisers').on('click', '.removeAdviser', function (e) {
        e.preventDefault();
        $(this).parents('.adviser').remove();
        countAdviser();
    })

})