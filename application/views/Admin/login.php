<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!--	css links -->
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap-4.0/css/bootstrap.css">
	<!--	JQuery CDN  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!--	fontAwsome Icon CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="<?=base_url();?>assets/js/custom.js?version=<?=time()?>" type="text/javascript"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<title>Login</title>
</head>
<style>
	* {
		margin: 0;
		padding: 0;
		outline: none;
	}

	body {
		width: 100vw;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	#content {
		width: 350px;
		padding: 50px;
		box-shadow: 0 11px 17px 5px rgb(0 0 0 / 33%);
		border-radius: 50px;
	}

	#content > h1 {
		text-align: center;
	}

	.input-bar {
		width: 250px;
		height: 60px;
		border: 2px solid #000;
		border-radius: 25px;
		margin: 30px 0;
		opacity: 0.5;
		transition: 200ms;
		font-weight: 600;
		position: relative;
	}

	.input-bar > label {
		position: absolute;
		font-size: 17px;
		text-transform: capitalize;
		top: 20px;
		left: 45px;
		transition: 200ms;
	}

	.input-bar > input {
		position: absolute;
		width: 100%;
		height: 100%;
		border: none;
		background: none;
		box-sizing: border-box;
		padding: 20px 45px 10px;
		font-size: 18px;
	}

	.input-bar > box-icon {
		position: absolute;
		width: 26px;
		top: 17px;
		left: 10px;
	}

	.focus {
		opacity: 1;
	}

	.focus > label {
		top: 2px;
		font-size: 12px;
	}

	#btn {
		width: 250px;
		border: none;
		padding: 15px;
		color: #fff;
		background-color: #000;
		font-size: 24px;
		border-radius: 30px;
		cursor: pointer;
	}
</style>
<body>

<div id="content">
	<h1>Welcome!</h1>
	<form method="post" id="LoginForm" enctype="multipart/form-data">
		<div class="input-bar">
			<label for="name">username</label>
			<input type="text" id="email" name="email" class="input">
			<box-icon name='user'></box-icon>
		</div>
		<div class="input-bar">
			<label for="password">password</label>
			<input type="password" id="password" name="password" class="input">
			<box-icon name='lock-alt' ></box-icon>
		</div>
		<button type="button" onclick="checkLogin()" id="btn">Login</button>
	</form>
</div>
</body>
</html>
<script>
	const input = document.querySelectorAll('.input');

	function inputFocus() {
		this.parentNode.classList.add('focus');
	}

	function inputBlur() {
		if(this.value == '' || this.value === null){
			this.parentNode.classList.remove('focus');
		}
	}

	input.forEach((e) => {
		e.addEventListener('focus', inputFocus);
		e.addEventListener('blur', inputBlur);
	})

	function checkLogin() {
		let formdata = new FormData();
		formdata.set('email',$("#email").val());
		formdata.set('password',$("#password").val());
		app.request("checkLogin",formdata).then(res=>{
			if(res.status === 200){
				app.successToast(res.body);
				location.href = baseURL + "Dashboard";
			}else{
				app.errorToast(res.body);
			}
		}).catch(error=>console.log(error));
	}

</script>
