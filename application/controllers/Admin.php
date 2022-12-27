<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property  MasterModel MasterModel
 */
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Admin/Dashboard',array('title'=>'Dashboard'));
	}

	public function Patients()
	{
		$this->load->view('Admin/Patients', array('title' => 'Patients'));
	}

	public function viewDoctors()
	{
		$this->load->view('Admin/Doctors', array('title' => "Doctors"));
	}

	public function getPatients()
	{
		$role = $this->session->userdata('user_type');
		$getPatients = $this->MasterModel->_select('employee', array('user_type' => 3, 'status' => 1), '*', false);
		if ($getPatients->totalCount > 0) {

			$div = '';
			$i = 1;
			foreach ($getPatients->data as $row) {
				$btn = '';
				if ($role == 1) {
					$btn = "<button onclick='editPatient(`" . $row->id . "`,1)' type='button' class='btn btn-sm btn-primary'><i class='fa fa-pencil'></i></button>
							<button class='btn btn-sm btn-primary' type='button' onclick='deleteUser(`" . $row->id . "`)'><i class='fa fa-trash'></i></button>";
				} else {
					$btn = "<button type='button' onclick='checkApp(`" . $row->id . "`,1)' class='btn btn-sm btn-primary'><i class='fa fa-eye'></i></button>";
				}
				$div .= "<tr>
						<td>" . $i . "</td>
						<td>" . $row->name . "</td>
						<td>" . $row->mobile . "</td>
						<td>" . $row->address . "</td>
						<td>" . $btn . "</td>
						</tr>";
				$i++;
			}

			$response['status'] = 200;
			$response['body'] = "Patients Found";
			$response['data'] = $div;
		} else {
			$div = "<tr>No Data Found</tr>";
			$response['status'] = 201;
			$response['body'] = "No Patients Found";
			$response['data'] = $div;
		}
		echo json_encode($response);
	}

	public function getDoctors()
	{
		$role = $this->session->userdata('user_type');
		$getPatients = $this->MasterModel->_select('employee', array('user_type' => 2, 'status' => 1), '*', false);
		if ($getPatients->totalCount > 0) {

			$div = '';
			$i = 1;
			foreach ($getPatients->data as $row) {
				$btn = '';
				if ($role == 1) {
					$btn = "<button onclick='editPatient(`" . $row->id . "`,2)' type='button' class='btn btn-sm btn-primary'><i class='fa fa-pencil'></i></button>
							<button class='btn btn-sm btn-primary' type='button' onclick='deleteUser(`" . $row->id . "`,2)'><i class='fa fa-trash'></i></button>";
				} else {
					$btn = "<button type='button' onclick='checkApp(`" . $row->id . "`)' class='btn btn-sm btn-primary'><i class='fa fa-eye'></i></button>";
				}
				$div .= "<tr>
						<td>" . $i . "</td>
						<td>" . $row->name . "</td>
						<td>" . $row->mobile . "</td>
						<td>" . $row->address . "</td>
						<td>" . $btn . "</td>
						</tr>";
				$i++;
			}

			$response['status'] = 200;
			$response['body'] = "Patients Found";
			$response['data'] = $div;
		} else {
			$div = "<tr>No Data Found</tr>";
			$response['status'] = 201;
			$response['body'] = "No Patients Found";
			$response['data'] = $div;
		}
		echo json_encode($response);
	}

	public function getDetails()
	{
		$id = $this->input->post('id');
		if ($id != null && $id != "") {

			$getPatientData = $this->MasterModel->_select('employee', array('id' => $id), '*', true);
			if ($getPatientData->totalCount > 0) {
				$response['status'] = 200;
				$response['body'] = "Data Found";
				$response['data'] = $getPatientData->data;
			} else {
				$response['status'] = 201;
				$response['body'] = "No Data Found";
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		}
		echo json_encode($response);
	}

	public function EdiDetails()
	{
		$id = $this->input->post('patient_id');
		if ($id != null && $id != "") {
			$data = array(
				'name' => $this->input->post('name'),
				'mobile' => $this->input->post('mobile'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
			);

			$update = $this->MasterModel->_update('employee', $data, array('id' => $id));
			if ($update) {
				$response['status'] = 200;
				$response['body'] = "Patient Updated Successfully";
			} else {
				$response['status'] = 201;
				$response['body'] = "Something Went Wrong";
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		}
		echo json_encode($response);
	}

	public function deleteUser()
	{
		$id = $this->input->post('id');
		if ($id != null && $id != "") {
			$update = $this->MasterModel->_delete('employee', array('id' => $id));
			if ($update) {
				$response['status'] = 200;
				$response['body'] = "Deleted Successfully";
			} else {
				$response['status'] = 201;
				$response['body'] = "Something Went Wrong";
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		}
		echo json_encode($response);
	}

	public function viewAppointments()
	{
		$this->load->view('Admin/Appointment', array('title' => "Appointment"));
	}


	public function getAppointments()
	{
		$role = $this->session->userdata('user_type');
		$id = $this->session->userdata('user_id');
		$where = "";
		if($role == 2){
			$where = " where d_id = ".$id." ";
		}
		$getPatients = $this->MasterModel->_rawQuery('
		select *,(select name from employee where id = a.p_id and user_type = 3) as patient_name,(select name from employee where id=a.d_id and user_type = 2) as doctor_name  from appointment a '.$where.'
		');
		if ($getPatients->totalCount > 0) {

			$div = '';
			$i = 1;
			foreach ($getPatients->data as $row) {
				$btn = '';
				if ($role == 1) {
					$btn = "<button class='btn btn-sm btn-primary' type='button' onclick='deleteApp(`" . $row->id . "`)'><i class='fa fa-trash'></i></button>";
				}
				$div .= "<tr>
						<td>" . $i . "</td>
						<td>" . $row->patient_name . "</td>
						<td>" . $row->doctor_name . "</td>
						<td>" . $row->to_date . "</td>
						<td>" . $row->to_time . "</td>
						<td>" . $row->purpose . "</td>
						<td>" . $btn . "</td>
						</tr>";
				$i++;
			}

			$response['status'] = 200;
			$response['body'] = "Patients Found";
			$response['data'] = $div;
		} else {
			$div = "<tr>No Data Found</tr>";
			$response['status'] = 201;
			$response['body'] = "No Patients Found";
			$response['data'] = $div;
		}
		echo json_encode($response);
	}


	public function deleteApp(){
		$id = $this->input->post('id');
		if ($id != null && $id != "") {
			$update = $this->MasterModel->_delete('appointment',array('id'=>$id));
			if($update){
				$response['status'] = 200;
				$response['body'] = "Deleted Successfully";
			}else{
				$response['status'] = 201;
				$response['body'] = "Something Went Wrong";
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		}
		echo json_encode($response);
	}


	public function viewHospital()
	{
		$this->load->view('Admin/Hospital', array('title' => "Hospital"));
	}


	public function getHospital()
	{
		$role = $this->session->userdata('user_type');
		$getPatients = $this->MasterModel->_rawQuery('
		select * from hospital
		');
		if ($getPatients->totalCount > 0) {

			$div = '';
			$i = 1;
			foreach ($getPatients->data as $row) {
				$btn = '';
				if ($role == 1) {
					$btn = "<button class='btn btn-sm btn-primary' type='button' onclick='deleteHos(`" . $row->id . "`)'><i class='fa fa-trash'></i></button>";
				}
				$div .= "<tr>
						<td>" . $i . "</td>
						<td>" . $row->name . "</td>
						<td>" . $row->address . "</td>
						<td>" . $row->email . "</td>
						<td>" . $row->mobile . "</td>
						<td>" . $btn . "</td>
						</tr>";
				$i++;
			}

			$response['status'] = 200;
			$response['body'] = "Patients Found";
			$response['data'] = $div;
		} else {
			$div = "<tr>No Data Found</tr>";
			$response['status'] = 201;
			$response['body'] = "No Patients Found";
			$response['data'] = $div;
		}
		echo json_encode($response);
	}


	public function deleteHos(){
		$id = $this->input->post('id');
		if ($id != null && $id != "") {
			$update = $this->MasterModel->_delete('hospital',array('id'=>$id));
			if($update){
				$response['status'] = 200;
				$response['body'] = "Deleted Successfully";
			}else{
				$response['status'] = 201;
				$response['body'] = "Something Went Wrong";
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		}
		echo json_encode($response);
	}


	public function viewAmbulance()
	{
		$this->load->view('Admin/Ambulance', array('title' => "Ambulance"));
	}


	public function getAmbulance()
	{
		$role = $this->session->userdata('user_type');
		$getPatients = $this->MasterModel->_rawQuery('
		select * from ambulance
		');
		if ($getPatients->totalCount > 0) {

			$div = '';
			$i = 1;
			foreach ($getPatients->data as $row) {
				$btn = '';
				if ($role == 1) {
					$btn = "<button class='btn btn-sm btn-primary' type='button' onclick='deleteAmb(`" . $row->id . "`)'><i class='fa fa-trash'></i></button>";
				}
				$div .= "<tr>
						<td>" . $i . "</td>
						<td>" . $row->name . "</td>
						<td>" . $row->address . "</td>
						<td>" . $row->email . "</td>
						<td>" . $row->mobile . "</td>
						<td>" . $btn . "</td>
						</tr>";
				$i++;
			}

			$response['status'] = 200;
			$response['body'] = "Patients Found";
			$response['data'] = $div;
		} else {
			$div = "<tr>No Data Found</tr>";
			$response['status'] = 201;
			$response['body'] = "No Patients Found";
			$response['data'] = $div;
		}
		echo json_encode($response);
	}


	public function deleteAmbulance(){
		$id = $this->input->post('id');
		if ($id != null && $id != "") {
			$update = $this->MasterModel->_delete('ambulance',array('id'=>$id));
			if($update){
				$response['status'] = 200;
				$response['body'] = "Deleted Successfully";
			}else{
				$response['status'] = 201;
				$response['body'] = "Something Went Wrong";
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		}
		echo json_encode($response);
	}



	public function viewPharmacy()
	{
		$this->load->view('Admin/Pharmacy', array('title' => "Pharmacy"));
	}


	public function getPharmacy()
	{
		$role = $this->session->userdata('user_type');
		$getPatients = $this->MasterModel->_rawQuery('
		select * from pharmacy
		');
		if ($getPatients->totalCount > 0) {

			$div = '';
			$i = 1;
			foreach ($getPatients->data as $row) {
				$btn = '';
				if ($role == 1) {
					$btn = "<button class='btn btn-sm btn-primary' type='button' onclick='deletePharmacy(`" . $row->id . "`)'><i class='fa fa-trash'></i></button>";
				}
				$div .= "<tr>
						<td>" . $i . "</td>
						<td>" . $row->name . "</td>
						<td>" . $row->address . "</td>
						<td>" . $row->email . "</td>
						<td>" . $row->mobile . "</td>
						<td>" . $btn . "</td>
						</tr>";
				$i++;
			}

			$response['status'] = 200;
			$response['body'] = "Patients Found";
			$response['data'] = $div;
		} else {
			$div = "<tr>No Data Found</tr>";
			$response['status'] = 201;
			$response['body'] = "No Patients Found";
			$response['data'] = $div;
		}
		echo json_encode($response);
	}


	public function deletePharmacy(){
		$id = $this->input->post('id');
		if ($id != null && $id != "") {
			$update = $this->MasterModel->_delete('pharmacy',array('id'=>$id));
			if($update){
				$response['status'] = 200;
				$response['body'] = "Deleted Successfully";
			}else{
				$response['status'] = 201;
				$response['body'] = "Something Went Wrong";
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		}
		echo json_encode($response);
	}


	public function viewBloodBank()
	{
		$this->load->view('Admin/BB', array('title' => "Blood Banks"));
	}


	public function getBloodBank()
	{
		$role = $this->session->userdata('user_type');
		$getPatients = $this->MasterModel->_rawQuery('
		select * from blood_bank
		');
		if ($getPatients->totalCount > 0) {

			$div = '';
			$i = 1;
			foreach ($getPatients->data as $row) {
				$btn = '';
				if ($role == 1) {
					$btn = "<button class='btn btn-sm btn-primary' type='button' onclick='deletebb(`" . $row->id . "`)'><i class='fa fa-trash'></i></button>";
				}
				$div .= "<tr>
						<td>" . $i . "</td>
						<td>" . $row->name . "</td>
						<td>" . $row->address . "</td>
						<td>" . $row->email . "</td>
						<td>" . $row->mobile . "</td>
						<td>" . $btn . "</td>
						</tr>";
				$i++;
			}

			$response['status'] = 200;
			$response['body'] = "Patients Found";
			$response['data'] = $div;
		} else {
			$div = "<tr>No Data Found</tr>";
			$response['status'] = 201;
			$response['body'] = "No Patients Found";
			$response['data'] = $div;
		}
		echo json_encode($response);
	}


	public function deleteBB(){
		$id = $this->input->post('id');
		if ($id != null && $id != "") {
			$update = $this->MasterModel->_delete('blood_bank',array('id'=>$id));
			if($update){
				$response['status'] = 200;
				$response['body'] = "Deleted Successfully";
			}else{
				$response['status'] = 201;
				$response['body'] = "Something Went Wrong";
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		}
		echo json_encode($response);
	}
}

?>
