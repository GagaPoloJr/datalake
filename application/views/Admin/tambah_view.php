<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>&mdash; Bem Undip 2020</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/bootstrap/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/fontawesome/css/all.min.css' ?>">


	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables/datatables.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css' ?>">
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
						<h1>Testing masuk db</h1>
					</div>
					<div class="section-body">
						<h2 class="section-title">Testing halaman posting</h2>
						<p class="section-lead">
							testing halaman posting
						</p>
						
					</div>
					<div class="col-lg-12 col-md-12 col-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4>Artikel barusan masuk db</h4>
							</div>
							<div class="card-body">

							<a href="<?php echo base_url() . 'Admin/artikel' ?>" class="btn btn-lg icon-left btn-primary">Kembali</a>
<br>
<br>
<br>
								<div class="col-md-8">
									<h1><?php echo $title; ?></h1>
									<p><?php echo $content; ?></p>
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

	<script src="<?php echo base_url() . 'assets/js/scripts.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/custom.js' ?>"></script>

</body>

</html>