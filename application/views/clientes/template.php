<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<title><?php echo $title ?></title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">

</head>
<body>

	<?php if ($layout): ?>
		<div class="menu"></div>
	<?php endif ?>

	<!-- loading view -->
	<div class="container">
		<?php $this->load->view($view);?>
	</div>

	<?php if ($layout): ?>
		<div class="footer"></div>
	<?php endif ?>
	
	<!-- JAVASCRIPT -->
	<script src="<?php echo base_url('assets/js/jquery_3.4.0.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.mask.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
 	


</body>
</html>