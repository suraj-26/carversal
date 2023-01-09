<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!--	css links -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap-4.0/css/bootstrap.css">
	<link href="<?= base_url(); ?>assets/CustomCSS/CustomCSS.css" rel="stylesheet">

	<!--	owl carousel  css  CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		  integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<!--	<link rel="stylesheet" href="-->
	<? //= base_url() ?><!--/assets/OwlCarousel/docs/assets/owlcarousel/owl.carousel.min.css">-->
	<!--	<link rel="stylesheet"-->
	<!--		  href="-->
	<? //= base_url() ?><!--/assets/OwlCarousel/docs/assets/owlcarousel/owl.theme.default.min.css">-->

	<!--	fontAwsome Icon CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<!--	Jquery CDN link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
			integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!--owlcarousel js CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
			integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
		  integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>


	<title></title>
	<style>
		.form-control:focus {
			outline: 0;
			box-shadow: transparent !important;
		}
	</style>

</head>
<body>
<div class="container">
	<div class="PoppinsFont align-items-center border-dark row mx-0 mx-md-3 pt-2 HeaderBorder"
		 style="border-bottom: 2px solid;">
		<div class="col-md-3 col-6">
			<h1 class="BebasFont text-capitalize mb-0"> CARVERSAL</h1>
		</div>
		<div class="col-6 text-right d-block d-md-none">

			<img src="<?= base_url() ?>/assets/CarvesalImage/User.jpg" class="mr-2 rounded-circle" alt="" style="
						width: 36px;">

		</div>
		<div class="col-12 border-bottom d-block d-md-none"></div>
		<div class="col-md-6" id="CarversalMobileMenu">
			<ul class="align-items-center d-flex justify-content-around list-unstyled mb-0" id="CarversalMenu">
				<!--menu-->
				<li class="MenuItems badge-pill px-0 mx-md-2 py-md-1 mt-3 mt-md-0 "><a href="<?= base_url() ?>"
																			   class="<?php echo $this->uri->segment(1) == '' ? 'ActiveMenu' : '' ?>">Trending</a>
				</li>
				<li class="MenuItems badge-pill px-0 mx-md-2 py-md-1 mt-3 mt-md-0 "><a
							class="<?php echo $this->uri->segment(1) == 'Discover' ? 'ActiveMenu' : '' ?>"
							href="<?= base_url() ?>Discover">Discover</a></li>
				<li class="MenuItems badge-pill px-0 mx-md-2 py-md-1 mt-3 mt-md-0"><a
							class="<?php echo $this->uri->segment(1) == 'Latest' ? 'ActiveMenu' : '' ?>"
							href="<?= base_url() ?>Latest">Latest</a></li>
				<li class="MenuItems badge-pill px-0 mx-md-2 py-md-1 mt-3 mt-md-0"><a
							class="<?php echo $this->uri->segment(1) == 'Popular' ? 'ActiveMenu' : '' ?>"
							href="<?= base_url() ?>Popular">Popular</a></li>
				<?php
				if (isset($this->session->user_session)) {
					$username = $this->session->user_session->name;
					?>
					<a  style="text-decoration: none;" class="pt-1">
						<div class="dropdown show">
							<a class="btn btn-sm  dropdown-toggle " style="color: #454545" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b><?php echo $this->session->user_session->name;?></b></a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a href="<?=base_url('logout')?>" class="dropdown-item" href="#">Logout</a>

							</div>
						</div>

					</a>
					<?php
				} else { ?>
					<a href="<?=base_url('Login')?>" style="text-decoration: none;" class="pt-1">
						<li class="login_row_list px-3">Login/Sign up</li>
					</a>
				<?php }
				?>




				<li></li>
				<li class="d-none d-md-block mt-3 mt-md-0">
					<div>
						<input type="checkbox" class="checkbox" id="checkbox">
						<label for="checkbox" class="label  ml-1 mb-0">
							<i class="fa-moon fas small" style="font-size: x-small"></i>
							<i class="fa-sun fas small" style="font-size: x-small"></i>
							<div class="ball"></div>
						</label>
					</div>
				</li>
			</ul>
		</div>
		<div class="col-md-3 d-md-block" style="display: none" id="SearchHere">
			<div class="d-flex align-items-center mt-3 mt-md-0">
				<i class="fa-left-long fa-solid mr-2 d-block d-md-none" id="HideSearch" style="font-size: x-large;"></i>
				<div class="SearchBar align-items-center align-items-sm-center w-100 badge-pill border border-dark d-f d-flex py-1">
					<span onclick="search(document.getElementById('search').value)"><i class="fa-solid fa-magnifying-glass"></i></span>
					<input type="search" id="search" class="border-0 form-control py-0 bg-transparent"
						   style="font-size: small; box-shadow: none !important;" placeholder="Search">
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="container  MobileIconMenu d-block d-md-none">
	<div class="PoppinsFont align-items-center border-dark row mx-0 mx-md-3 py-2 HeaderBorder">
		<div class="col-md-6">
			<ul class="align-items-center d-flex justify-content-around list-unstyled mb-0" id="CarversalMenu">
				<!--menu-->
				<li class="MenuItems  px-0 mx-md-4 py-md-1 mt-3 "><a href="<?= base_url() ?>"
																	 class="<?php echo $this->uri->segment(1) == '' ? 'MobileActiveMenu' : '' ?>"><span><i
									style="font-size: x-large;" class="fa-solid fa-house"></i></span></a></li>
				<li class="MenuItems  px-0 mx-md-4 py-md-1 mt-3 " id="SearchIcon"><i style="font-size: x-large;"
																					 class="fa-solid fa-magnifying-glass"></i>
				</li>
				<li class="MenuItems  px-0 mx-md-4 py-md-1 mt-3 " data-toggle="modal" data-target="#MobileThemeMenu"><i
							style="font-size: x-large;" class="fa-solid fa-bars"></i></li>
			</ul>
		</div>
	</div>
</div>
<div class="container d-block  d-md-none">
	<!-- Modal -->
	<div class="modal fade  " id="MobileThemeMenu" tabindex="-1" role="dialog" aria-labelledby="MobileThemeMenuLabel"
		 aria-hidden="true">
		<div class="ml-auto modal-dialog h-100 w-75 mt-0" role="document">
			<div class="modal-content h-100" style="background: #e9e9e9e0;">
				<div class="modal-header border-0 pb-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="align-items-center d-flex justify-content-around modal-body">
					<ul class="list-unstyled">
						<li class="h6">
							<div>
								<input type="checkbox" class="checkbox" id="checkbox">
								<label for="checkbox" class="label  ml-1 mb-0">
									<i class="fa-moon fas small" style="font-size: x-small"></i>
									<i class="fa-sun fas small" style="font-size: x-small"></i>
									<div class="ball"></div>
								</label>
							</div>
						</li>
						<li class="h6"><span><i class="fa-solid fa-face-grin-wink"></i></span>Explore</li>
						<li class="h6"><span><i class="fa-regular fa-bell"></i></span>Subscribe</li>
						<li class="h6"><span><i class="fa-solid fa-eye"></i></span>History</li>
						<li class="h6"><span><i class="fa-regular fa-circle-question"></i></span>Help & Feedback</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>
<script>
	$("#SearchIcon").click(function () {
		$("#CarversalMobileMenu").hide('fast');
		$("#SearchHere").show('fast');
	})
	//
	$("#HideSearch").click(function () {
		$("#SearchHere").hide('fast');
		$("#CarversalMobileMenu").show('fast');
	})


	const checkbox = document.getElementById('checkbox');

	checkbox.addEventListener('change', () => {
		document.body.classList.toggle('dark');
	})

	function search(string){
		console.log(window.find(string));
		;
	}
</script>
<script>var base_url = '<?=base_url()?>';</script>
<script>var baseURL = '<?=base_url()?>';</script>
</body>
</html>
