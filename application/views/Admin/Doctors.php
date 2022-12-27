
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<style>
	.error{
		color:red;
	}
</style>
<!-- Main Content -->
<div class="content-page">
	<div class="content">

		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-title-box">
							<h4 class="page-title">Doctors</h4>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="card-box">

				<table class="table table-striped table-responsive" id="DT">
					<thead>
					<tr>
						<td>#</td>
						<td>Name</td>
						<td>Mobile</td>
						<td>Address</td>
						<td>Action</td>
					</tr>
					</thead>
					<tbody id="DoctorTable">

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


</div>
<?php
$this->load->view('modal');
$this->load->view('_partials/footer');
?>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</div>
<script>
	$(document).ready(function () {
		getDoctors();
		$('#DT').DataTable();
	});
</script>
