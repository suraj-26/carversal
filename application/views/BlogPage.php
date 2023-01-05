<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Blog</title>
</head>
<body>
<?php include_once "Header.php" ?>
<div class="container">
	<div class="row">
		<!--		 1st blog-->
		<div class="col-md-9 mt-5">
			<div class="row">
				<div class="col-md-12 mt-5">
					<h2 class="BebasFont" id="name"><?=$Data->name?></h2>
					<input type="hidden" name="blog_id" id="blog_id" value="<?=$Data->id?>">
					<p class="RobotoFont" id="published_on">Published on <?=$Data->created_on?></p>
					<div class="">
						<img src="<?= base_url() ?>uploads/<?=$Data->image?>" id="blog_image" style="border-radius: 8px"
							 class="w-100" alt="">
						<div class="position-relative">
							<div class="d-flex position-absolute" style="right: 56px; top: -24px">
								<div class="align-items-center bg-white border  d-flex justify-content-around rounded-circle text-secondary"
									 style="width: 40px;height: 40px;font-size: x-large;box-shadow: 0px 1px 4px 0px #6c757d ;">
									<i class="fa-sharp fa-solid fa-share"></i>
								</div>
								<?php
								$is_fav = '';
								if($Data->is_fav == 1){
									$is_fav = 'favoriteBlog';
								}
								?>

								<div class="align-items-center ml-3 bg-white border
								d-flex justify-content-around rounded-circle text-secondary <?=$is_fav?>"
									 id="favorite" style="width: 40px;height: 40px;font-size: x-large;box-shadow: 0px 1px 4px 0px #6c757d ;">
									<i class="fa-solid fa-heart"></i>
								</div>
							</div>
						</div>
						<div class="">
							<div class="align-items-center d-flex justify-content-between mt-3 pr-3 px-2">
								<div class="align-items-center d-flex mb-2 mt-3">
									<img src="<?= base_url() ?>/assets/CarvesalImage/User.jpg"
										 class="mr-2 rounded-circle" alt="" style="
    width: 36px;
">
									<div class="">
										<h6 class="AliceFont mb-0">Malay Panday</h6>
										<h6 class="AliceFont mb-0 small text-muted">10 min read</h6>
									</div>
								</div>
								<div class=" socialIcons blogPageSocialIcon" style=" font-size: larger;">
									<a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
									<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
									<a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
									<a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#"><i class="fa-solid fa-share-nodes"></i></a>

								</div>


							</div>
						</div>
						<p class="FirstLetterBig AliceFont" id="description"><?=$Data->detail?></p>
					</div>

				</div>
				<div class="col-12">
					<div class="align-items-center bg-secondary justify-content-around py-4 row" style="border-radius: 8px;">
						<h1 class="BebasFont my-4">AD</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">

		</div>
	</div>
</div>
<?php include_once "Footer.php" ?>
</body>
<script>
	$('#favorite').click(function () {
		let is_fav = 0;
		if($("#favorite").hasClass('favoriteBlog')){
			is_fav = 1;
		}
		let formdata = new FormData();
		formdata.set('is_fav',is_fav);
		formdata.set('blog_id',$("#blog_id").val());
		app.request("changeStatus",formdata).then(res=>{
			if(res.status=== 200){
				$(this).toggleClass('favoriteBlog');
			}
		}).catch(error=>console.log(error));
	});

</script>
</html>
