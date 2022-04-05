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
                <select data-parent="forIndividual" data-fld="forIndividual" id="forIndividual" class="form-control info-fld">
                    <option value="" selected="">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
        </div>

        <div id="showIndividual" style="display: none;">
            <button class="btn btn-info btn-sm" id="addPlan">Add Individual</button>
            <div class="accordion" id="accordion">


            </div>

        </div>
    </div>
</div>