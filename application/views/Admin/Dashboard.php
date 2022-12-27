<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<style>
	.error {
		color: red;
	}
</style>
<!-- Main Content -->
<div class="content-page">
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-xs-12">
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3">
						<div class="card">
							<div class="card-box">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-4">
											<i class="fa fa-user-md fa-4x"></i>
										</div>
										<div class="col-md-8">
											<div class="card-header">
												<h4>Patients</h4>
											</div>
											<div class="card-body">
												<label>
													<?php
													echo $this->db->query('select * from employee where user_type = 3')->num_rows();
													?>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-3">
						<div class="card">
							<div class="card-box">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-4">
											<i class="fa fa-user-md fa-4x"></i>
										</div>
										<div class="col-md-8">
											<div class="card-header">
												<h4>Doctors</h4>
											</div>
											<div class="card-body">
												<label>
													<?php
													echo $this->db->query('select * from employee where user_type =2')->num_rows();
													?>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-box">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-4">
											<i class="fa fa-user-md fa-4x"></i>
										</div>
										<div class="col-md-8">
											<div class="card-header">
												<h4>Hospitals</h4>
											</div>
											<div class="card-body">
												<label>
													<?php
													echo $this->db->query('select * from hospital')->num_rows();
													?>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-box">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-4">
											<i class="fa fa-user-md fa-4x"></i>
										</div>
										<div class="col-md-8">
											<div class="card-header">
												<h4>Appointments</h4>
											</div>
											<div class="card-body">
												<label>
													<?php
													echo $this->db->query('select * from appointment')->num_rows();
													?>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-3">
						<div class="card">
							<div class="card-box">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-4">
											<i class="fa fa-user-md fa-4x"></i>
										</div>
										<div class="col-md-8">
											<div class="card-header">
												<h4>Pharmacy</h4>
											</div>
											<div class="card-body">
												<label>
													<?php
													echo $this->db->query('select * from pharmacy')->num_rows();
													?>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-3">
						<div class="card">
							<div class="card-box">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-4">
											<i class="fa fa-user-md fa-4x"></i>
										</div>
										<div class="col-md-8">
											<div class="card-header">
												<h4>Ambulances</h4>
											</div>
											<div class="card-body">
												<label>
													<?php
													echo $this->db->query('select * from ambulance')->num_rows();
													?>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-3">
						<div class="card">
							<div class="card-box">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-4">
											<i class="fa fa-user-md fa-4x"></i>
										</div>
										<div class="col-md-8">
											<div class="card-header">
												<h4>Blood Banks</h4>
											</div>
											<div class="card-body">
												<label>
													<?php
													echo $this->db->query('select * from blood_bank')->num_rows();
													?>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>




				</div>
			</div>
		</div>
	</div>
</div>

</div>
</div>

</div>


</div>
<?php
$this->load->view('_partials/footer');
?>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</div>
