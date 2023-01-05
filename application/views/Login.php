<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CARVERSAL-Login</title>

	<style>
		.register a{
			color: var(--BlueColor);
		}
		.submit_btn button{
			background-color: var(--BlueColor);
		}
		.register_btn button{
			background-color: #949090;
		}
	</style>
</head>
<body>
<?php include_once "Header.php" ?>
<div class="container">
	<div class="row justify-content-around">
		<div class="border boxShadow col-md-6 my-5 px-5" style="
    border-radius: 8px;
">
			<div class="login_register">
				<h5 class="RobotoFont mb-4 mt-5 text-center" style="
    font-size: x-large;
">LOGIN</h5>
				<form action="">
					<div class="user_name mb-3">
						<p class="mb-0"><b style="
    font-weight: 600;
">USER NAME</b></p>
						<input type="text" class="form-control">
					</div>
					<div class="password ">
						<p class="mb-0"><b style="
    font-weight: 600;
">PASSWORD</b></p>
						<input type="password" class="form-control">
						<p class="float-right mb-0"><b><a href="#">forget password</a></b></p>
					</div>
					<div class="reminder">

						<!-- <input type="checkbox" > -->
						<input type="checkbox" id="reminde_me" name="reminder" value="">
						<label for="reminde_me" class="mb-0"><b>Remember Password</b></label><br>

					</div></form>
				<div class="submit_btn my-4 text-center">
					<button type="button" class="PoppinsFont btn font-weight-light px-4 text-light" style="
    border-radius: 3rem;
"><b>SIGN UP</b></button>
				</div>

				<div class="register">
					<p>Don't have an account? <a href="#"><b>Register NOW !</b></a></p>
					<div class="register_btn my-4 text-center">
						<button type="button" class="btn text-light px-4" style="border-radius: 3rem"><b>REGISTER</b></button>
					</div>
				</div>
			</div>
		</div>
	</div>



</div>
<?php include_once "Footer.php" ?>
</body>
<script>
	$(function(){
		$("#Header").load("header.html");
		$("#footer").load("footer.html");
	});
</script>
</html>
