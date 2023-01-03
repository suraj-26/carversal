<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php include_once "Header.php" ?>
<div class="container" id="discoveryDiv">
	<!--	card 1-->

</div>

<?php include_once "Footer.php" ?>
</body>

<script>

	$(document).ready(function () {
		getBlogs();
	});

	function getBlogs() {
		app.request("getDiscoveryBlogs",null).then(res=>{
			let html = '';

			let data = res.data;
			data.map(e=>{
			html += `<div class="row my-4 boxShadow" style="border-radius: 8px">
				<div class="col-md-6">
				<img src="${base_url}uploads/${e.image}" height="300" style="border-radius: 8px"
				 class="w-100" alt="">
				</div>
				<div class="col-md-6">
				<div class="align-items-baseline d-flex flex-column h-100 justify-content-between">
				<div class="">
				<h1 class="BebasFont">${e.name}</h1>
				<p class="AliceFont TextOverflow">${e.detail}</p>
				</div>
				<button class="BorderBlueButton btn btn-sm mb-4" onclick="readMore('${e.id}')" type="button">Read More</button>

				</div>
				</div>
				</div>`;
			});

			$("#discoveryDiv").html(html);

		}).catch(error=>console.log(error));
	}


	function readMore(id) {
		location.href = base_url + 'Blogs/'+ id;
	}
</script>
</html>
