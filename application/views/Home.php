<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home</title>
	<style>
		.owl-nav.disabled {
			display: block !important;
		}

		.btn:focus {
			outline: 0;
			box-shadow: transparent !important;
		}
	</style>
</head>
<body>
<!--header -->
<?php include_once "Header.php" ?>

<div class="container">
	<!--	1st car carousel -->

	<div class="row py-4">
		<div class="col-md-11">
			<div class="owl-carousel HomeCarouselOne  owl-theme" id="FirstCarCarousel">
			</div>
		</div>
	</div>

	<!--	2nd car corousel -->

	<div class="row PoppinsFont " style="font-weight: 700 !important;">
		<div class="col-12">
			<div class="owl-carousel HomeCarouselTwo  owl-theme" id="SecondCarCarousel">
			</div>
		</div>

	</div>

	<!--	1st row of car cards 	-->
	<div class="row" id="CarDetailsCards">
	</div>

	<!--	newsLetters-->
	<div class="row" id="PostDiv">

	</div>

	<div class="col-12">
		<div class="align-items-center bg-secondary justify-content-around py-4 row" style="border-radius: 8px;">
			<h1 class="BebasFont my-4">AD</h1>
		</div>
	</div>
</div>

<!--	car card below newsletter -->
<div class="row mt-4" style="max-width: 1140px;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;" id="LastDiv">
</div>

</div>


<!--footer -->
<?php include_once "Footer.php" ?>

<script>

	function FirstCarousel() {
		var HomeCarouselOne = $('.HomeCarouselOne');
		HomeCarouselOne.owlCarousel({
			loop: true,
			margin: 10,
			dots: false,
			nav: false,
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


	function secondCarousel() {
// for HomeCarouselTwo js
		var HomeCarouselTwo = $('.HomeCarouselTwo');
		HomeCarouselTwo.owlCarousel({
			loop: true,
			margin: 10,
			dots: true,
			nav: false,
			navText: ['<button type="button" class="btn slider-left-btn" style="visibility: hidden"> </button>', '<button type="button" class="bg-white btn p-0 slider-left-btn" style="visibility: hidden"> <span><i class="fa-solid fa-arrow-right"></i></span> </button>'],
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});
	}
</script>


<script>
	$(document).ready(function () {
		getData();
	})


	function getData() {
		app.request("getData", null).then(res => {
			if (res.status === 200) {
				getStoriesFirst(res.data);
				getStoriesSecond(res.data3);
				getHomeData(res.data2);
			} else {

			}
		}).catch(error => console.log(error));
	}


	function getStoriesFirst(data) {
		let html = '';
		if (data.length > 0) {
			data.map(e => {
				html += `
				<div class="item RobotoFont">
				<div class="">
				<img src="${base_url}uploads/${e.image}" style="border-radius: 8px"
				 class="w-100" alt="">
				</div>
				<div class="CarouselTwoContent text-center">
				<h3 class="carouselTwoImageText PoppinsFont">${e.name}</h3>
				<button class="btn btn-sm BorderBlueButton CarouselTwoButtonPosition" onclick="getReads('${e.id}')" type="button">Read More</button>
				</div>
				</div>
				`;
			});
			$("#FirstCarCarousel").html(html);

			FirstCarousel();

		}
	}


	function getStoriesSecond(data) {
		let html = '';
		let html2 = '';
		let cnt = 0;
		if (data.length > 0) {
			data.map((e,index) => {
				html += `
				<div class="item RobotoFont">
					<div class="">
						<img src="${base_url}uploads/${e.image}"  height="500" style="border-radius: 8px"
							 class="w-100" alt="">
					</div>
					<div class="CarouselTwoContent text-center">
						<h3 class="carouselTwoImageText">${e.name}</h3>
						<button class="btn btn-sm BorderBlueButton CarouselTwoButtonPosition" onclick="getReads('${e.id}')" type="button">Read More</button>
					</div>

				</div>
				`;

				if(cnt < 3) {

					html2 += `<div class="col-md-4">
				<div class="">
				<img src="${base_url}uploads/${e.image}" style="border-radius: 8px"
				 class="w-100" alt="">
				<h4 class="PoppinsFont font-weight-bold mt-2">${e.name}</h4>
				<p class="AliceFont mt-3 TextOverflow">${e.detail}</p>
				<button class="btn btn-sm LinkBlueButton" onclick="getReads('${e.id}')" type="button">READ MORE <span><i
				class="fa-solid fa-arrow-right"></i></span></button>
				</div>
				</div>
				`;
				}
				cnt++;
			});
			$("#SecondCarCarousel").html(html);
			$("#LastDiv").html(html2);
			secondCarousel();


		}
	}

	function getHomeData(data) {
		let html = '';
		let html2 = '';
		if (data.length > 0) {
			data.map((e,index) => {

				if(index == 2 || index == 6){
					html += `
<div class="col-md-4 mt-5">
<div class="align-items-center bg-secondary d-flex h-100 justify-content-around" style="
						border-radius: 8px;
						font-size: 10rem !important;">
					<h1 class="BebasFont">AD</h1>
					</div></div>
					`;

					html2 += `
					<div class="col-12">
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
					</div>
					`;
				}
					html += `
				<div class="col-md-4 mt-5">
					<div class="">
						<img src="${base_url}uploads/${e.image}" style="border-radius: 8px"
							 class="w-100" alt="">
						<h4 class="PoppinsFont font-weight-bold mt-2">${e.name}</h4>
						<p class="AliceFont mt-3 TextOverflow">${e.detail}</p>
						<button class="btn btn-sm BorderBlueButton" onclick="getReads('${e.id}')" type="button">Read More</button>
					</div>
				</div>
				`;

			});
			$("#CarDetailsCards").html(html);
			$("#PostDiv").html(html2);

		}
	}

	function getReads(id) {
		location.href = base_url + 'Blogs/' + id;
	}
</script>
</body>
</html>

