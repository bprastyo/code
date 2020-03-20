<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add New member</title>
	<!-- load bootstrap css file -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1><center>Add New member</center></h1>
		<div class="col-md-6 offset-md-3">
			<form action="<?php echo site_url('member/save');?>" method="post">
				<div class="form-group">
					<label>member Name</label>
					<input type="text" class="form-control" name="namacs" placeholder="member Name">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" class="form-control" name="namatoko" placeholder="Price">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
<!-- load jquery js file --> 
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>