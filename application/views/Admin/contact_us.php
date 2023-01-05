<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>

<!--<link rel="stylesheet" href="--><?//= base_url() ?><!--assets/richtexteditor/rte_theme_default.css">-->
<link rel="stylesheet" href="<?=base_url();?>assets/richtexteditor/rte_theme_default.css" />
<script type="text/javascript" src="<?=base_url();?>assets/richtexteditor/rte.js"></script>
<script type="text/javascript" src='<?=base_url();?>assets/richtexteditor/plugins/all_plugins.js'></script>
<style>
	.error {
		color: red;
	}

	.rte-floatpanel-paragraphop{
		display: none!important;
	}
</style>
<!-- Main Content -->
<div class="content-page">
	<div class="content">

		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-title-box">
							<h4 class="page-title">Contact US</h4>
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

				<table class="table table-striped table-responsive" id="DT">
					<thead>
					<tr>
						<td>#</td>
						<td>Name</td>
						<td>Email</td>
						<td>Message</td>
						<td>Contacted On</td>
					</tr>
					</thead>
					<tbody id="Blogs">

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<?php
$this->load->view('_partials/footer');
?> 
<script>var base_url = '<?=base_url()?>';</script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script> 
</div>
<script>
	$(document).ready(function () {
		getData();
	});
	function getData() {
		app.request("getContactUSData", null).then(res => {
			if (res.status === 200) {
				$("#Blogs").html('');
				$("#Blogs").html(res.data);
				$('#DT').DataTable();
			} else {
				$("#Blogs").html('');
				$("#Blogs").html(res.data);
			}
		}).catch(error => console.log(error));
	}
</script>
