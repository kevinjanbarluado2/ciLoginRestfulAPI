<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#verification" role="tab" aria-controls="verification" aria-selected="true">
            Verification
        </a>
    </li>

</ul>

<div class="tab-content">
    <div class="tab-pane fade show active" role="tabpanel" id="verification" aria-labelledby="verification">
    <br>

        <div class="row">
            <div class="form-group col-md-4" align="left">
                <label><strong>Is this for an individual?</strong></label>
                <select data-parent="acctant" data-fld="forIndividual" id="forIndividual" class="form-control info-fld">
                    <option value="" selected="">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
        </div>
  

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
        <table class="table table-bordered" id="comboTable">
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
    </div>
</div>