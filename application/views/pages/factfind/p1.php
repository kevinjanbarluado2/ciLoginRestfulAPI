<ul class="nav nav-tabs mb-3 flex-column flex-sm-row" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="pills-client-tab" data-toggle="pill" href="#pills-client" role="tab" aria-controls="pills-client" aria-selected="true">Client Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-partner-tab" data-toggle="pill" href="#pills-partner" role="tab" aria-controls="pills-partner" aria-selected="false">Partner Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-dependant-tab" data-toggle="pill" href="#pills-dependant" role="tab" aria-controls="pills-dependant" aria-selected="false">Dependant</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-advisers-tab" data-toggle="pill" href="#pills-advisers" role="tab" aria-controls="pills-advisers" aria-selected="false">Professional Advisers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-notes-tab" data-toggle="pill" href="#pills-notes" role="tab" aria-controls="pills-notes" aria-selected="false">Notes</a>
    </li>
    <button id="enablePartner" class="btn btn-sm position-absolute btn-danger" style="right: 1rem;">Disable Partner</button>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-client" role="tabpanel" aria-labelledby="pills-client-tab">
        <br>
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
            <div class="form-group col-md-9" align="left">
                <label>Other Title:</label>
                <input type="text" class="form-control info-fld" data-fld-name="othertitle" placeholder="Enter other title, if there are">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4" align="left">
                <label>First Name</label>
                <input type="text" class="form-control info-fld necessary_fields client_information_group" data-required_group="client_information" data-tab_id="client-p1-tab" id="client-first-name" data-fld-name="firstname" placeholder="Enter first name">
            </div>
            <div class="form-group col-md-4" align="left">
                <label>Middle Name</label>
                <input type="text" class="form-control info-fld" data-fld-name="secondname" placeholder="Enter Middle Name">
            </div>
            <div class="form-group col-md-4" align="left">
                <label>Surname</label>
                <input type="text" class="form-control info-fld necessary_fields client_information_group" data-required_group="client_information" data-tab_id="client-p1-tab" id="client-last-name" data-fld-name="surname" placeholder="Enter surname">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3" align="left">
                <label>Preferred Name</label>
                <input type="text" class="form-control info-fld" data-fld-name="prefname" placeholder="Enter preferred name">
            </div>
            <div class="form-group col-md-3" align="left">
                <label>Date of Birth</label>
                <!-- <input type="date" class="form-control info-fld" data-fld-name='dob' placeholder="Enter date of birth" /> -->
                <input type="text" id="dob" class="form-control info-fld date-picker person-dob" data-fld-name="dob" placeholder="Enter date of birth">
            </div>
            <div class="form-group col-md-3" align="left">
                <label>Years of Age</label>
                <input type="number" id="myage" class="form-control info-fld person-age" min="0" step="1" data-fld-name="age" placeholder="Enter age" value="0">
            </div>
            <div class="form-group col-md-3" align="left">
                <label>Gender</label>
                <!-- <select class="form-control info-fld gender-dd-field" data-fld-name="gender">
                    <option value="">Please select...</option>
                    <option>Male</option>
                    <option>Female</option>
                </select> -->
                <input type="text" name="gender" list="gendername" class='form-control info-fld gender-dd-field' data-fld-name='gender' placeholder="You can select or type">
                <datalist id="gendername">
                    <option value="Male">
                    <option value="Female">
                </datalist>
            </div>
        </div>

        <h4>Contact Information</h4>
        <div class="row">
            <div class="form-group col-md-6" align="left">
                <label>Home Phone</label>
                <input type="phone" class="form-control info-fld" data-fld-name="homephone" placeholder="Enter home phone">
            </div>
            <div class="form-group col-md-6" align="left">
                <label>Work Phone</label>
                <input type="phone" class="form-control info-fld" data-fld-name="workphone" placeholder="Enter work phone">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6" align="left">
                <label>Mobile Phone</label>
                <input type="phone" class="form-control info-fld" data-fld-name="mobilephone" placeholder="Enter mobile phone">
            </div>
            <div class="form-group col-md-6" align="left">
                <label style="color: red!important">Email address</label>
                <input type="email" id="client_email" class="form-control info-fld necessary_fields client_information_group" data-required_group="client_information" data-tab_id="client-p1-tab" data-fld-name="email" placeholder="Enter email address">
            </div>
        </div>

        <h4>Address Information</h4>

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

        <h4>Current Employment</h4>
        <div class="row">
            <div class="form-group col-md-6" align="left">
                <label>Occupation</label>
                <input type="text" class="form-control info-fld" data-fld-name="occupation" placeholder="Enter occupation">
            </div>
            <!-- <div class="form-group col-md-6" align="left">
                <label>Job Title</label>
                <input type="text" class="form-control info-fld" data-fld-name="jobtitle" placeholder="Enter job title">
            </div> -->
            <div class="form-group col-md-6" align="left">
                <label>Gross Salary</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="number" class="form-control info-fld disable-char" data-fld-name="grosswages" placeholder="Enter gross salary">
                </div>
            </div>
        </div>
        <div class="row">

            <div class="form-group col-md-6" align="left">
                <label>Company Name</label>
                <input type="text" class="form-control info-fld" data-fld-name="employername" placeholder="Enter employer">
            </div>
            <div class="form-group col-md-6" align='left'>
                <label>Employment Status</label>
                <input type="text" class="form-control info-fld" data-fld-name='employmentstatus' placeholder="Enter Employment Status" />
            </div>
        </div>
        <!-- <div class="row">
            <div class="form-group col-md-12" align="center">
                <label>Employment Status:</label><br>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-info" data-fld-name="empstatus">
                        <input type="radio" autocomplete="off" value="ft" checked=""> Full Time
                    </label>
                    <label class="btn btn-info" data-fld-name="empstatus">
                        <input type="radio" autocomplete="off" value="pt"> Part Time
                    </label>
                    <label class="btn btn-info" data-fld-name="empstatus">
                        <input type="radio" autocomplete="off" value="cs"> Casual
                    </label>
                    <label class="btn btn-info" data-fld-name="empstatus">
                        <input type="radio" autocomplete="off" value="un"> Unemployed
                    </label>
                    <label class="btn btn-info" data-fld-name="empstatus">
                        <input type="radio" autocomplete="off" value="se"> Self-Employed
                    </label>
                </div>
            </div>
        </div> -->



        <div class="row">
            <div class="form-group col-md-4" align="left">
                <label>Length (in years)</label>
                <input type="number" class="form-control info-fld" data-fld-name="emplyears" placeholder="Length in years">
            </div>
            <div class="form-group col-md-4" align="left">
                <label>Paid leave owing</label>
                <input type="number" class="form-control info-fld" data-fld-name="paidleave" placeholder="Paid leave owing">
            </div>
            <div class="form-group col-md-4" align="left">
                <label>Start Date</label>
                <input type="text" class="form-control info-fld date-picker" data-fld-name="emplstart" placeholder="Start date...">
            </div>
        </div>
        <!-- <div class="row">
            <div class="form-group col-md-4" align="left">
                <label>Administrative Duties (%)</label>
                <input type="number" class="form-control info-fld" data-fld-name="adminduties" placeholder="Administrative Duties (%)">
            </div>
            <div class="form-group col-md-4" align="left">
                <label>Travel Duties (%)</label>
                <input type="number" class="form-control info-fld" data-fld-name="travelduties" placeholder="Travel Duties (%)">
            </div>
            <div class="form-group col-md-4" align="left">
                <label>Manual Duties (%)</label>
                <input type="number" class="form-control info-fld" data-fld-name="manualduties" placeholder="Manual Duties (%)">
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-6">
                <label>Show Previous Employment</label>
                <div>
                    <label class="switch">
                        <input type="checkbox" checked onclick="showHide('previousClient')">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <div id="previousClient">
            <h4>Previous Employment</h4>
            <div class="row">

                <div class="form-group col-md-6" align="left">
                    <label>Occupation</label>
                    <input type="text" class="form-control info-fld" data-fld-name="prevocc" placeholder="Enter occupation">
                </div>

                <div class="form-group col-md-6" align="left">
                    <label>Gross Salary</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" class="form-control info-fld disable-char" data-fld-name="prevsalary" placeholder="Enter gross salary">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="form-group col-md-6" align="left">
                    <label>Company Name</label>
                    <input type="text" class="form-control info-fld" data-fld-name="prevemployer" placeholder="Enter Company Name">
                </div>
                <div class="form-group col-md-6" align='left'>
                    <label>Employment Status</label>
                    <input type="text" class="form-control info-fld" data-fld-name='prevemploymentstatus' placeholder="Enter Employment Status" />
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6" align="left">
                    <label>Length (in years)</label>
                    <input type="number" class="form-control info-fld" data-fld-name="prevlength" placeholder="Length in years">
                </div>
                <div class="form-group col-md-6" align="left">
                    <label>Paid leave owing</label>
                    <input type="number" class="form-control info-fld" data-fld-name="prevleave" placeholder="Paid leave owing">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6" align="left">
                    <label>Start Date</label>
                    <input type="text" class="form-control info-fld date-picker" data-fld-name="prevstart" placeholder="Start date...">
                </div>
                <div class="form-group col-md-6" align="left">
                    <label>End Date</label>
                    <input type="text" class="form-control info-fld date-picker" data-fld-name="prevend" placeholder="End date...">
                </div>
            </div>
        </div>

        <h4>Residency</h4>

        <div class="row">
            <div class="form-group col-md-12" align="center">
                <label>Residence Status</label><br>
                <div class="btn-group planningToolFetch" data-toggle="buttons" align="center">
                    <label class="btn btn-info" data-fld-name="place_ownership">
                        <input type="radio" autocomplete="off" value="renting"> Renting
                    </label>
                    <label class="btn btn-info" data-fld-name="place_ownership">
                        <input type="radio" autocomplete="off" value="mortgage"> Mortgage
                    </label>
                    <label class="btn btn-info" data-fld-name="place_ownership">
                        <input type="radio" autocomplete="off" value="freehold"> Free Hold
                    </label>
                </div>
            </div>
        </div>



    </div>
    <div class="tab-pane fade" id="pills-partner" role="tabpanel" aria-labelledby="pills-partner-tab">
        <br />
        <div class='row'>
            <div class='form-group col-md-3' align='left'>
                <label>Title:</label>
                <select class='form-control info-fld title-dd-field' data-fld-name='title'>
                    <option value="">Please select...</option>
                    <option>Mr.</option>
                    <option>Ms.</option>
                    <option>Mrs.</option>
                    <option>Miss.</option>
                    <option>Dr.</option>
                </select>
            </div>
            <div class='form-group col-md-9' align='left'>
                <label>Other Title:</label>
                <input type="text" class="form-control info-fld" data-fld-name='othertitle' placeholder="Enter other title, if there are" />
            </div>
        </div>
        <div class='row'>
            <div class="form-group col-md-4" align='left'>
                <label>First Name</label>
                <input type="text" id='partner-first-name' class="form-control info-fld necessary_fields partner_information_group" data-required_group="partner_information" data-tab_id="partner-p1-tab" data-fld-name='firstname' placeholder="Enter first name" />
            </div>
            <div class="form-group col-md-4" align='left'>
                <label>Middle Name</label>
                <input type="text" class="form-control info-fld" data-fld-name='secondname' placeholder="Enter Middle Name" />
            </div>
            <div class="form-group col-md-4" align='left'>
                <label>Surname</label>
                <input type="text" class="form-control info-fld necessary_fields partner_information_group" data-required_group="partner_information" data-tab_id="partner-p1-tab" data-fld-name='surname' placeholder="Enter surname" />
            </div>
        </div>
        <div class='row'>
            <div class="form-group col-md-3" align='left'>
                <label>Preferred Name</label>
                <input type="text" class="form-control info-fld" data-fld-name='prefname' placeholder="Enter preferred name" />
            </div>
            <div class="form-group col-md-3" align='left'>
                <label>Date of Birth</label>
                <!-- <input type="date" class="form-control info-fld" data-fld-name='dob' placeholder="Enter date of birth" /> -->
                <input type="text" class='form-control info-fld date-picker person-dob' data-fld-name='dob' placeholder="Enter date of birth" />
            </div>
            <div class="form-group col-md-3" align='left'>
                <label>Years of Age</label>
                <input type="number" class='form-control info-fld person-age' min='0' step='1' data-fld-name='age' placeholder="Enter age" value='0' />
            </div>
            <div class="form-group col-md-3" align='left'>
                <label>Gender</label>
                <!-- <select class='form-control info-fld gender-dd-field' data-fld-name='gender'>
                    <option value="">Please select...</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select> -->
                <input type="text" name="gender" list="gendername" class='form-control info-fld gender-dd-field' data-fld-name='gender' placeholder="You can select or type">
                <datalist id="gendername">
                    <option value="Male">
                    <option value="Female">
                </datalist>

            </div>
        </div>

        <h4>Contact Information</h4>
        <div class='row'>
            <div class="form-group col-md-6" align='left'>
                <label>Home Phone</label>
                <input type="phone" class="form-control info-fld" data-fld-name='homephone' placeholder="Enter home phone" />
            </div>
            <div class="form-group col-md-6" align='left'>
                <label>Work Phone</label>
                <input type="phone" class="form-control info-fld" data-fld-name='workphone' placeholder="Enter work phone" />
            </div>
        </div>
        <div class='row'>
            <div class="form-group col-md-6" align='left'>
                <label>Mobile Phone</label>
                <input type="phone" class="form-control info-fld" data-fld-name='mobilephone' placeholder="Enter mobile phone" />
            </div>
            <div class="form-group col-md-6" align='left'>
                <label>Email address</label>
                <input type="email" id='partner_email' class="form-control info-fld necessary_fields partner_information_group" data-required_group="partner_information" data-tab_id="partner-p1-tab" data-fld-name='email' placeholder="Enter email address" />
            </div>
        </div>

        <h4>Address Information</h4>
        <div class='row'>
            <div class='col-md-12'>
                <div class="checkbox text-left">
                    <label><input type="checkbox" id='set-partner-address-same'> Set address similar to client's?</label>
                </div>
            </div>
        </div>
        <div class='row address-pane'>
            <div class="form-group col-md-6" align='left'>
                <label>Street Address</label>
                <input type="text" class="form-control info-fld" data-fld-name='stradd' placeholder="Enter street address" />
            </div>
            <div class="form-group col-md-6" align='left'>
                <label>Suburb</label>
                <input type="text" class="form-control info-fld" data-fld-name='suburb' placeholder="Enter suburb" />
            </div>
        </div>
        <div class='row address-pane'>
            <div class="form-group col-md-6" align='left'>
                <label>City</label>
                <input type="text" class="form-control info-fld" data-fld-name='city' placeholder="Enter city" />
            </div>
            <div class="form-group col-md-6" align='left'>
                <label>Postcode</label>
                <input type="number" class="form-control info-fld" data-fld-name='postcode' placeholder="Enter postcode" />
            </div>
        </div>

        <h4>Current Employment</h4>
        <div class='row'>
            <div class="form-group col-md-6" align='left'>
                <label>Occupation</label>
                <input type="text" class="form-control info-fld" data-fld-name='occupation' placeholder="Enter occupation" />
            </div>
            <!-- <div class="form-group col-md-6" align='left'>
                <label>Job Title</label>
                <input type="text" class="form-control info-fld" data-fld-name='jobtitle' placeholder="Enter job title" />
            </div> -->
            <div class="form-group col-md-6" align='left'>
                <label>Gross Salary</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="number" class="form-control info-fld disable-char" data-fld-name='grosswages' placeholder="Enter gross salary" />
                </div>
            </div>
        </div>
        <div class='row'>

            <div class="form-group col-md-6" align='left'>
                <label>Company Name</label>
                <input type="text" class="form-control info-fld" data-fld-name='employername' placeholder="Enter Company Name" />
            </div>
            <div class="form-group col-md-6" align='left'>
                <label>Employment Status</label>
                <input type="text" class="form-control info-fld" data-fld-name='employmentstatus' placeholder="Enter Employment Status" />
            </div>
        </div>
        <!-- <div class='row' style="padding:20px" align='center'>
            <label>Employment Status:</label><br />
            <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld-name='empstatus'>
                    <input type="radio" autocomplete="off" value="ft" checked> Full Time
                </label>
                <label class="btn btn-info" data-fld-name='empstatus'>
                    <input type="radio" autocomplete="off" value="pt"> Part Time
                </label>
                <label class="btn btn-info" data-fld-name='empstatus'>
                    <input type="radio" autocomplete="off" value="cs"> Casual
                </label>
                <label class="btn btn-info" data-fld-name='empstatus'>
                    <input type="radio" autocomplete="off" value="un"> Unemployed
                </label>
                <label class="btn btn-info" data-fld-name='empstatus'>
                    <input type="radio" autocomplete="off" value="se"> Self-Employed
                </label>
            </div>
        </div> -->
        <div class='row'>
            <div class="form-group col-md-4" align='left'>
                <label>Length (in years)</label>
                <input type="number" class="form-control info-fld" data-fld-name='emplyears' placeholder="Length in years" />
            </div>
            <div class="form-group col-md-4" align='left'>
                <label>Paid leave owing</label>
                <input type="number" class="form-control info-fld" data-fld-name='paidleave' placeholder="Paid leave owing" />
            </div>
            <div class="form-group col-md-4" align='left'>
                <label>Start Date</label>
                <input type="text" class="form-control info-fld date-picker" data-fld-name='emplstart' placeholder="Start date..." />
            </div>
        </div>
        <div class='row'>
            <div class="form-group col-md-4" align='left'>
                <label>Administrative Duties (%)</label>
                <input type="number" class="form-control info-fld" data-fld-name='adminduties' placeholder="Administrative Duties (%)" />
            </div>
            <div class="form-group col-md-4" align='left'>
                <label>Travel Duties (%)</label>
                <input type="number" class="form-control info-fld" data-fld-name='travelduties' placeholder="Travel Duties (%)" />
            </div>
            <div class="form-group col-md-4" align='left'>
                <label>Manual Duties (%)</label>
                <input type="number" class="form-control info-fld" data-fld-name='manualduties' placeholder="Manual Duties (%)" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Show Previous Employment</label>
                <div>
                    <label class="switch">
                        <input type="checkbox" checked onclick="showHide('previousPartner')">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>


        <div id="previousPartner">
            <h4>Previous Employment</h4>
            <div class='row'>
                <div class="form-group col-md-6" align='left'>
                    <label>Occupation</label>
                    <input type="text" class="form-control info-fld" data-fld-name='prevocc' placeholder="Enter occupation" />
                </div>

                <div class="form-group col-md-6" align='left'>
                    <label>Gross Salary</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" class="form-control info-fld disable-char" data-fld-name='prevsalary' placeholder="Enter gross salary" />
                    </div>
                </div>
            </div>
            <div class='row'>

                <div class="form-group col-md-6" align='left'>
                    <label>Company Name</label>
                    <input type="text" class="form-control info-fld" data-fld-name='prevemployer' placeholder="Enter Company Name" />
                </div>
                <div class="form-group col-md-6" align='left'>
                    <label>Employment Status</label>
                    <input type="text" class="form-control info-fld" data-fld-name='prevemploymentstatus' placeholder="Enter Employment Status" />
                </div>
            </div>
            <div class='row'>
                <div class="form-group col-md-6" align='left'>
                    <label>Length (in years)</label>
                    <input type="number" class="form-control info-fld" data-fld-name='prevlength' placeholder="Length in years" />
                </div>
                <div class="form-group col-md-6" align='left'>
                    <label>Paid leave owing</label>
                    <input type="number" class="form-control info-fld" data-fld-name='prevleave' placeholder="Paid leave owing" />
                </div>
            </div>
            <div class='row'>
                <div class="form-group col-md-6" align='left'>
                    <label>Start Date</label>
                    <input type="text" class="form-control info-fld date-picker" data-fld-name='prevstart' placeholder="Start date..." />
                </div>
                <div class="form-group col-md-6" align='left'>
                    <label>End Date</label>
                    <input type="text" class="form-control info-fld date-picker" data-fld-name='prevend' placeholder="End date..." />
                </div>
            </div>
        </div>
        <h4>Residency</h4>




        <div class="row">
            <div class='form-group col-md-12' align="center">
                <label>Residence Status</label><br />
                <div class="btn-group planningToolFetch_partner" data-toggle="buttons" align='center'>
                    <label class="btn btn-info" data-fld-name='place_ownership'>
                        <input type="radio" autocomplete="off" value="renting"> Renting
                    </label>
                    <label class="btn btn-info" data-fld-name='place_ownership'>
                        <input type="radio" autocomplete="off" value="mortgage"> Mortgage
                    </label>
                    <label class="btn btn-info" data-fld-name='place_ownership'>
                        <input type="radio" autocomplete="off" value="freehold"> Free Hold
                    </label>
                </div>
            </div>

        </div>


    </div>
    <div class="tab-pane fade" id="pills-dependant" role="tabpanel" aria-labelledby="pills-dependant-tab">
        <table class='table ' id='dependents-list' align='left' style="font-size:90%">
            <tr>
                <th class="text_center">Name</th>
                <th class="text_center">Date of Birth</th>
                <th class="text_center">Age</th>
                <th class="text_center">Gender</th>
                <th class="text_center">Relationship</th>
                <th class="text_center">Dependant of</th>
                <th class="text_center">Action</th>
            </tr>
        </table>
        <div class='row'>
            <div class='col-md-12'>
                <p>Add up a dependant if any:</p>
            </div>
        </div>

        <div class='row'>
            <div class='form-group col-md-8' align='left'>
                <label>Dependant Name *:</label>
                <input id="dependant_name" type='text' class="form-control info-fld necessary_fields dependent_information_group" data-required_group="dependent_information" data-tab_id="dependents-p1-tab" placeholder="Enter Dependantname" />
            </div>
            <div class='form-group col-md-4' align='left'>
                <label>Dependant's Date of Birth *:</label>
                <input id="dependant_dob" type='text' class="form-control date-picker info-fld dependant-dob necessary_fields dependent_information_group" data-required_group="dependent_information" data-tab_id="dependents-p1-tab" placeholder="Enter Dependant" />
            </div>
        </div>
        <div class='row'>
            <div class='form-group col-md-3' align='left'>
                <label>Relationship</label>
                <!-- <select class='form-control info-fld necessary_fields dependent_information_group' data-required_group="dependent_information" data-tab_id="dependents-p1-tab" id="relationship-select">
                    <option value=""></option>
                    <option value="Son">Son</option>
                    <option value="Daughter">Daughter</option> -->

                <input type="text" name="gender" list="relationshiplist" class='form-control info-fld necessary_fields dependent_information_group' data-fld-name='relationship' placeholder="You can select or type">
                <datalist id="relationshiplist">
                    <option value="Son">Son</option>
                    <option value="Daughter">Daughter</option>
                </datalist>
                <!-- <option>Other</option> -->
                </select>
            </div>
            <div class='form-group col-md-3' align='left'>
                <label>Gender:</label>

                <input type="text" name="gender" list="gendername" class='form-control info-fld gender-dd-field' data-fld-name='gender' placeholder="You can select or type">
                <datalist id="gendername">
                    <option value="Male">
                    <option value="Female">
                </datalist>
            </div>
            <div class='form-group col-md-3' align='left'>
                <label>Dependant of:</label>
                <select id="dependant_of" class='form-control info-fld ff-dependant-dependant-select necessary_fields dependent_information_group' data-required_group="dependent_information" data-tab_id="dependents-p1-tab">
                    <option>No dependant</option>
                </select>
            </div>
            <div class='form-group col-md-3' align='left'>
                <label>Years of Age</label>
                <input id="dependant_age" type='number' class='form-control info-fld person-age' min='0' step='1' value='' />
            </div>
        </div>
        <div class='row'>
            <div class='col-md-12' align='left'>
                <input type="hidden" id="update_row" value="" />
                <button class='btn btn-fill btn-primary necessary_fields_checker planningToolFetch' data-required_group="dependent_information" id='add_dependant'>
                    <i class='glyphicon glyphicon-plus'></i> Add Dependant
                </button>
                <button class='btn btn-fill btn-primary hide planningToolFetch' id='update_dependant'>
                    <i class='glyphicon glyphicon-pencil'></i> Update Dependant
                </button>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-advisers" role="tabpanel" aria-labelledby="pills-advisers-tab">
        <div class="row">
            <div class='form-group col-md-4' align='left'>
                <label><strong>Do you have an accountant?</strong></label>
                <select data-parent='acctant' data-fld='ifExists' id="haveAccountant" class="form-control info-fld">
                    <option value="" selected>No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
        </div>
        <div id="showAccountant" style="display: none;">
            <h4 align="left">Accountant</h4>
            <div class="row">
                <div class='form-group col-md-12' align='left'>
                    <label>Accountant Name: </label>
                    <input type='text' class="form-control info-fld necessary_fields adviser_information_group" data-required_group="adviser_information" data-tab_id="advisers-p1-tab" data-parent='acctant' data-fld='name' placeholder="Enter name..." />
                </div>
            </div>
            <div class="row">
                <div class='form-group col-md-12' align='left'>
                    <label>Company Name: </label>
                    <input type='text' class="form-control info-fld necessary_fields adviser_information_group" data-required_group="adviser_information" data-tab_id="advisers-p1-tab" data-parent='acctant' data-fld='company' placeholder="Enter company name..." />
                </div>
            </div>
            <div class="row">
                <div class='form-group col-md-4' align='left'>
                    <label>Street Address: </label>
                    <input type='text' class="form-control info-fld" data-parent='acctant' data-fld='street' placeholder="Enter street address..." />
                </div>
                <div class='form-group col-md-4' align='left'>
                    <label>Suburb: </label>
                    <input type='text' class="form-control info-fld" data-parent='acctant' data-fld='suburb' placeholder="Enter suburb..." />
                </div>
                <div class='form-group col-md-4' align='left'>
                    <label>City: </label>
                    <input type='text' class="form-control info-fld" data-parent='acctant' data-fld='city' placeholder="Enter city..." />
                </div>
            </div>
            <div class="row">
                <div class='form-group col-md-6' align='left'>
                    <label>Work Phone: </label>
                    <input type='phone' class="form-control info-fld" data-parent='acctant' data-fld='workphone' placeholder="Enter work phone..." />
                </div>
                <div class='form-group col-md-6' align='left'>
                    <label>Email Address: </label>
                    <input type='email' class="form-control info-fld necessary_fields adviser_information_group" data-required_group="adviser_information" data-tab_id="advisers-p1-tab" data-parent='acctant' data-fld='email' placeholder="Enter email address" />
                </div>
            </div>
        </div>


        <div class="row">
            <div class='form-group col-md-4' align='left'>
                <label><strong>Do you have solicitor?</strong></label>
                <select data-parent='solicitor' data-fld='ifExists' id="haveSolicitor" class="form-control info-fld">
                    <option value="" selected>No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
        </div>
        <div id="showSolicitor" style="display: none;">
            <h4 align="left">Solicitor</h4>

            <div class="row">
                <div class='form-group col-md-12' align='left'>
                    <label>Solicitor's Name: </label>
                    <input type='text' class="form-control info-fld" data-parent='solicitor' data-fld='name' placeholder="Enter name..." />
                </div>
            </div>
            <div class="row">
                <div class='form-group col-md-12' align='left'>
                    <label>Company Name: </label>
                    <input type='text' class="form-control info-fld" data-parent='solicitor' data-fld='company' placeholder="Enter company name..." />
                </div>
            </div>
            <div class="row">
                <div class='form-group col-md-4' align='left'>
                    <label>Street Address: </label>
                    <input type='text' class="form-control info-fld" data-parent='solicitor' data-fld='street' placeholder="Enter street address..." />
                </div>
                <div class='form-group col-md-4' align='left'>
                    <label>Suburb: </label>
                    <input type='text' class="form-control info-fld" data-parent='solicitor' data-fld='suburb' placeholder="Enter suburb..." />
                </div>
                <div class='form-group col-md-4' align='left'>
                    <label>City: </label>
                    <input type='text' class="form-control info-fld" data-parent='solicitor' data-fld='city' placeholder="Enter city..." />
                </div>
            </div>
            <div class="row">
                <div class='form-group col-md-6' align='left'>
                    <label>Work Phone: </label>
                    <input type='phone' class="form-control info-fld" data-parent='solicitor' data-fld='workphone' placeholder="Enter work phone..." />
                </div>
                <div class='form-group col-md-6' align='left'>
                    <label>Email Address: </label>
                    <input type='email' class="form-control info-fld" data-parent='solicitor' data-fld='email' placeholder="Enter email address" />
                </div>
            </div>


        </div>



        <div class="row">
            <div class='form-group col-md-4' align='left'>
                <label><strong>Do you have any adviser/s?</strong></label><br>
                <button class="btn btn-info btn-sm" id="addAdviser">Add Adviser</button>
            </div>
        </div>

        <div id="showAdvisers">



        </div>

    </div>
    <div class="tab-pane fade" id="pills-notes" role="tabpanel" aria-labelledby="pills-notes-tab">
        <div class="row">
            <div class="col-md-12" align="left">
                <label>Notes</label>
                <textarea class="form-control info-fld necessary_fields notes_p2_group" data-required_group="notes_p2" data-tab_id="notes-p1-tab" id="p1-notes" rows="10" placeholder="Enter notes..."></textarea>
            </div>
        </div>
    </div>
</div>