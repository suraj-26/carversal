<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Discover</title>
</head>
<body>
<?php include_once "Header.php" ?>
<div class="container search_results">

<!--	mobile device -->
<div class="d-block d-md-none	">
	<div class="row py-4 ">
		<div class="col-6">
			<?php if (array_key_exists(0, $data)) { ?>
				<div class="row  boxShadow" style="border-radius: 8px">

					<div class="col-md-6">
						<img src="<?= base_url() ?>uploads/<?= $data[0]->image ?>" style="border-radius: 8px"
							 class="w-100" alt="">
					</div>
					<div class="col-md-6">
						<div class="align-items-baseline d-flex flex-column h-100 justify-content-between">
							<div class="">
								<h1 class="BebasFont DiscoberBlogHeading mt-1"><?= $data[0]->name ?></h1>
								<p class="AliceFont TextOverflow d-none d-md-block"><?= $data[0]->detail ?></p>
								<p class="AliceFont d-block d-md-none"> <span>07 Nov 2022</span> <span class="ml-3">10 min read</span></p>
							</div>
							<button class="BorderBlueButton btn btn-sm mb-4 d-none d-md-block" onclick="readMore('<?= $data[0]->id ?>')"
									type="button">Read More
							</button>

						</div>
					</div>
				</div>

			<?php } ?>

			<?php if (array_key_exists(2, $data)) { ?>
				<div class="row mt-3  boxShadow" style="border-radius: 8px">

					<div class="col-md-6">
						<img src="<?= base_url() ?>uploads/<?= $data[2]->image ?>" style="border-radius: 8px"
							 class="w-100" alt="">
					</div>
					<div class="col-md-6">
						<div class="align-items-baseline d-flex flex-column h-100 justify-content-between">
							<div class="">
								<h1 class="BebasFont DiscoberBlogHeading mt-1"><?= $data[2]->name ?></h1>
								<p class="AliceFont TextOverflow d-none d-md-block"><?= $data[2]->detail ?></p>
								<p class="AliceFont d-block d-md-none"> <span>07 Nov 2022</span> <span class="ml-3">10 min read</span></p>
							</div>
							<button class="BorderBlueButton btn btn-sm mb-4 d-none d-md-block" onclick="readMore('<?= $data[2]->id ?>')"
									type="button">Read More
							</button>

						</div>
					</div>
				</div>

			<?php } ?>


			<?php if (array_key_exists(4, $data)) { ?>
				<div class="row mt-3  boxShadow" style="border-radius: 8px">

					<div class="col-md-6">
						<img src="<?= base_url() ?>uploads/<?= $data[4]->image ?>" style="border-radius: 8px"
							 class="w-100" alt="">
					</div>
					<div class="col-md-6">
						<div class="align-items-baseline d-flex flex-column h-100 justify-content-between">
							<div class="">
								<h1 class="BebasFont DiscoberBlogHeading mt-1"><?= $data[4]->name ?></h1>
								<p class="AliceFont TextOverflow d-none d-md-block"><?= $data[4]->detail ?></p>
								<p class="AliceFont d-block d-md-none"> <span>07 Nov 2022</span> <span class="ml-3">10 min read</span></p>
							</div>
							<button class="BorderBlueButton btn btn-sm mb-4 d-none d-md-block" onclick="readMore('<?= $data[4]->id ?>')"
									type="button">Read More
							</button>

						</div>
					</div>
				</div>

			<?php } ?>
		</div>
		<div class="col-6">
			<?php if (array_key_exists(1, $data)) { ?>
				<div class=" boxShadow my-3" style="border-radius: 8px">
					<div class="col-md-5 px-0">
						<img src="<?= base_url() ?>uploads/<?= $data[1]->image ?>" style="border-radius: 8px"
							 class="w-100" alt="">
					</div>
					<div class="">
						<div class="align-items-baseline d-flex flex-column h-100 justify-content-between">
							<div class="">
								<h1 class="BebasFont DiscoberBlogHeading mt-1"><?= $data[1]->name ?></h1>
								<p class="AliceFont TextOverflowFourLine d-none d-md-block"><?= $data[1]->detail ?></p>
								<p class="AliceFont d-block d-md-none"> <span>07 Nov 2022</span> <span class="ml-3">10 min read</span></p>
							</div>
							<button class="BorderBlueButton btn btn-sm mb-4 d-none d-md-block" onclick="readMore('<?= $data[1]->id ?>')"
									type="button">Read More
							</button>

						</div>
					</div>
				</div>
			<?php } ?>


			<?php if (array_key_exists(3, $data)) { ?>
				<div class=" boxShadow my-3" style="border-radius: 8px">
					<div class="col-md-5 px-0">
						<img src="<?= base_url() ?>uploads/<?= $data[3]->image ?>" style="border-radius: 8px"
							 class="w-100" alt="">
					</div>
					<div class="">
						<div class="align-items-baseline d-flex flex-column h-100 justify-content-between">
							<div class="">
								<h1 class="BebasFont DiscoberBlogHeading mt-1"><?= $data[3]->name ?></h1>
								<p class="AliceFont TextOverflowFourLine d-none d-md-block"><?= $data[3]->detail ?></p>
								<p class="AliceFont d-block d-md-none"> <span>07 Nov 2022</span> <span class="ml-3">10 min read</span></p>
							</div>
							<button class="BorderBlueButton btn btn-sm mb-4 d-none d-md-block" onclick="readMore('<?= $data[3]->id ?>')"
									type="button">Read More
							</button>

						</div>
					</div>
				</div>
			<?php } ?>


			<?php if (array_key_exists(5, $data)) { ?>
				<div class=" boxShadow my-3" style="border-radius: 8px">
					<div class="col-md-5 px-0">
						<img src="<?= base_url() ?>uploads/<?= $data[5]->image ?>" style="border-radius: 8px"
							 class="w-100" alt="">
					</div>
					<div class="">
						<div class="align-items-baseline d-flex flex-column h-100 justify-content-between">
							<div class="">
								<h1 class="BebasFont DiscoberBlogHeading mt-1"><?= $data[5]->name ?></h1>
								<p class="AliceFont TextOverflowFourLine d-none d-md-block"><?= $data[5]->detail ?></p>
								<p class="AliceFont d-block d-md-none"> <span>07 Nov 2022</span> <span class="ml-3">10 min read</span></p>
							</div>
							<button class="BorderBlueButton btn btn-sm mb-4 d-none d-md-block" onclick="readMore('<?= $data[5]->id ?>')"
									type="button">Read More
							</button>

						</div>
					</div>
				</div>
			<?php } ?>



		</div>
		<div class="align-items-center w-100 bg-secondary d-flex justify-content-around mx-3 row"
			 style="border-radius: 8px;">
			<h1 class="BebasFont py-5"> AD</h1>
		</div>
	</div>
</div>



<div class="d-none d-md-block">
	<!--	card 1-->
	<?php if (array_key_exists(0, $data)) { ?>
		<div class="row my-4 boxShadow" style="border-radius: 8px">
			<div class="col-md-6">
				<img src="<?= base_url() ?>uploads/<?= $data[0]->image ?>" style="border-radius: 8px"
					 class="w-100" alt="">
			</div>
			<div class="col-md-6">
				<div class="align-items-baseline d-flex flex-column h-100 justify-content-between">
					<div class="">
						<h1 class="BebasFont"><?= $data[0]->name ?></h1>
						<p class="AliceFont TextOverflow"><?= $data[0]->detail ?></p>
					</div>
					<button class="BorderBlueButton btn btn-sm mb-4" onclick="readMore('<?= $data[0]->id ?>')"
							type="button">Read More
					</button>

				</div>
			</div>
		</div>

	<?php } ?>
	<!--	cart 2-->

	<div class="row">
		<div class="col-md-7">


			<?php if (array_key_exists(1, $data)) { ?>
				<div class="row boxShadow mb-4" style="border-radius: 8px">
					<div class="col-md-5 px-0">
						<img src="<?= base_url() ?>uploads/<?= $data[1]->image ?>" style="border-radius: 8px"
							 class="w-100" alt="">
					</div>
					<div class="col-md-7">
						<div class="align-items-baseline d-flex flex-column h-100 justify-content-between">
							<div class="">
								<h1 class="BebasFont"><?= $data[1]->name ?></h1>
								<p class="AliceFont TextOverflowFourLine"><?= $data[1]->detail ?></p>
							</div>
							<button class="BorderBlueButton btn btn-sm mb-4" onclick="readMore('<?= $data[1]->id ?>')"
									type="button">Read More
							</button>

						</div>
					</div>
				</div>
			<?php } ?>
			<?php if (array_key_exists(2, $data)) { ?>
				<div class="row ">
					<div class="col-md-12 mb-4 px-0 boxShadow" style="border-radius: 8px">
						<img src="<?= base_url() ?>uploads/<?= $data[2]->image ?>" style="border-radius: 8px"
							 class="w-100" alt="">

						<div class="px-3">
							<h1 class="BebasFont mt-3"><?= $data[2]->name ?></h1>
							<p class="AliceFont TextOverflow"><?= $data[2]->detail ?></p>
							<button class="BorderBlueButton btn btn-sm mb-4" onclick="readMore('<?= $data[2]->id ?>')"
									type="button">Read More
							</button>

						</div>

					</div>
				</div>
			<?php } ?>
			<div class="row">
				<?php if (array_key_exists(3, $data)) { ?>
					<div class="col-md-7 ">
						<div class="boxShadow" style="border-radius: 8px">
							<img src="<?= base_url() ?>uploads/<?= $data[3]->image ?>" style="border-radius: 8px"
								 class="w-100" alt="">
							<div class="px-3">
								<h1 class="BebasFont mt-3"><?= $data[3]->name ?></h1>
								<p class="AliceFont TextOverflow"><?= $data[3]->detail ?></p>
								<button class="BorderBlueButton btn btn-sm mb-4"
										onclick="readMore('<?= $data[3]->id ?>')" type="button">Read More
								</button>

							</div>
						</div>
					</div>
				<?php } ?>
				<div class="align-items-center bg-secondary col-5 d-flex justify-content-around"
					 style="border-radius: 8px;">
					<h1 class="BebasFont"> AD</h1>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<?php if (array_key_exists(4, $data)) { ?>
				<div class="row mx-0">
					<div class="col-md-12 mb-4 px-0 boxShadow" style="border-radius: 8px">
						<img src="<?= base_url() ?>uploads/<?= $data[4]->image ?>"
							 style="border-radius: 8px;height: 341px;"
							 class="w-100" alt="">

						<div class="px-3">
							<h1 class="BebasFont mt-3"><?= $data[4]->name ?></h1>
							<p class="AliceFont TextOverflowFourLine"><?= $data[4]->detail ?></p>
							<button class="BorderBlueButton btn btn-sm mb-4" onclick="readMore('<?= $data[4]->id ?>')"
									type="button">Read More
							</button>

						</div>

					</div>
				</div>
			<?php } ?>
			<?php if (array_key_exists(5, $data)) { ?>
				<div class="row mx-0">
					<div class="col-md-12 mb-4 px-0 boxShadow" style="border-radius: 8px;">
						<img src="<?= base_url() ?>uploads/<?= $data[5]->image ?>"
							 style="border-radius: 8px;height: 416px;"
							 class="w-100" alt="">

						<div class="px-3">
							<h1 class="BebasFont mt-3"><?= $data[5]->name ?></h1>
							<p class="AliceFont TextOverflowFourLine"><?= $data[5]->detail ?></p>
							<button class="BorderBlueButton btn btn-sm mb-4" onclick="readMore('<?= $data[5]->id ?>')"
									type="button">Read More
							</button>

						</div>

					</div>
				</div>
			<?php } ?>
			<div class="align-items-center bg-secondary d-flex justify-content-around mx-0 row"
				 style="border-radius: 8px;">
				<h1 class="BebasFont py-5"> AD</h1>
			</div>

		</div>



	</div>

</div>

	<div class="col-12 mt-5 text-center">
		<a class="BorderBlueButton btn btn-md" href="<?= base_url() ?>DiscoveryBlogs/1">View More</a>
	</div>

</div>

<?php include_once "Footer.php" ?>
</body>

<script>
	function readMore(id) {
		location.href = base_url + 'Blogs/' + id;
	}
</script>
</html>
