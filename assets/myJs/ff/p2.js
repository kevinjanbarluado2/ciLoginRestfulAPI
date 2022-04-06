$(document).ready(function () {
    const insertGoal = $('#insertGoal');
    const showTrustee = $('#showTrustee');

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
        <input type="text" name="expectedCost"  class='form-control info-fld time-dd-field' data-fld-name='expectedCost' placeholder="Enter Expected Cost">
        </td>
        <td>
        <input type="text" name="time" class='form-control info-fld time-dd-field' data-fld-name='howToFund' placeholder="Enter How to fund">
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
    $('#needsAnalysis').Editor({
        "font_size": false, "fonts": false, "formatting": false, "params": { 'display': 'none' }
    });

    setTimeout(() => {
        $('#menuBarDiv_needsAnalysis').parent().hide();
    }, 0)

    $('.nav-link').on('click', function () {

        if ($(this).attr('href') === "#notes-p2") {
            $('#menuBarDiv_needsAnalysis').parent().show();
        }
        else {
            $('#menuBarDiv_needsAnalysis').parent().hide();
        }
    })

    //Add Trustee
    countTrustee = () => {
        $('.trusteeCount').each(function (ind) {
            $(this).html(`Trustee # ${ind + 1}`);
        })
    }

    $('#addTrustee').on('click', function (e) {
        let count = $('.trustee').length + 1;
        let addAdv = `
        <div class="trustee">
        <div class="d-flex">
        <h4 align="left" class="trusteeCount">Trustee # ${count}</h4>
        <button class="removeTrustee btn btn-danger ml-auto px-3"><i class="fa fa-trash"></i></button>
        </div>

        <div class="row">
            <div class='form-group col-md-6' align='left'>
                <label>Name: </label>
                <input type='text' class="form-control info-fld" data-parent='trustee' data-fld='name' placeholder="Enter name..." />
            </div>
             <div class='form-group col-md-6' align='left'>
                <label>DOB: </label>
                <input type='date' class="form-control info-fld date-picker" data-parent='trustee' data-fld='company' placeholder="Enter dob..." />
            </div>
        </div>
        <div class="row">
            <div class='form-group col-md-4' align='left'>
                <label>Address: <br>
                <span class='text-danger'>(Trust Deed and Variations)</span>
                </label>
                <input type='text' class="form-control info-fld" data-parent='trustee' data-fld='address' placeholder="Enter address..." />
            </div>
            <div class='form-group col-md-4' align='left'>
                <label>Professional Trustee: </label>
                <input type='text' class="form-control info-fld" data-parent='trustee' data-fld='profTrustee' placeholder="Enter professional trustee..." />
            </div>
            <div class='form-group col-md-4' align='left'>
                <label>Trustee Company Details:  <br>
                <span class='text-danger'>(Incorporate documents)</span></label>
                <input type='text' class="form-control info-fld" data-parent='trustee' data-fld='companyDetails' placeholder="Enter trustee company details..." />
            </div>
        </div>
        <div class="row">
            <div class='form-group col-md-6' align='left'>
                <label>AML/CFT Implications: </label>
                <input type='text' class="form-control info-fld" data-parent='trustee' data-fld='aml' placeholder="Enter AML/CFT Implications..." />
            </div>
            <div class='form-group col-md-6' align='left'>
                <label>Beneficial Owners: </label>
                <input type='text' class="form-control info-fld" data-parent='trustee' data-fld='beneficialOwners' placeholder="Enter Beneficial Owners" />
            </div>
        </div>
        <div class="row">
        <div class='form-group col-md-6' align='left'>
            <label>Source of funds: </label>
            <input type='text' class="form-control info-fld" data-parent='trustee' data-fld='sourceFunds' placeholder="Enter Source of funds..." />
        </div>
        <div class='form-group col-md-6' align='left'>
            <label>Address and ID details: </label>
            <input type='text' class="form-control info-fld" data-parent='trustee' data-fld='addressIdDetails' placeholder="Enter Address and ID details..." />
        </div>
    </div>
        </div>`;
        let _html = showTrustee.html().concat(addAdv)
        showTrustee.html(_html);
    })

    showTrustee.on('click', '.removeTrustee', function (e) {
        e.preventDefault();
        $(this).parents('.trustee').remove();
        countTrustee();
    })


    let refreshLifeStyle = () => {
        let $total = 0;
        $('.lifestlyleEstimatedValue').each(function () {
            $total += ($(this).val() === "") ? 0 : parseFloat($(this).val())
        })
        $('#totalLifeStyleAssets').val($total.toFixed(2));
    }

    let refreshFinancial = () => {
        let $total = 0;
        $('.financialEstimatedValue').each(function () {
            $total += ($(this).val() === "") ? 0 : parseFloat($(this).val())
        })
        $('#totalFinancialAssets').val($total.toFixed(2));
    }

    let refreshLiabilities = () => {
        let $total = 0;
        $('.monthlyRepayment').each(function () {
            $total += ($(this).val() === "") ? 0 : parseFloat($(this).val())
        })
        $('#totalLiabilitiesAssets').val($total.toFixed(2));
    }


    $('#lifestyleAssetsTbl').on('keyup', '.lifestlyleEstimatedValue', function () {
        refreshLifeStyle();
    })

    $('#financialAssetsTbl').on('keyup', '.financialEstimatedValue', function () {
        refreshFinancial();
    })

    $('#liabilitiesTbl').on('keyup', '.monthlyRepayment', function () {
        refreshLiabilities();
    })

    $('#simpe-a-l-p2').on('click', '.closeAsset', function () {
        $(this).parents('tr').remove();
        refreshLifeStyle();
        refreshFinancial();
        refreshLiabilities();
    })


    $('#add-lifestyleAsset-btn').on('click', function () {
        let html = `<tr>
    <td><input class="form-control assetDescription" type="text" placeholder="Enter Asset Description..."></td>
    <td>
      <select class="lifestyleOwner form-control">
        <option value="client">Client</option>
        <option value="partner">Partner</option>
        <option value="both">Client and Partner</option>
      </select>
    </td>
    <td>
      <div class="input-group">
        <span class="input-group-addon">$</span><input type="number" step="0.01" min="0" max="1" class="form-control disable-char lifestlyleEstimatedValue">
      </div>
    </td>
    <td><button type="button" class="closeAsset close" aria-label="Close"><span aria-hidden="true">×</span></button></td>
  </tr>`
        $('#lifestyleAssetsTbl>tbody').append(html);

    })

    $('#add-financialAsset-btn').on('click', function () {
        let html = `<tr>
        <td><input class="form-control financialsAssets" placeholder="Enter Investment Assets..." type="text"></td>
        <td>
          <select class="financialOwner form-control">
                  <option value="client">Client</option>
                  <option value="partner">Partner</option>
                  <option value="both">Client and Partner</option>
          </select>
        </td>
        <td>
          <div class="input-group">
            <span class="input-group-addon">$</span><input type="number" class="form-control valuedAt disable-char">
          </div>
        </td>
        <td>
          <div class="input-group">
            <span class="input-group-addon">$</span><input type="number" class="form-control financialEstimatedValue disable-char">
          </div>
        </td>
        <td><button type="button" class="closeAsset close" aria-label="Close"><span aria-hidden="true">×</span></button></td>
      </tr>`
        $('#financialAssetsTbl>tbody').append(html);

    })
    $('#add-liabilities-btn').on('click', function () {
        let html = `<tr>
        <td><input class="form-control typeLender" placeholder="Enter Type / Lender..."  type="text"></td>
        <td>
          <select class="liabilitiesOwner form-control">
              <option value="client">Client</option>
              <option value="partner">Partner</option>
              <option value="both">Client and Partner</option>
          </select>
        </td>
        <td>
          <div class="input-group">
            <span class="input-group-addon">$</span><input type="number" class="form-control eif-fld7 amountOwing disable-char">
          </div>
        </td>
        <td>
          <div class="input-group">
          <input type="number" class="form-control eif-fld7 interestRate disable-char">
          <span class="input-group-addon">%</span>
          </div>
        </td>
        <td>
          <div class="input-group">
            <span class="input-group-addon">$</span><input type="number" class="form-control eif-fld7 monthlyRepayment disable-char">
          </div>
        </td>
        <td><button type="button" class="closeAsset close" aria-label="Close"><span aria-hidden="true">×</span></button></td>
      </tr>`
        $('#liabilitiesTbl>tbody').append(html);

    })

    $('#your_annual_income, #partner_annual_income, #your_other_income').change(function (e) {
        e.preventDefault();
        var your_annual_income = $('#your_annual_income').val();
        var partner_annual_income = $('#partner_annual_income').val();
        var your_other_income = $('#your_other_income').val();

        var your_income_freq = $('#your_income_freq').val();
        var partner_income_freq = $('#partner_income_freq').val();
        var other_income_freq = $('#other_income_freq').val();

        your_annual_income = parseInt(your_annual_income) || 0;
        partner_annual_income = parseInt(partner_annual_income) || 0;
        your_other_income = parseInt(your_other_income) || 0;

        your_income_freq = parseInt(your_income_freq) || 0;
        partner_income_freq = parseInt(partner_income_freq) || 0;
        other_income_freq = parseInt(other_income_freq) || 0;

        your_annual_income = your_annual_income * your_income_freq;
        partner_annual_income = partner_annual_income * partner_income_freq;
        your_other_income = your_other_income * other_income_freq;

        var total = your_annual_income + partner_annual_income + your_other_income;
        total = parseInt(total);
        if (total != '' || total > 0) {
            $('#your_annual_household_income').val(total.toFixed(2));
        } else {
            $('#your_annual_household_income').val('');
        }
    });





});