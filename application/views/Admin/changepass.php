<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<div class="content-page">
	<div class="content">

		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-title-box">
							<h4 class="page-title">Change Password</h4>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 p-20">

			<div class="card-box">

				<form id="changePassword" method="post">
					<div class="form-group">
						<label for="">New Password</label>
						<input type="text" class="form-control" name="newPass" id="newPass">
					</div>

					<div class="form-group">
						<label for="">Confirm Password</label>
						<input type="text" class="form-control" name="confPass" id="confPass">
					</div>

					<button type="button" class="btn btn-github" onclick="changePass()">Change</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
$this->load->view('_partials/footer');
?> 

<script>
	function changePass() {
		let pass1 = $("#newPass").val();
		let pass2 = $("#confPass").val();
		let formdata = new FormData();
		formdata.set('newPass',pass1);
		if(pass1 == pass2){
			app.request("updatePassword",formdata).then(res=>{
				if(res.status === 200){
					resetForm('changePassword');
					app.successToast(res.body);
				}else{
					app.errorToast(res.body);
				}
			}).catch(error=>console.log(error));
		}else{
			app.errorToast('Password Do not Match');
		}
	}


	function resetForm(formId) {
		$('#' + formId)[0].reset();
		$('form#' + formId + ' input[type=hidden]').val('');
	}
</script>
