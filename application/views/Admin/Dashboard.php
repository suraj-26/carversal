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
							<h4 class="page-title">Blogs</h4>
							<button style="float: right" class="btn btn-github" onclick="AddBlogs()" type="button">ADD
							</button>
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
						<td>Description</td>
						<td>Published On</td>
						<td>Action</td>
					</tr>
					</thead>
					<tbody id="Blogs">

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="modal" id="updateModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Blogs</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" id="EditBlogs" enctype="multipart/form-data">
					<input type="hidden" name="update_id" id="update_id">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>


					<div class="form-group">
						<label for="">Description</label>
						<textarea name="description" id="description" class="form-control" rows="5" cols="5"></textarea>
					</div>

					<div class="form-group">
						<label for="">Blog Type</label>
						<select name="blog_type" class="form-control" id="blog_type">
							<option value="1">Stories</option>
							<option value="2">Sliders</option>
							<option value="3" selected>Blogs</option>
						</select>
					</div>



					<div class="form-group">
						<label>File</label>
						<input type="file" class="form-control" name="userfile" id="userfile">


						<div id="imageDiv" class="m-t-10">

						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-github" onclick="AddBlogData()">Save changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

	var editor1 = new RichTextEditor("#description", { editorResizeMode: "height" });

	function getData() {
		app.request(baseURL + "getBlogs", null).then(res => {
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

	function resetForm(formId) {
		$('#' + formId)[0].reset();
		$('form#' + formId + ' input[type=hidden]').val('');
		editor1.setHTMLCode('');
		$("#imageDiv").html('');
	}

	function editBlogs(id) {
		let formdata = new FormData();
		formdata.set('id', id);
		app.request(baseURL + "getBlogsDetails", formdata).then(res => {
			if (res.status === 200) {
				resetForm('EditBlogs');
				$("#update_id").val(id);
				$("#updateModal").modal("show");
				$("#name").val(res.data.name);
				// $("#description").val(res.data.detail);
				$("#blog_type").val(res.data.blog_type);

				editor1.setHTMLCode(res.data.detail);
				if(res.data.image != '' && res.data.image != null){
					console.log(baseURL);
					$("#imageDiv").html(`<img src="${base_url}uploads/${res.data.image}" style="height: 300px;width: 100%;" alt="No Image Found"/>`);
				}
			} else {
				app.errorToast(res.body);
			}
		}).catch(error => console.log(error));
	}

	function AddBlogData() {
		let formd = document.getElementById('EditBlogs');
		let formData = new FormData(formd);
		app.request(baseURL + "EditBlogs", formData).then(res => {
			if (res.status === 200) {
				app.successToast(res.body);
				$("#updateModal").modal('hide');
				getData();
			} else {
				app.errorToast(res.body);
			}
		});
	}


	function deleteBlog(id) {
		if (confirm('Are you sure you want to delete this?')) {
			let formdata = new FormData();
			formdata.set("id", id);
			app.request(baseURL + "deleteBlog", formdata).then(res => {
				if (res.status === 200) {
					app.successToast(res.body);
					getData();
				} else {
					app.errorToast(res.body);
				}
			}).catch(error => console.log(error));
		}
	}

	function AddBlogs() {
		resetForm('EditBlogs');
		$("#updateModal").modal('show');
	}
</script>
