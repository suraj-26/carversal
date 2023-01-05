<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Latest</title>
	<style>
		.owl-nav.disabled {
			display: block !important;
		}
	</style>
</head>
<body>
<?php include_once "Header.php" ?>
<div class="container">
	<div class="row py-4">
		<div class="col-md-11">
			<div class="owl-carousel TreandingCarousel  owl-theme" id="TrendingCarCarousel">

			</div>
		</div>
	</div>

<!--	trending Right now -->
	<div class="row">
		<div class="col-md-12">
			<h1 class="BebasFont">Latest right now</h1>
		</div>
		<div class="col-12" id="mainDiv">

		</div>
		<div class="col-12">
			<div class="align-items-center bg-secondary justify-content-around py-4 row" style="border-radius: 8px;">
				<h1 class="BebasFont my-4">AD</h1>
			</div>
		</div>
	</div>

<!--	next and privius page-->
	<div class="row RobotoFont">
		<div class="col-md-6">
			<a href="<?=base_url()?>Discovery" class="PrevNext align-items-center d-flex">
<!--				<div class="align-items-center d-flex privius">-->
					<span style="font-size: xx-large;"><i class="fa-sharp fa-solid fa-left-long"></i></span>
					<h4 class="mb-0 ml-2">Back to Discover</h4>

<!--				</div>-->
			</a>

		</div>
		<div class="col-md-6">
			<a href="<?=base_url()?>DiscoveryBlogs/2" class="PrevNext align-items-center d-flex justify-content-end">
<!--				<div class="Next align-items-center d-flex ">-->
					<h4 class="mb-0 mr-2">See More Like This</h4>
					<span style="font-size: xx-large;"><i class="fa-sharp fa-solid fa-right-long"></i></span>

<!--				</div>-->
			</a>

		</div>
	</div>

</div>


<?php include_once "Footer.php" ?>
</body>
<script>

	function loader() {
		var TreandingCarousel = $('.TreandingCarousel');
		TreandingCarousel.owlCarousel({
			loop: true,
			margin: 10,
			dots: false,
			nav: true,
			navText: ['<button type="button" class="btn slider-left-btn" style="visibility: hidden"> </button>', '<button type="button" class="bg-white btn p-0 slider-left-btn" style="font-size: xx-large;position: absolute; right: -64px; top: 40%;box-shadow: unset;"> <span><i class="fa-solid fa-arrow-right"></i></span> </button>'],
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		});
	}

	$(document).ready(function () {
		getData();
	});

	function getData() {
		let formdata = new FormData();
		formdata.set('type',2);
		app.request("getDiscoveryBlogs",formdata).then(res=>{
			if(res.status === 200) {

				let data = res.data;
				let html = '';
				let html2 = '';
				if(data.length > 0){
					data.map((e,index)=>{
						html += `
						<div class="item RobotoFont">
						<div class="">
						<img src="${base_url}uploads/${e.image}" style="border-radius: 8px"
						 class="w-100" alt="">
						</div>
						<h3 class="carouselImageText">${e.name}</h3>
						</div>
						`;

						if(index < 2){
							html2 += `
					<div class="row py-4">
					<div class="col-md-3">
					<img src="${base_url}uploads/${e.image}" style="border-radius: 8px"
					 class="w-100" alt="">
					</div>
					<div class="col-md-9 d-flex flex-column justify-content-around">
					<div class="">
					<h3 class="PoppinsFont " style="font-weight: 600;">${e.name}</h3>
					<p class="AliceFont text-muted TextOverflowFourLine">${e.detail}</p>
					</div>
					<div class="align-items-center d-flex justify-content-between">
					<div class="align-items-center d-flex">
					<img src="<?= base_url() ?>/assets/CarvesalImage/User.jpg"
					 class="mr-2 rounded-circle" alt="" style="
						width: 36px;
					">
					<h6 class="AliceFont mb-0">Malay Panday</h6>
					</div>
					<div class="align-items-center d-flex">
					<span style="
						font-size: x-large;
					" class="mr-2"><i class="fa-solid fa-book-open"></i></span>
					<h6 class="RobotoFont mb-0">Published on ${e.created_on}</h6>
					</div>
					<h6 class="AliceFont mb-0">10 min read</h6>
					</div>
					</div>
					</div>
					`;
						}
					});

					$("#TrendingCarCarousel").html(html);
					$("#mainDiv").html(html2);
					loader();
				}else{
					console.log('No Data Found');
				}
			}

		}).catch(error=>console.log(error));
	}
</script>
</html>
