<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>About Us</title>
	<style>
		.field {
			display: flex;
			flex-flow: column-reverse;
			margin-bottom: 1em;
		}

		label, .contactInput {
			transition: all 0.2s;
			touch-action: manipulation;
		}

		.contactInput {
			font-size: 1.2rem;
			border: 0;
			border-bottom: 1px solid #ccc;
			font-family: inherit;
			-webkit-appearance: none;
			border-radius: 0;
			padding: 0;
			cursor: text;
		}

		.contactInput:focus{
			outline: 0;
			border-bottom: 1px solid #666;
		}

		label {
			text-transform: uppercase;
			letter-spacing: 0.05em;
		}

		.contactInput:placeholder-shown + label{
			cursor: text;
			max-width: 66.66%;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			transform-origin: left bottom;
			transform: translate(0, 2.125rem) scale(1.5);
		}

		::-webkit-input-placeholder {
			opacity: 0;
			transition: inherit;
		}

		.contactInput:focus::-webkit-input-placeholder{
			opacity: 1;
		}

		.contactInput:not(:placeholder-shown) + label,
		.contactInput:focus + label {
			transform: translate(0, 0) scale(1);
			cursor: pointer;
		}
	</style>
</head>
<body>
<?php include_once "Header.php" ?>
<div class="container">
	<!--	heading -->
	<div class="text-center py-5	">
		<h1 class="BebasFont text-capitalize aboutPAgeHeading" style="font-size: 3.5rem">ABOUT US</h1>
		<p class="RobotoFont">Put some relevant information here </p>
	</div>

	<!--	car card details -->
	<div class="row">
		<div class="col-md-6">
			<h1 class="BebasFont text-capitalize aboutPAgeHeading" style="font-size: 3.5rem">Who we are</h1>
			<p class="AliceFont FirstLetterBig">A car which is used as a means of transport has come a long way.
				Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in
				1769. It was heavy in size and slow in speed. However, the biggest disadvantage of using steam was that
				it required water to be brought to a boil in order to start a car. car which is used as a means of
				transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent
				automobile which had three wheels in 1769. It was heavy in size and slow in speed. However</p>
		</div>
		<div class="col-md-6">
			<img src="<?= base_url() ?>assets/CarvesalImage/carImage-16.png" style="border-radius: 8px"
				 class="w-100" alt="">
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-6">
			<img src="<?= base_url() ?>assets/CarvesalImage/carImage-17.png" style="border-radius: 8px"
				 class="w-100" alt="">
		</div>
		<div class="col-md-6">
			<h1 class="BebasFont text-capitalize aboutPAgeHeading" style="font-size: 3.5rem">Our priority</h1>
			<p class="AliceFont FirstLetterBig">A car which is used as a means of transport has come a long way.
				Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in
				1769. It was heavy in size and slow in speed. However, the biggest disadvantage of using steam was that
				it required water to be brought to a boil in order to start a car. car which is used as a means of
				transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent
				automobile which had three wheels in 1769. It was heavy in size and slow in speed. However</p>
		</div>

	</div>

	<!--	Team Introduction-->

	<div class="text-center py-5	">
		<h1 class="BebasFont text-capitalize aboutPAgeHeading" style="font-size: 3.5rem">Our team</h1>
		<div class="row justify-content-center">
			<div class="col-10 py-5">
				<div class="row">
					<!--					teammmber card 1 -->
					<div class="col-md-4">
						<div class="boxShadow RobotoFont" style="border-radius: 8px">
							<img src="<?= base_url() ?>assets/CarvesalImage/carImage-9.png" style="border-radius: 8px"
								 class="w-100" alt="">
							<h3 class="">Name</h3>
							<p class="text-dark">Designation </p>
							<div class=" socialIcons blogPageSocialIcon" style=" font-size: larger;">
								<a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
								<a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
								<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>

							</div>
						</div>
					</div>
					<!--					teammmber card 2 -->
					<div class="col-md-4">
						<div class="boxShadow RobotoFont" style="border-radius: 8px">
							<img src="<?= base_url() ?>assets/CarvesalImage/carImage-9.png" style="border-radius: 8px"
								 class="w-100" alt="">
							<h3 class="">Name</h3>
							<p class="text-dark">Designation </p>
							<div class=" socialIcons blogPageSocialIcon" style=" font-size: larger;">
								<a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
								<a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
								<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>

							</div>
						</div>
					</div>
					<!--					teammmber card 3 -->
					<div class="col-md-4">
						<div class="boxShadow RobotoFont" style="border-radius: 8px">
							<img src="<?= base_url() ?>assets/CarvesalImage/carImage-9.png" style="border-radius: 8px"
								 class="w-100" alt="">
							<h3 class="">Name</h3>
							<p class="text-dark">Designation </p>
							<div class=" socialIcons blogPageSocialIcon" style=" font-size: larger;">
								<a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
								<a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
								<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--	Contact form -->
	<div class="text-center py-5	">
		<h1 class="BebasFont text-capitalize aboutPAgeHeading" style="font-size: 3.5rem">Contact us</h1>
	</div>
	<div class="row mt-5">
		<div class="col-md-6">
			<h3 class="RobotoFont">Get in touch </h3>
			<form action="" class="RobotoFont w-75">
				<div class="field mb-1">
					<input type="text" class="contactInput " name="fullname" id="fullname" placeholder="Jane Appleseed">
					<label for="fullname" class="small text-muted mb-0">Your Name</label>
				</div>

				<div class="field mb-1 ">
					<input type="email" class="contactInput" name="email" id="email" placeholder="jane.appleseed@example.com">
					<label for="email" class="small text-muted mb-0">Email</label>
				</div>
				<div class="field mb-1">
					<textarea type="text" class="contactInput" rows="1" name="userMessage" id="userMessage" placeholder="jane.appleseed@example.com"></textarea>
					<label for="userMessage" class=" small text-muted mb-0">Your message</label>
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<h1 class="BebasFont text-capitalize aboutPAgeHeading" style="font-size: 3.5rem">Our priority</h1>
			<p class="AliceFont FirstLetterBig">A car which is used as a means of transport has come a long way.
				Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in
				1769. It was heavy in size and slow in speed. However, the biggest disadvantage of using steam was that
				it required water to be brought to a boil in order to start a car. car which is used as a means of
				transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent
				automobile which had three wheels in 1769. It was heavy in size and slow in speed. However</p>
		</div>

	</div>

</div>
<?php include_once "footer.php" ?>

</body>
</html>
