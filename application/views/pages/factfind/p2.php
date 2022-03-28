<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#simplify-p2" role="tab" aria-controls="simplify-p2" aria-selected="true">
            Simple Income/Expense Calculator
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#simpe-a-l-p2" role="tab" aria-controls="simpe-a-l-p2" aria-selected="true">
            Your Assets/Liabilities
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#goals-p2" role="tab" aria-controls="goals-p2" aria-selected="true">
            Goals and Investment Mindset
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#estate-p2" role="tab" aria-controls="estate-p2" aria-selected="true">
            Estate Planning
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#notes-p2" role="tab" aria-controls="notes-p2" aria-selected="true">
            <span style="color:red">Needs Analysis Notes</span>
        </a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade show active" role="tabpanel" id="simplify-p2" aria-labelledby="simplify-p2">
        <br />
        <div class='row'>
            <div class='col-md-6 form-group' align='left'>
                <label>Your Net Income After Tax:</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="your_annual_income" type='number' min='0' class='form-control necessary_fields simplify_p2_group planningToolFetch' data-required_group="simplify_p2" data-tab_id="simplify-p2-tab" />
                </div>
            </div>
            <div class='col-md-6 form-group' align='left'>
                <label>Frequency:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-tasks"></i></span>
                    <select class='form-control income_frequency planningToolFetch' id='your_income_freq'>
                        <option value="52">Weekly</option>
                        <option value="26">Fortnightly</option>
                        <option value="12">Monthly</option>
                        <option value="1">Annually</option>
                    </select>
                </div>
            </div>
            <div class='col-md-6 form-group' align='left'>
                <label>Your Partner's Net Income after tax:</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="partner_annual_income" type='number' min='0' class='form-control necessary_fields simplify_p2_group' data-required_group="simplify_p2" data-tab_id="simplify-p2-tab" />
                </div>
            </div>
            <div class='col-md-6 form-group' align='left'>
                <label>Frequency:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-tasks"></i></span>
                    <select class='form-control income_frequency' id='partner_income_freq'>
                        <option value="52">Weekly</option>
                        <option value="26">Fortnightly</option>
                        <option value="12">Monthly</option>
                        <option value="1">Annually</option>
                    </select>
                </div>
            </div>
            <div class='col-md-6 form-group' align='left'>
                <label>Your Other Income:</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="your_other_income" type='number' min='0' class='form-control necessary_fields simplify_p2_group planningToolFetch' data-required_group="simplify_p2" data-tab_id="simplify-p2-tab" />
                </div>
            </div>
            <div class='col-md-6 form-group' align='left'>
                <label>Frequency:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-tasks"></i></span>
                    <select class='form-control income_frequency planningToolFetch' id='other_income_freq'>
                        <option value="52">Weekly</option>
                        <option value="26">Fortnightly</option>
                        <option value="12">Monthly</option>
                        <option value="1">Annually</option>
                    </select>
                </div>
            </div>
            <div class='col-md-12 form-group' align='left'>
                <label>Your Annual Household Income:</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="your_annual_household_income" type='number' min='0' class='form-control' readonly />
                </div>
            </div>
            <div class='col-md-12 form-group' align='left'>
                <label>Your annual approximate costs of Dependant's Education and/or Child Care</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type='number' min='0' class='form-control necessary_fields simplify_p2_group' data-required_group="simplify_p2" data-tab_id="simplify-p2-tab" />
                </div>
            </div>
            <div class='col-md-12 form-group' align='left'>
                <label>Your Annual General Expenses (food, insurance, clothing, etc.) :</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type='number' min='0' id="annualGeneralExpenses" class='form-control necessary_fields simplify_p2_group planningToolFetch' data-required_group="simplify_p2" data-tab_id="simplify-p2-tab" />
                </div>
            </div>
            <div class='col-md-12 form-group' align='left'>
                <label>Your annual costs of Rent or Mortgage and other loans</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type='number' min='0' id="rentMortgages2" class='form-control necessary_fields simplify_p2_group planningToolFetch' data-required_group="simplify_p2" data-tab_id="simplify-p2-tab" />
                </div>
            </div>
            <div class='col-md-12 form-group' align='left'>
                <label>Any other expenses not considered</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type='number' min='0' class='form-control necessary_fields simplify_p2_group' data-required_group="simplify_p2" data-tab_id="simplify-p2-tab" />
                </div>
            </div>
            <div class='col-md-12 form-group' align='left'>
                <label><b>Your Total Annual Household Expenses</b></label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type='number' min='0' class='form-control' />
                </div>
            </div>
            <div class='col-md-12 form-group' align='left'>
                <label>Your Annual Disposable Household Income</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type='number' min='0' class='form-control' />
                </div>
            </div>
            <div class='col-md-12 form-group' align='left'>
                <label>Your Monthly Disposable Household Income</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type='number' min='0' class='form-control' id='monthlydispo' />
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="simpe-a-l-p2" role="tabpanel" aria-labelledby="simpe-a-l-p2">
        <div class="row">
            <div class="col-md-12 col-sm-12" align="left">
                <h4 class="col-md-6 col-sm-6">Lifestyle Assets</h4>
                <button id="add-lifestyleAsset-btn" align="right" class="btn btn-primary" style="float:right">
                    Add Lifestyle Asset
                </button>
                <table class="table table-striped" id="lifestyleAssetsTbl">
                    <thead>
                        <tr>

                            <th>Asset Description</th>
                            <th width="25%">Owner</th>
                            <th colspan="2" width="20%">Estimated Value ($)</th>
                        </tr>

                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td align="right"><b>Total Lifestyle Assets</b></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span><input id="totalLifeStyleAssets" type="text" class="form-control eif-fld7 disable-char" readonly>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12" align="left">
                <h4 class="col-md-6 col-sm-6">Financial Assets</h4>
                <button id="add-financialAsset-btn" align="right" class="btn btn-primary" style="float:right">
                    Add Financial Asset
                </button>
                <table class="table table-striped" id="financialAssetsTbl">
                    <thead>
                        <tr>
                            <th>Investment Assets</th>
                            <th>Owner</th>
                            <th width="25%">Valued at</th>
                            <th colspan="2" width="20%">Estimated Value ($)</th>
                        </tr>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>

                            <td align="right"><b>Total Financial Assets</b></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span><input id="totalFinancialAssets" type="text" class="form-control eif-fld7 disable-char" readonly>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
        <!-- liabilities -->
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12" align="left">
                <h4 class="col-md-6 col-sm-6">Liabilities</h4>
                <button id="add-liabilities-btn" align="right" class="btn btn-primary" style="float:right">
                    Add Liabilities
                </button>
                <table class="table table-striped" id="liabilitiesTbl">
                    <thead>
                        <tr>
                            <th>Type / Lender</th>
                            <th>Owner</th>
                            <th width="25%">Amount Owing ($)</th>
                            <th width="25%">Interest Rate</th>
                            <th colspan="2" width="20%">Monthly Repayment</th>
                        </tr>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>

                            <td align="right"><b>Total Liabilities/Month</b></td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span><input id="totalLiabilitiesAssets" type="text" class="form-control eif-fld7 disable-char" readonly>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

    <div class="tab-pane fade" id="goals-p2" role="tabpanel" aria-labelledby="goals-p2">
        <br />
        <div class='row'>
            <div class='col-md-12 col-sm-12' align='left'>
                <div class="d-flex">
                    <h4>Goals</h4>
                    <button class="btn btn-primary ml-auto px-3" id="addGoal">Add Goals&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
                </div>
                <table class="table table-striped" id="goalsTable">
                    <thead id="insertGoal">
                        <tr>
                            <th>Purpose</th>
                            <th>Priority</th>
                            <th>Goal term</th>
                            <th colspan="2">Specific time</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12" align="left">
                <h4 style="margin-bottom: 0 !important;">Title - Your mindset towards investing
                    <button data-html="true" type="button" class="guidanceNote border btn btn-secondary mb-0" data-container="body" title="" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Sample Guidance Note" data-original-title="Guidance Notes">?</button>
                </h4>
                <div class="form-group">
                    <label>What is your level of comforting with risk and taking risk?</label>
                    <textarea type="text" class="form-control info-fld" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <label>What is the most important to yo regarding returns?</label>
                    <textarea type="text" class="form-control info-fld" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <label>How do you see the security of your job, buesiness, or finances in the foreseable future?</label>
                    <textarea type="text" class="form-control info-fld" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <label>Are there any influneces in your life that I should be aware of which may impact my advice to you?</label>
                    <textarea type="text" class="form-control info-fld" placeholder=""></textarea>
                </div>
            </div>
        </div>

    </div>

</div>