<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/img/icon.ico">
	<title>
		EliteInsure | Investments
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="<?= base_url(); ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?= base_url(); ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="<?= base_url(); ?>/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

</head>

<body>
	<input type="hidden" name="base_url" value="<?= base_url(); ?>">
	<input type="hidden" name="API_KEY" value="<?= API_KEY; ?>">
	<input type="hidden" name="API_AUTH" value="<?= base64_encode(API_USER . ':' . API_PASS); ?>">

	<main class="main-content mt-0">
		<section>
			<div class="page-header min-vh-75">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
							<div class="card card-plain mt-8">
								<div class="card-header pb-0 text-left bg-transparent">
									<h3 class="font-weight-bolder text-info text-gradient">EliteInsure Investments</h3>
									<p class="mb-0">Enter your email and password to sign in</p>
								</div>
								<div class="card-body">
									<form role="form">
										<label>Email</label>
										<div class="mb-3">
											<input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
										</div>
										<label>Password</label>
										<div class="mb-3">
											<input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
										</div>
										<div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" id="rememberMe" checked="">
											<label class="form-check-label" for="rememberMe">Remember me</label>
										</div>

										<div id="alert" class="alert alert-dismissible d-none">

										</div>
									</form>
									<div class="text-center">

										<button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
									</div>

									</form>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
								<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= base_url(); ?>/assets/img/curved-images/curved14.jpg')"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer class="footer py-5">
		<div class="container">
			<div class="row">
				<div class="col-8 mx-auto text-center mt-1">
					<p class="mb-0 text-secondary">
						Copyright © <script>
							document.write(new Date().getFullYear())
						</script> EliteInsure | Ltd
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!--   Core JS Files   -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
	<script src="<?= base_url('assets') ?>/myJs/validator.js"></script>
	<script src="<?= base_url(); ?>/assets/myJs/login.js"></script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>


</body>

</html>