<div id="smartwizard" class="sw sw-justified sw-theme-arrows">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link " href="#step-1">
                <strong>Step 1</strong> <br>Customers' Details
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#step-2">
                <strong>Step 2</strong> <br>Income and Liabilities
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#step-3">
                <strong>Step 3</strong> <br>Current Risk Portfolio
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#step-4">
                <strong>Step 4</strong> <br>Verification</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#step-5">
                <strong>Step 5</strong> <br>Scope of Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#ff">
                <strong>Step 6</strong> <br>Generate Fact Find</a>
        </li>
    </ul>


    <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1" style="position: static; left: auto; width: auto; display: none;">
            <?= $pages['p1'] ?? ''; ?>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2" style="position: static; left: auto; width: auto; display: none;">
            <?= $pages['p2'] ?? '' ?>
        </div>
        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3" style="position: static; left: auto; width: auto; display: none;">
            <?= $pages['p3'] ?? '' ?>
        </div>

        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4" style="position: static; left: auto; width: auto; display: none;">
            <?= $pages['p4'] ?? '' ?>

        </div>
        <div id="ff" class="tab-pane" role="tabpanel" aria-labelledby="step-5" style="display: none;">
            <?= $pages['ff'] ?? '' ?>
        </div>

    </div>
    <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;"><button class="btn sw-btn-prev" type="button">Previous</button><button class="btn sw-btn-next" type="button">Next</button>
    </div>