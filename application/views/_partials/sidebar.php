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
								class="fa fa-fw fa-home" style="color:#ff5722;"></i>
						<span>Trending</span></a></li>


				<li class="menu_list"><a
							class="menu_list"
							href="<?php echo base_url(); ?>Discovery"><i
								class="fa fa-fw fa-home" style="color:#ff5722;"></i>
						<span>Discovery</span></a></li>

			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
