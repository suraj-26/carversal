<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>

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
">REGISTER</h5>
				<form id="Register" method="post" enctype="multipart/form-data">
					<div class="user_name mb-3">
						<p class="mb-0"><b style="
    font-weight: 600;
">Name</b></p>
						<input type="text" name="username" id="username" class="form-control">
					</div>

					<div class="user_name mb-3">
						<p class="mb-0"><b style="
    font-weight: 600;
">EMAIL ID</b></p>
						<input type="text" name="email" id="email" class="form-control">
					</div>
					<div class="password ">
						<p class="mb-0"><b style="
    font-weight: 600;
">PASSWORD</b></p>
						<input type="password" name="password" id="password" class="form-control">
					</div>
				</form>
				<div class="submit_btn my-4 text-center">
					<button type="button" class="PoppinsFont btn font-weight-light px-4 text-light" onclick="CheckLogin('Register')" style="
    border-radius: 3rem;
"><b>SIGN UP</b></button>
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


	function CheckLogin(form_id) {
		let formd = document.getElementById(form_id);
		let formdata = new FormData(formd);
		app.request("RegisterUser",formdata).then(res=>{
			if(res.status === 200){
				app.successToast(res.body);
				location.href = base_url + 'Login';
			}else{
				app.errorToast(res.body);
			}
		}).catch(error=>console.log(error));
	}
</script>
</html>
