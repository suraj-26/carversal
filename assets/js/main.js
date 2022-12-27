$(document).ready(function () {
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth() + 1; //January is 0!
	var yyyy = today.getFullYear();

	if (dd < 10) {
		dd = '0' + dd;
	}

	if (mm < 10) {
		mm = '0' + mm;
	}

	today = yyyy + '-' + mm + '-' + dd;
	document.getElementById("date").setAttribute("min", today);
});


function getPatients(){
	app.request(baseURL + "getPatients",null).then(res=>{
		if(res.status === 200){
			$("#PatientTable").html('');
			$("#PatientTable").html(res.data);
		}else{
			$("#PatientTable").html('');
			$("#PatientTable").html(res.data);
		}
	}).catch(error=>console.log(error));
}


function getDoctors(){
	app.request(baseURL + "getDoctors",null).then(res=>{
		if(res.status === 200){
			$("#DoctorTable").html('');
			$("#DoctorTable").html(res.data);
		}else{
			$("#DoctorTable").html('');
			$("#DoctorTable").html(res.data);
		}
	}).catch(error=>console.log(error));
}



function resetForm(formId) {
	$('#' + formId)[0].reset();
	$('form#' + formId + ' input[type=hidden]').val('');
}

function editPatient(id,type) {
	let formdata = new FormData();
	formdata.set('id',id);
	app.request(baseURL + "getDetails",formdata).then(res=>{
		if(res.status===200){
			$("#patient_id").val(id);
			$("#type").val(type);
			$("#UpdateModal").modal("show");

			$("#name").val(res.data.name);
			$("#mobile").val(res.data.mobile);
			$("#email").val(res.data.email);
			$("#address").val(res.data.address);
			$("#username").val(res.data.username);
			$("#password").val(res.data.password);
		}else{
			app.errorToast(res.body);
		}
	}).catch(error=>console.log(error));
}

$("#EditDetail").validate({

	rules: {
		name: 'required',
		mobile: 'required',
		address: 'required',
		username:'required',
		password: 'required'
	},
	errorElement: 'span',
	submitHandler: function (form) {
		let val = $("#type").val();
		let formData = new FormData(form);
		app.request(baseURL + "EdiDetails",formData).then(res=>{
			if(res.status === 200){
				app.successToast(res.body);
				$("#UpdateModal").modal('hide');
				if(type ===1 ){
					getPatients();
				}else{
					getDoctors();
				}
			}else{
				app.errorToast(res.body);
			}
		});
	}
});

function deleteUser(id) {
	if (confirm('Are you sure you want to delete this?')) {
		let formdata = new FormData();
		formdata.set("id",id);
		app.request(baseURL +  "deleteUser",formdata).then(res=>{
			if(res.status===200){
				app.successToast(res.body);
				if(type === 1){
					getPatients();
				}else{
					getDoctors();
				}
			}else{
				app.errorToast(res.body);
			}
		}).catch(error=>console.log(error));
	}
}


function deleteHos(id) {
	if (confirm('Are you sure you want to delete this?')) {
		let formdata = new FormData();
		formdata.set("id",id);
		app.request(baseURL +  "deleteHos",formdata).then(res=>{
			if(res.status===200){
				app.successToast(res.body);
				getHospital();
			}else{
				app.errorToast(res.body);
			}
		}).catch(error=>console.log(error));
	}
}

function deleteApp(id) {
	if (confirm('Are you sure you want to delete this?')) {
		let formdata = new FormData();
		formdata.set("id",id);
		app.request(baseURL +  "deleteApp",formdata).then(res=>{
			if(res.status===200){
				app.successToast(res.body);
				getApp();
			}else{
				app.errorToast(res.body);
			}
		}).catch(error=>console.log(error));
	}
}


function deleteAmb(id) {
	if (confirm('Are you sure you want to delete this?')) {
		let formdata = new FormData();
		formdata.set("id",id);
		app.request(baseURL +  "deleteAmbulance",formdata).then(res=>{
			if(res.status===200){
				app.successToast(res.body);
				getAmbulance();
			}else{
				app.errorToast(res.body);
			}
		}).catch(error=>console.log(error));
	}
}

function deletePharmacy(id) {
	if (confirm('Are you sure you want to delete this?')) {
		let formdata = new FormData();
		formdata.set("id",id);
		app.request(baseURL +  "deletePharmacy",formdata).then(res=>{
			if(res.status===200){
				app.successToast(res.body);
				getPharmacy();
			}else{
				app.errorToast(res.body);
			}
		}).catch(error=>console.log(error));
	}
}



function deletebb(id) {
	if (confirm('Are you sure you want to delete this?')) {
		let formdata = new FormData();
		formdata.set("id",id);
		app.request(baseURL +  "deleteBB",formdata).then(res=>{
			if(res.status===200){
				app.successToast(res.body);
				getBloodBank();
			}else{
				app.errorToast(res.body);
			}
		}).catch(error=>console.log(error));
	}
}



function saveEnquiry() {
	let formd = document.getElementById('enquiryForm');
	let formdata = new FormData(formd);
	app.request(baseURL + "saveEnquiry",formdata).then(res=>{
		if(res.status===200){
			app.successToast(res.body);
			resetForm('enquiryForm');
		}else{
			app.errorToast(res.body);
		}
	}).catch(error=>console.log(error));
}


