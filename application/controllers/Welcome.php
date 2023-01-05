<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 * Class Welcome
 * @property MasterModel MasterModel
 */
class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel');
	}

	public function index()
	{
		$this->load->view('Home');
	}

	public function Discover()
	{

		$response['data'] = array();
		$data = $this->MasterModel->_rawQuery('select * from blogs where blog_type != 1 limit 6');
		$Bdata = array();
		if ($data->totalCount > 0) {
			foreach ($data->data as $row) {
				$row->detail = substr($row->detail, 0, 400) . '...';
				array_push($Bdata, $row);
			}
		}
		$response['data'] = $Bdata;
		$this->load->view('Discover', $response);
	}

	public function Latest()
	{
		$this->load->view('Latest');
	}

	public function Popular()
	{
		$this->load->view('Popular');
	}

	public function Blogs($id)
	{
		$arr = array();
		$data = $this->MasterModel->_select('blogs', array('id' => $id), '*', true);
		if ($data->totalCount > 0) {
			$blogs = $data->data;
			$date = $blogs->created_on;
			$date = date("F jS, Y h:i:s a", strtotime($date));
			$blogs->created_on = $date;

			$arr = $blogs;
		}
		$date = date("Y-m-d h:i:s");
		$this->db->where('id', $id);
		$this->db->set('read_count', 'read_count+1', FALSE);
		$this->db->set('last_read', $date);
		$this->db->update('blogs');
		$this->load->view('BlogPage', array('Data' => $arr));
	}

	public function getData()
	{
		$data = $this->MasterModel->_rawQuery('SELECT * FROM blogs where blog_type = 1 limit 10');
		$data3 = $this->MasterModel->_rawQuery('SELECT * FROM blogs where blog_type = 2 limit 10');
		$data2 = $this->MasterModel->_rawQuery('SELECT * FROM blogs where blog_type = 3 and last_read between date_sub(now(),INTERVAL 1 WEEK) and now() order by read_count desc');
		if ($data->totalCount > 0) {
			$response['data'] = $data->data;
		} else {
			$response['data'] = array();
		}
		if ($data2->totalCount > 0) {
			$arr = array();
			foreach ($data2->data as $row) {
				$date = $row->created_on;
				$date = date("F jS, Y h:i:s a", strtotime($date));
				$row->created_on = $date;

				$row->detail = substr($row->detail, 0, 400) . '...';
				array_push($arr, $row);
			}
			$response['data2'] = $arr;
		} else {
			$response['data2'] = array();
		}
		if ($data3->totalCount > 0) {
			$response['data3'] = $data3->data;
		} else {
			$response['data3'] = array();
		}

		$response['status'] = 200;
		$response['body'] = "Data Found";
		echo json_encode($response);
	}

	public function AboutUs()
	{
		$this->load->view('AboutUs');
	}

	public function DiscoveryBlogs($type){
		$this->load->view('DiscoveryBlogs',array('type' => $type));
	}

	public function getDiscoveryBlogs(){
		$type = $this->input->post('type');

		if($type == 1){
			$data = $this->MasterModel->_rawQuery('SELECT * FROM blogs where blog_type = 3');
			$Bdata = array();
			if ($data->totalCount > 0) {
				foreach ($data->data as $row) {
					$row->detail = substr($row->detail, 0, 400) . '...';
					array_push($Bdata, $row);
				}
				shuffle($Bdata);
				$response['data'] = $Bdata;
			} else {
				$response['data'] = array();
			}
		} else if ($type == 2){
			$data = $this->MasterModel->_rawQuery('SELECT * FROM blogs where blog_type = 3 order by id desc');
			$Bdata = array();
			if ($data->totalCount > 0) {
				foreach ($data->data as $row) {

					$date = $row->created_on;
					$date = date("F jS, Y h:i:s a", strtotime($date));
					$row->created_on = $date;

					$row->detail = substr($row->detail, 0, 400) . '...';
					array_push($Bdata, $row);
				}
				$response['data'] = $Bdata;
			} else {
				$response['data'] = array();
			}
		} else {
			$data = $this->MasterModel->_rawQuery('SELECT * FROM blogs where blog_type = 3 and read_count > 0 order by read_count desc');
			$Bdata = array();
			if ($data->totalCount > 0) {
				foreach ($data->data as $row) {
					$date = $row->created_on;
					$date = date("F jS, Y h:i:s a", strtotime($date));
					$row->created_on = $date;

					$row->detail = substr($row->detail, 0, 400) . '...';
					array_push($Bdata, $row);
				}
				$response['data'] = $Bdata;
			} else {
				$response['data'] = array();
			}
		}
		$response['status'] = 200;
		$response['body'] = "Data Found";

		echo json_encode($response);
	}
}
