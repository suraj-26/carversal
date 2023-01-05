<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>About Us</title>

</head>
<body>
<?php include_once "Header.php" ?>
<div class="container">
	<!--	heading -->
	<div class="text-center py-5	">
		<h1 class="BebasFont text-capitalize aboutPAgeHeading" style="font-size: 3.5rem">Privacy policy</h1>
		<p class="RobotoFont">Put some relevant information here </p>
	</div>

	<!--	car card details -->
	<div class="row">
		<div class="col-md-12">
			<h1 class="BebasFont text-capitalize aboutPAgeHeading" style="font-size: 3.5rem;text-align: left;">Privacy policy</h1>
			<p class="AliceFont FirstLetterBig">A car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However, the biggest disadvantage of using steam was that it required water to be brought to a boil in order to start a car. car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However A car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However, the biggest disadvantage of using steam was that it required water to be brought to a boil in order to start a car. car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However </p>
			<p class="AliceFont FirstLetterBig">A car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However, the biggest disadvantage of using steam was that it required water to be brought to a boil in order to start a car. car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However A car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However, the biggest disadvantage of using steam was that it required water to be brought to a boil in order to start a car. car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However </p>
		</div>
		<div class="col-md-12">
			<h1 class="BebasFont mt-5 text-capitalize aboutPAgeHeading" style="font-size: 3.5rem;text-align: left;">Our priority</h1>
			<p class="AliceFont FirstLetterBig">A car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However, the biggest disadvantage of using steam was that it required water to be brought to a boil in order to start a car. car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However A car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However, the biggest disadvantage of using steam was that it required water to be brought to a boil in order to start a car. car which is used as a means of transport has come a long way. Nicolas-Joseph Cugnot from France was the first person to invent automobile which had three wheels in 1769. It was heavy in size and slow in speed. However </p>
		</div>
		<div class="col-md-6">
			<a href="<?=base_url()?>Discovery" class="PrevNext align-items-center d-flex">
				<h4 class="mb-0 mr-2">Go to Discover</h4>
				<span style="font-size: xx-large;"><i class="fa-sharp fa-solid fa-right-long"></i></span>
			</a>

		</div>

	</div>


</div>
<?php include_once "footer.php" ?>

</body>
</html>
<script>
	function CheckLogin(form_id) {
		let formd = document.getElementById(form_id);
		let formdata = new FormData(formd);
		app.request("AddContactUs",formdata).then(res=>{
			if(res.status === 200){
				app.successToast(res.body);
			}else{
				app.errorToast(res.body);
			}
		}).catch(error=>console.log(error));
	}
</script>
