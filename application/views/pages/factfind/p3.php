<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#existing-investment-list" role="tab" aria-controls="existing-investment-list" aria-selected="true">
            Existing Investment
        </a>
    </li>

</ul>

<div class="tab-content">
    <br>
    <div class="row">
        <div class="col">
            <textarea style="width: 900px;margin:auto;" class="form-control" name="" id="" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="tab-pane fade show active" role="tabpanel" id="existing-investment-list" aria-labelledby="existing-investment-list">
        <div id="eps_upload">
            <input id='upload-eps' style='display:none' type='file' multiple />
            <div class='row' align="center">
                <div class='file_drag_area' id='open-upload-eps'>
                    Choose an Illustration Document or drag it here
                </div>

            </div>
        </div>
        <div class='row'>
            <br />
            <div class='col-md-12'>
                <div class="list-group" id='uploaded-eps'>
                    <?php
                    if (array_key_exists("policy_link", $pb->existingInsurances)) {
                        $x = 0;
                        foreach ($pb->existingInsurances->policy_link as $file) {
                            $filename = $pb->existingInsurances->policy_name[$x]
                    ?>
                            <a href="#" id="upl-item<?= $x; ?>" class="list-group-item upl-list-item" data-tgt="<?= $file; ?>" data-tgt-name="<?= $filename; ?>">
                                <button type="button" class="close upl-item-close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p class="list-group-item-heading">
                                    File Name: <?= $filename; ?><br>
                                    <small>Click to view document.</small>
                                </p>
                            </a>
                    <?php
                            $x++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>