<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>member List</title>
	<!-- load bootstrap css file -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1><center>member List</center></h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">member Name</th>
					<th scope="col">Toko</th>
					<th width="200">
						<a href="<?php echo site_url('member/add_new/');?>" class="btn btn-sm btn-success">+ Tambah </a>
					</th>
				</tr>
			</thead>
			<?php
			$count = 0;
			foreach ($member->result() as $row) :
			$count++;
			?>
			<tr>
				<th scope="row"><?php echo $count;?></th>
				<td><?php echo $row->namacs;?></td>
				<td><?php echo $row->namatoko;?></td>
				<td>
					<a href="<?php echo site_url('member/get_edit/'.$row->idmember);?>" class="btn btn-sm btn-info">Update</a>
					<a href="<?php echo site_url('member/delete/'.$row->idmember);?>" class="btn btn-sm btn-danger">Delete</a>
				<td>
			</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>
<!-- load jquery js file -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>