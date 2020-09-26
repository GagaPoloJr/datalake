<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Forms &rsaquo; Editor &mdash; Stisla</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/bootstrap/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/fontawesome/css/all.min.css' ?>">


	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/summernote/summernote-bs4.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/codemirror/lib/codemirror.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/codemirror/theme/duotone-dark.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/jquery-selectric/selectric.css' ?>">


	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/components.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/custom.css' ?>">


	<!-- Start GA -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-94034622-3');
	</script>
	<!-- /END GA -->
</head>

<body>

	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<!-- Navbar -->
			<?php $this->load->view('Admin/_partial/navbar') ?>
			<!-- sidebar -->
			<?php $this->load->view('Admin/_partial/sidebar') ?>


			<!-- Main Content -->

			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1>Tambah Admin</h1>

					</div>

					<div class="section-body">
						<h2 class="section-title">Halaman Tambah Admin</h2>
						<p class="section-lead">Silahkan menambah Admin Staff</p>

						<div class="row">
							<div class="col-12">
								<form action="<?php echo site_url('User/save'); ?>" method="post"enctype="multipart/form-data">
									<div class="card">
										<div class="card-header">
											<h4>Tambah Admin Staff</h4>
										</div>
										<div class="card-body">
											<div class="form-group row mb-4">
												<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
												<div class="col-sm-12 col-md-7">
													<input type="text" class="form-control" name="name">
												</div>
                                            </div>
                                            <div class="form-group row mb-4">
												<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
												<div class="col-sm-12 col-md-7">
													<input type="text" class="form-control" name="user_name">
												</div>
                                            </div>
                                            <div class="form-group row mb-4">
												<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
												<div class="col-sm-12 col-md-7">
													<input type="password" class="form-control" name="user_password">
												</div>
											</div>
										</div>
										
										<div class="form-group row mb-4">
											<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
											<div class="col-sm-12 col-md-7">
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>


			</div>
			</section>
		</div>
		<!-- footer -->
		<?php $this->load->view('Admin/_partial/footer') ?>

	</div>
	</div>
	<!-- General JS Scripts -->
	<?php $this->load->view('Admin/_partial/js') ?>

	<!-- JS Libraies -->
	<!-- <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="assets/modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script> -->

	<script src="<?php echo base_url() . 'assets/modules/summernote/summernote-bs4.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/modules/codemirror/lib/codemirror.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/modules/codemirror/mode/javascript/javascript.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/modules/jquery-selectric/jquery.selectric.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/bootstrap.bundle.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/bs-custom-file-input/bs-custom-file-input.min.js' ?>"></script>


	<script src="<?php echo base_url() . 'assets/js/scripts.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/custom.js' ?>"></script>


	<script>
		$(document).ready(function() {
			bsCustomFileInput.init();
		});
	</script>
</body>

</html>