<?php
$user_type = $this->session->userdata('user_type');
?>
<style>
	.menu_list:hover {
		background-color: #f2d1767a !important;
		color: #473504 !important;
		text-shadow: 0px 1px 2px #00000055 !important;
	}

	.nav {
		font-size: 1.3rem !important;
	}
</style>
<div class="left side-menu">
	<div class="slimscroll-menu" id="remove-scroll">
		<div id="sidebar-menu">

			<ul class="metisMenu nav " id="side-menu">
				<li class="menu-title">Navigation</li>


				<?php if ($user_type == 1) { ?>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'Dashboard' ? 'active' : '' ?>" href="<?php echo base_url(); ?>Dashboard"><i
									class="fa fa-fw fa-home" style="color:#ff5722;"></i>
							<span>Dashboard</span></a></li>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'Patients' ? 'active' : '' ?>" href="<?php echo base_url(); ?>Patients"><i
									class="fa fa-fw fa-building" style="color: #2196f3 "></i> <span>Patients</span></a>
					</li>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'ViewDoctors' ? 'active' : '' ?>" href="<?php echo base_url(); ?>viewDoctors"><i
									class="fa fa-fw fa-user-md" style="color:lightgreen;"></i>
							<span>Doctors</span></a></li>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'viewAppointments' ? 'active' : '' ?>" href="<?php echo base_url(); ?>viewAppointments"><i
									class="fa fa-fw fa-users" style="color: #673ab7 "></i>
							<span>Appointments</span></a></li>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'viewHospital' ? 'active' : '' ?>" href="<?php echo base_url(); ?>viewHospital"><i
									class="fa fa-fw fa-credit-card" style="color: #009688"></i>
							<span>Hospitals</span></a>
					</li>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'viewAmbulance' ? 'active' : '' ?>" href="<?php echo base_url(); ?>viewAmbulance"><i
									class="fa fa-fw fa-credit-card" style="color: #3f51b5"></i>
							<span>Ambulances</span></a>
					</li>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'viewPharmacy' ? 'active' : '' ?>" href="<?php echo base_url(); ?>viewPharmacy"><i
									class="fa fa-fw fa-credit-card" style="color: #3f51b5"></i>
							<span>Pharmacy</span></a>
					</li>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'viewBloodBank' ? 'active' : '' ?>" href="<?php echo base_url(); ?>viewBloodBank"><i
									class="fa fa-fw fa-credit-card" style="color: #3f51b5"></i>
							<span>Blood Banks</span></a>
					</li>

				<?php } else if ($user_type == 2) { ?>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'Dashboard' ? 'active' : '' ?>" href="<?php echo base_url(); ?>Dashboard"><i
									class="fa fa-fw fa-home" style="color:#ff5722;"></i>
							<span>Dashboard</span></a></li>
					<li class="menu_list"><a class="menu_list <?php $this->uri->segment(1) == 'viewAppointments' ? 'active' : '' ?>" href="<?php echo base_url(); ?>viewAppointments"><i
									class="fa fa-fw fa-users" style="color: #673ab7 "></i>
							<span>Appointments</span></a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
