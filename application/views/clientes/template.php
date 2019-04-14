<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">

</head>
<body>

	<!-- loading view -->
	<div class="container">
		<?php $this->load->view($view);?>
	</div>
	
	<!-- JAVASCRIPT -->
	<script src="<?php echo base_url('assets/js/jquery_3.4.0.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.mask.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>
</html>