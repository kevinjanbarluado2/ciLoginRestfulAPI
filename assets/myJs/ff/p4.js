$(document).ready(function () {

    refreshCombo = () => {
        $(`.comboTable tbody>tr>th`).find('input').prop('disabled', true).prop('checked', false);
        $('.comboTable').on('click', '.combination', function (e) {

            e.preventDefault();
            let target = parseInt($(this).attr('data-target') - 1);
            $('.combination').each(function () {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
            $(this).parents('table').find('tbody>tr>th input').prop('disabled', true).prop('checked', false);
            $(this).parents('table').find(`tbody>tr>th:eq(${target}) input`).prop('disabled', false);

        })

        $('.removeMe').on('click', function () {
            $(this).parents('.myCard').remove();
            $('.myCard').each(function (ind, elm) {
                let getName = $(this).find("[data-fld-name=firstName]").val().trim();
                let str = (getName !== "") ? getName : ` Unnamed # ${ind + 1}`;
                $(this).find('.myButton').html(str);
            })
        })

        $('.myCard').on('keyup', "[data-fld-name=firstName]", function (e) {

            let name = $(this).val();
            //console.log(name);
            $(this).parents('.myCard').find('.myButton').html(name);
        });

    }



    $('#forIndividual').on('change', function () {

        if ($(this).val() == "1") {
            $('.tab-content').css('height', 'auto')
            $('#showIndividual').fadeIn();
        } else {
            $('#showIndividual').hide();
            $('#showIndividual').fadeOut();
        }
    })


    $('#showIndividual').on('click', '#addPlan', function (e) {


        let index = $('.myCard').length + 1 ?? 1;

        let html = `<div class="card myCard">
    <div class="card-header" id="heading${index}">
        <h2 class="mb-0">
            <button class="btn btn-link myButton" type="button" data-toggle="collapse" data-target="#collapse${index}" aria-expanded="true" aria-controls="collapse${index}">
                Unnamed # ${index}
            </button>
            <button class="btn float-right btn-danger removeMe"><i class="fa fa-trash"></i></button>
        </h2>
    </div>
    <div id="collapse${index}" class="collapse show" aria-labelledby="heading${index}" data-parent="#accordion">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-3" align="left">
                    <label>Title:</label>
                    <select class="form-control info-fld title-dd-field" data-fld-name="title">
                        <option value="">Please select...</option>
                        <option>Mr.</option>
                        <option>Ms.</option>
                        <option>Mrs.</option>
                        <option>Miss.</option>
                        <option>Dr.</option>
                    </select>
                </div>
                <div class="form-group col-md-3" align="left">
                    <label>First Name:</label>
                    <input type="text" class="form-control info-fld" data-fld-name="firstName" placeholder="Enter first name">
                </div>
                <div class="form-group col-md-3" align="left">
                    <label>Middle Name:</label>
                    <input type="text" class="form-control info-fld" data-fld-name="middleName" placeholder="Enter middle name">
                </div>
                <div class="form-group col-md-3" align="left">
                    <label>Last Name:</label>
                    <input type="text" class="form-control info-fld" data-fld-name="lastName" placeholder="Enter last name">
                </div>
            </div>
            <h4>Residential Address</h4>
            <div class="row address-pane">
                <div class="form-group col-md-6" align="left">
                    <label class="control-label">Street Address</label>
                    <div>
                        <input type="text" data-fld-name="stradd" class="form-control info-fld" id="us3-address" placeholder="Enter street address" autocomplete="off">
                    </div>
                </div>
                <div class="form-group col-md-6" align="left">
                    <label>Suburb</label>
                    <input type="text" class="form-control info-fld" data-fld-name="suburb" placeholder="Enter suburb">
                </div>
            </div>
    
            <div class="row address-pane">
                <div class="form-group col-md-6" align="left">
                    <label>City</label>
                    <input type="text" class="form-control info-fld" data-fld-name="city" placeholder="Enter city">
                </div>
                <div class="form-group col-md-6" align="left">
                    <label>Postcode</label>
                    <input type="number" class="form-control info-fld" data-fld-name="postcode" placeholder="Enter postcode">
                </div>
            </div>
    
            <div class="row">
                <div class="form-group col-md-6" align="left">
                    <label>Date of Birth</label>
                    <input type="text" class="form-control infos-fld date-picker" data-fld-name="dob" placeholder="Enter date of birth">
                </div>
                <div class="form-group col-md-6" align="left">
                    <label>IRD Number</label>
                    <input type="text" id="ird" class="form-control info-fld" data-fld-name="ird" placeholder="Enter IRD Number">
                </div>
            </div>
    
            <h4>Occupation</h4>
            <div class="row">
                <div class="form-group col-md-4" align="left">
                    <label>Employment Status</label>
                    <input type="text" id="employmentStatus" class="form-control info-fld" data-fld-name="employmentStatus" placeholder="Enter employment status">
                </div>
                <div class="form-group col-md-4" align="left">
                    <label>Job title</label>
                    <input type="text" id="jobTitle" class="form-control info-fld" data-fld-name="jobTitle" placeholder="Enter Job Title">
                </div>
                <div class="form-group col-md-4" align="left">
                    <label>Company Name</label>
                    <input type="text" id="companyName" class="form-control info-fld" data-fld-name="companyName" placeholder="Enter Company Name">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6" align="left">
                    <label>Country of Birth</label>
                    <input type="text" id="countryBirth" class="form-control info-fld" data-fld-name="countryBirth" placeholder="Enter Country of Birth">
                </div>
                <div class="form-group col-md-6" align="left">
                    <label>Citizenship</label>
                    <input type="text" id="citizenship" class="form-control info-fld" data-fld-name="citizenship" placeholder="Enter Citizenship">
                </div>
            </div>
            <h4>Document combination to verify identity and address</h4>
            <p>To verify your identity, select one of the ID combinations and tick which document(s) you are providing below:</p>
            <table class="table table-bordered comboTable">
                <thead>
                    <tr>
                        <th><button data-target="1" class="btn combination btn-block btn-info"> Combination 1</button></th>
                        <th><button data-target="2" class="btn combination btn-block btn-info"> Combination 2</button></th>
                        <th><button data-target="3" class="btn combination btn-block btn-info"> Combination 3</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <input type="checkbox"><label> Passport OR</label><br>
                            <input type="checkbox"><label> NZ firearms licence</label>
                        </th>
                        <th>
                            <input type="checkbox"><label> NZ driver licence</label><br>
                            <span>And ONE of the documents listed below:</span><br>
                            <input type="checkbox"><label> Credit, debit or eftpos card (including name and signature)</label> <br>
                            <input type="checkbox"><label> Bank Statement</label> <br>
                            <input type="checkbox"><label> Government agency document (e.g IRD correspondence)</label> <br>
                        </th>
                        <th>
                            <input type="checkbox"><label> NZ driver licence OR</label><br>
                            <input type="checkbox"><label> Kiwi Access Card</label><br>
                            <span>And ONE of the documents listed below:</span><br>
                            <input type="checkbox"><label> Full birth certificate</label><br>
                            <input type="checkbox"><label> Citizenship certificate</label>
                        </th>
                    </tr>
                </tbody>
            </table>
            <h4>Residential address verification</h4>
            <p>To verify your residential address, select ONE of the options below: (This document must be no more than six months old)</p>
            <table class="table table-bordered comboTable">
                <thead>
                    <tr>
                        <th><button data-target="1" class="btn combination btn-block btn-info"> Combination 1</button></th>
                        <th><button data-target="2" class="btn combination btn-block btn-info"> Combination 2</button></th>
    
                    </tr>
                </thead>
                <tbody>
                    <tr>
    
                        <th>
                            <input type="checkbox"><label> Bank or financial institution statement</label><br>
                            <input type="checkbox"><label> Utility document (e.g. electricity, gas, water, landline telephone or Sky TV)</label> <br>
    
                        </th>
                        <th>
                            <input type="checkbox"><label> Rates or house insurance document</label><br>
                            <input type="checkbox"><label> Government agency document (e.g. IRD correspondence)</label><br>
                        </th>
                    </tr>
                </tbody>
            </table>
    
            <p>Digital versions of utility and house insurance documents are acceptable if they show you to be responsible for a fixed non-movable service at the address (digital bank statements and Government agency documents are not acceptable for address verification but can be provided for identity verification.</p>
            <p>For persons under 18 years of age.</p>
            <table class="table table-bordered comboTable">
                <thead>
                    <tr>
                        <th>If none of the identity options are available, please provide:</th>
                        <th>If none of the residential address options are available, please provide:</th>
                    </tr>
                    <tr>
                        <th><button data-target="1" class="btn combination btn-block btn-info"> Combination 1</button></th>
                        <th><button data-target="2" class="btn combination btn-block btn-info"> Combination 2</button></th>
    
                    </tr>
                </thead>
                <tbody>
                    <tr>
    
                        <th>
                            <input type="checkbox"><label> Birth certificate OR</label><br>
                            <input type="checkbox"><label> Student card</label> <br>
    
                        </th>
                        <th>
                            <input type="checkbox"><label> Proof of parent’s or guardian’s address where the minor resides.</label><br>
                            <input type="checkbox"><label> Government agency document (e.g. IRD correspondence)</label><br>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    </div>
    `;
        $('#accordion').append(html);

        refreshCombo();

    })

});