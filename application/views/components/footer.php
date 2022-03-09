<!--   Core JS Files   -->
<script src="<?= base_url(); ?>/assets/js/core/popper.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<?php if (is_array($links)) {
    foreach ($links as $x) : ?>
        <script src="<?= base_url(); ?>/assets/myJs/<?= $x ?>.js"></script>

<?php endforeach;
} ?>
</body>

</html>