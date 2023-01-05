<style>
	.menu_list:hover {
		background-color: black !important;
		color: white !important;
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

				<li class="menu_list"><a
							class="menu_list <?php $this->uri->segment(1) == 'Dashboard' ? 'active' : '' ?>"
							href="<?php echo base_url(); ?>Dashboard"><i
								class="fa fa-fw fa-home"></i>
						<span>Blogs</span></a></li>

				<li class="menu_list"><a
							class="menu_list <?php $this->uri->segment(1) == 'users' ? 'active' : '' ?>"
							href="<?php echo base_url(); ?>users"><i
								class="fa fa-fw fa-users"></i>
						<span>Users</span></a></li>

				<li class="menu_list"><a
							class="menu_list <?php $this->uri->segment(1) == 'contact_us' ? 'active' : '' ?>"
							href="<?php echo base_url(); ?>contact_us"><i
								class="fa fa-fw fa-user"></i>
						<span>Contact US</span></a></li>

				<li class="menu_list"><a
							class="menu_list <?php $this->uri->segment(1) == 'ChangePassword' ? 'active' : '' ?>"
							href="<?php echo base_url(); ?>ChangePassword"><i
								class="fa fa-fw fa-key"></i>
						<span>Change Password</span></a></li>

			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
