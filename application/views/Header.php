<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--	css links -->
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap-4.0/css/bootstrap.css">
<!--	<link href="--><?//=base_url();?><!--assets/css/bootstrap.min.css" rel="stylesheet">-->
	<link href="<?=base_url();?>assets/CustomCSS/CustomCSS.css" rel="stylesheet">

	<!--	JQuery CDN  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!--	fontAwsome Icon CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Header</title>

</head>
<body>
<div class="container">
	<div class="PoppinsFont align-items-center border-dark row pt-2" style="border-bottom: 2px solid;">
<div class="col-md-3">
	<h1 class="BebasFont text-capitalize mb-0"> CARVERSAL</h1>
</div>
		<div class="col-md-7">
			<ul class="d-flex justify-content-around list-unstyled mb-0" id="CarversalMenu">			</ul>
		</div>
		<div class="col-md-2">
			<div class="SearchBar d-flex align-items-center border badge-pill">
				<span><i class="fa-solid fa-magnifying-glass"></i></span>
				<input type="search" class="border-0 form-control py-0" style="font-size: small" placeholder="Search">
			</div>
		</div>
	</div>
</div>
<script>
	// create menu
	const HeaderMenu = ['Trending', 'Discover', 'Latest', 'Popular'];
	MenuList = HeaderMenu.map((menuTitle)=>{
	return `<li class="MenuItems">${menuTitle}</li>`;
	})
	var CarversalMenu = $('#CarversalMenu');
	CarversalMenu.append(MenuList);


	var selectmenu = document.querySelectorAll('.MenuItems');

	selectmenu.forEach(function (item) {
		console.log(item)
	})
	// var selectedday = document.querySelectorAll('.schedule_day');
	// // console.log(selectedday);
	// for (let i = 0; i < selectedday.length; i++) {
	// 	selectedday[i].addEventListener("click", view_row_function.bind(this, selectedday[i]));
	// }

</script>
</body>
</html>
