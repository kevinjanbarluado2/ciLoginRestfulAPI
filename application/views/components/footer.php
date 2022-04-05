</div>
</div>
</div>
</div>
</div>
</main>
<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script src="<?= base_url('assets') ?>/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
<script src="<?= base_url('assets') ?>/js/editor.js"></script>
<script src="https://unpkg.com/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script>
    $(document).ready(function() {

        $('#userTable').DataTable();
        $('#smartwizard').smartWizard({
            theme: 'default',
            transitionEffect: 'fade',
            justified: true,
            enableURLhash: false,
            toolbarSettings: {
                toolbarPosition: 'both', // none, top, bottom, both
                toolbarButtonPosition: 'right', // left, right, center
                showNextButton: true, // show/hide a Next button
                showPreviousButton: true, // show/hide a Previous button
                toolbarExtraButtons: [] // Extra buttons to show on toolbar, array of jQuery input/buttons elements
            },
        });

        $('a[data-toggle="pill"]').on('click', () => {
            $('.tab-content').css('height', 'auto');
        })
        $('.date-picker').datepicker();

        $('.sw-btn-next').on('click', () => {
            $(document).scrollTop(0)
        })

    });
</script>

<?php if (is_array($links)) {
    foreach ($links as $x) : ?>
        <script src="<?= base_url(); ?>/assets/myJs/<?= $x ?>.js"></script>

<?php endforeach;
} ?>



</body>

</html>