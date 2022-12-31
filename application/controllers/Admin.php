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
		$this->load->view('Admin/Dashboard', array('title' => 'Dashboard'));
	}

	public function login(){
		$this->load->view('Admin/login');
	}


	public function checkLogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if($email != null && $email != '' && $password != null && $password != ''){
			$checkLogin = $this->MasterModel->_select('employee',array('email' => $email,'password' => $password),'*',true);
			if($checkLogin->totalCount > 0){
				$this->session->user_session = $checkLogin->data;
				$response['status'] = 200;
				$response['body'] = 'Login Successfull';
			}else{
				$response['status'] = 201;
				$response['body'] = "Incorrect Email or Password";
			}
		}else{
			$response['status'] = 201;
			$response['body'] = 'Required Parameter Missing';
		} echo json_encode($response);
	}


	public function getBlogs()
	{

		$getBlogs = $this->MasterModel->_select('blogs', array('status' => 1), '*', false);
		if ($getBlogs->totalCount > 0) {

			$div = '';
			$i = 1;
			foreach ($getBlogs->data as $row) {
				$btn = '';

				$btn = "<button onclick='editBlogs(`" . $row->id . "`)' type='button' class='btn btn-sm btn-github'><i class='fa fa-pencil'></i></button>
							<button class='btn btn-sm btn-github' type='button' onclick='deleteBlog(`" . $row->id . "`)'><i class='fa fa-trash'></i></button>";
				$div .= "<tr>
						<td>" . $i . "</td>
						<td>" . $row->name . "</td>
						<td>" . $row->detail . "</td>
						<td>" . date('F jS, Y', strtotime($row->created_on)) . "</td>
						<td>" . $btn . "</td>
						</tr>";
				$i++;
			}

			$response['status'] = 200;
			$response['body'] = "Blogs Found";
			$response['data'] = $div;
		} else {
			$div = "<tr>No Data Found</tr>";
			$response['status'] = 201;
			$response['body'] = "No Patients Found";
			$response['data'] = $div;
		}
		echo json_encode($response);
	}


	public function getBlogsDetails()
	{
		$id = $this->input->post('id');
		if ($id != null && $id != "") {

			$getPatientData = $this->MasterModel->_select('blogs', array('id' => $id), '*', true);
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

	public function EditBlogs()
	{
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$id = $this->input->post('update_id');
		if ($name != null && $name != '' && $description != null && $description != '') {

			$imageFile = $this->MasterModel->upload_file('uploads');


			if ($id != null && $id != "") {
				$data = array(
					'name' => $name,
					'detail' => $description,
					'updated_on' => date('Y-m-d H:i:s')
				);

				if($imageFile['status'] === 200) {
					$data['image'] = $imageFile['body'];
				}

				$update = $this->MasterModel->_update('blogs', $data, array('id' => $id));
				if ($update) {
					$response['status'] = 200;
					$response['body'] = "Blogs Updated Successfully";
				} else {
					$response['status'] = 201;
					$response['body'] = "Something Went Wrong";
				}
			} else {
				$data = array(
					'name' => $name,
					'detail' => $description,
					'created_by' => $this->session->user_session->id
				);

				if($imageFile['status'] === 200) {
					$data['image'] = $imageFile['body'];
				}

				$update = $this->MasterModel->_insert('blogs', $data);
				if ($update) {
					$response['status'] = 200;
					$response['body'] = "Blogs Inserted Successfully";
				} else {
					$response['status'] = 201;
					$response['body'] = "Something Went Wrong";
				}
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		}
		echo json_encode($response);
	}

	public function deleteBlog()
	{
		$id = $this->input->post('id');
		if ($id != null && $id != "") {
			$update = $this->MasterModel->_delete('blogs', array('id' => $id));
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

	public function ChangePassword(){
		$this->load->view('Admin/changepass',array('title' => 'Change Password'));
	}

	public function updatePassword(){
		$id = $this->session->user_session->id;
		$newPass = $this->input->post('newPass');

		if($newPass != null && $newPass != ''){

			$update = $this->MasterModel->_update('employee',array('password' => $newPass),array('id' => $id));
			if($update->status){
				$response['status'] = 200;
				$response['body'] = "Password Changed Successfully";
			}else{
				$response['status'] = 201;
				$response['body'] = "Something Went Wrong";
			}
		}else{
			$response['status'] = 201;
			$response['body'] = "Required Parameter Missing";
		} echo json_encode($response);
	}
}

?>
