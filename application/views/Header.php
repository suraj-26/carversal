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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--	<link rel="stylesheet" href="--><?//= base_url() ?><!--/assets/OwlCarousel/docs/assets/owlcarousel/owl.carousel.min.css">-->
<!--	<link rel="stylesheet"-->
<!--		  href="--><?//= base_url() ?><!--/assets/OwlCarousel/docs/assets/owlcarousel/owl.theme.default.min.css">-->

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


	<title>Header</title>

</head>
<body>
<div class="container">
	<div class="PoppinsFont align-items-center border-dark row pt-2" style="border-bottom: 2px solid;">
		<div class="col-md-3">
			<h1 class="BebasFont text-capitalize mb-0"> CARVERSAL</h1>
		</div>
		<div class="col-md-6">
			<ul class="align-items-center d-flex justify-content-around list-unstyled mb-0" id="CarversalMenu">
				<!--menu-->
			</ul>
		</div>
		<div class="col-md-3">
			<div class="SearchBar align-items-center align-items-sm-center badge-pill border d-f d-flex py-1">
				<span><i class="fa-solid fa-magnifying-glass"></i></span>
				<input type="search" class="border-0 form-control py-0" style="font-size: small" placeholder="Search">
			</div>
		</div>
	</div>
</div>
<script>

	// menu javascript
	// create menu
	const HeaderMenu = ['Trending', 'Discover', 'Latest', 'Popular'];
	MenuList = HeaderMenu.map((menuTitle, index) => {
		if (index == 0) {
			return `<li class="ActiveMenu MenuItems badge-pill px-4 py-1">${menuTitle}</li>`;
		} else {
			return `<li class="MenuItems ">${menuTitle}</li>`;
		}
	})
	var CarversalMenu = $('#CarversalMenu');
	CarversalMenu.append(MenuList);

	var selected_menu = document.querySelectorAll(".MenuItems");
	for (let i = 0; i < selected_menu.length; i++) {
		selected_menu[i].addEventListener('click', selectedMenu.bind(this, selected_menu[i]));
	}

	function selectedMenu(menu) {
		// console.log(menu)
		$(".MenuItems").removeClass('ActiveMenu badge-pill px-4 py-1');
		$(menu).addClass('ActiveMenu MenuItems badge-pill px-4 py-1');
	}

	// menu javascript


</script>
</body>
</html>
