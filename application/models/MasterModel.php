<?php

/**
 *
 */
class MasterModel extends CI_Model
{


	/**
	 * @param $sql query which you want to execute
	 * @param bool $bindParam default false or array
	 * @return stdClass witch properties of totalCount and data of query result
	 */
	function _rawQuery($sql, $bindParam = FALSE,$type=1)
	{
		$resultObject = new stdClass();
		try {
			$query = $this->db->query($sql, $bindParam);
			if($type!=1){
				$result = $query->result_array();
			}else{
				$result = $query->result();
			}

			if (count($result) > 0) {
				$resultObject->totalCount = count($result);
				$resultObject->data = $result;
			} else {
				$resultObject->totalCount = 0;
				$resultObject->data = array();
			}
			$resultObject->last_query = $this->db->last_query();
		} catch (Exception $ex) {
			$resultObject->totalCount = 0;
			$resultObject->data = array();
		}
		return $resultObject;
	}

	/**
	 * @param $table String table name
	 * @param $data array values
	 * @return stdClass object of status and last insert id
	 */
	function _insert($table, $data)
	{
		$resultObject = new stdClass();
		try {
			$this->db->trans_start();
			$this->db->insert($table, $data);
			$resultObject->inserted_id = $this->db->insert_id();
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$resultObject->status = FALSE;
			} else {
				$this->db->trans_commit();
				$resultObject->status = TRUE;
			}
			$this->db->trans_complete();
			$resultObject->last_query = $this->db->last_query();
		} catch (Exception $ex) {
			$resultObject->status = FALSE;
			$this->db->trans_rollback();
		}
		return $resultObject;
	}

	/**
	 * @param $table String the table name
	 * @param $data  array you want to update
	 * @param $where array where update record
	 * @return stdClass object with property of status
	 */
	function _update($table, $data, $where)
	{
		$resultObject = new stdClass();
		try {
			$this->db->trans_start();
			$this->db->set($data)->where($where)->update($table);
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$resultObject->status = FALSE;
			} else {
				$this->db->trans_commit();
				$resultObject->status = TRUE;
			}
			$this->db->trans_complete();
			$resultObject->last_query = $this->db->last_query();
		} catch (Exception $ex) {
			$resultObject->status = FALSE;
			$this->db->trans_rollback();
		}
		return $resultObject;
	}

	/**
	 * @param $table String the table name
	 * @param $data  array you want to update including where column name
	 * @param $key String where column name
	 * @return stdClass object with property of status
	 */
	function _updateBatch($table, $data, $key)
	{
		$resultObject = new stdClass();
		try {
			$this->db->trans_start();
			$this->db->update_batch($table, $data, $key);
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$resultObject->status = FALSE;
			} else {
				$this->db->trans_commit();
				$resultObject->status = TRUE;
			}
			$this->db->trans_complete();
			$resultObject->last_query = $this->db->last_query();
		} catch (Exception $ex) {
			$resultObject->status = FALSE;
			$this->db->trans_rollback();
		}
		return $resultObject;
	}


	/**
	 * @param $table String the table name
	 * @param $where array where delete record
	 * @return stdClass object with property of status
	 */
	function _delete($table, $where)
	{
		$resultObject = new stdClass();
		try {
			$this->db->trans_start();
			$this->db->where($where)->delete($table);
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$resultObject->status = FALSE;
			} else {
				$this->db->trans_commit();
				$resultObject->status = TRUE;
			}
			$this->db->trans_complete();
			$resultObject->last_query = $this->db->last_query();
		} catch (Exception $ex) {
			$resultObject->status = FALSE;
			$this->db->trans_rollback();
		}
		return $resultObject;
	}


	/**
	 * @param $tableName String table name
	 * @param $where array of condition
	 * @param $select array|String of columns
	 * @param $type true for single row and false for multiple rows
	 * @param null $group_by group by value
	 * @return stdClass object with property of totalCount and data
	 */
	function _select($tableName, $where, $select = "*", $type = true, $group_by = null, $where_in = null,$order_by=null)
	{

		$resultObject = new stdClass();
		try {
			if ($type) {
				$this->db->select($select)->where($where);
				if ($where_in != null) {
					$this->db->where($where_in);
				}
				if ($group_by != null) {
					$this->db->group_by($group_by);
				}
				if($order_by !=null){
					$this->db->order_by($order_by);
				}
				$result = $this->db->get($tableName)->row();

				if ($result != null) {
					$resultObject->totalCount = 1;
					$resultObject->data = $result;
				} else {
					$resultObject->totalCount = 0;
					$resultObject->data = $result;
				}
			} else {
				$this->db->select($select)->where($where);
				if ($where_in != null) {
					$this->db->where($where_in);
				}
				if ($group_by != null) {
					$this->db->group_by($group_by);
				}
				if($order_by !=null){
					$this->db->order_by($order_by);
				}
				$result = $this->db->get($tableName)->result();

				$resultObject->totalCount = count($result);
				if (count($result) > 0) {
					$resultObject->data = $result;
				} else {
					$resultObject->data = array();
				}
			}
			$resultObject->last_query = $this->db->last_query();
		} catch (Exception $e) {
			$resultObject->totalCount = 0;
			$resultObject->data = null;
		}
		return $resultObject;
	}

	public function get_row_data($select = null, $where = null, $table_name = null)
	{
		$this->db->select($select)
				->where($where)
				->from($table_name);
		$query = $this->db->get()->row();
		return $query;
	}

	public function group_by_data($group_by = null, $where = null, $table_name = null)
	{
		$this->db->select("*")
				->where($where)
				->group_by($group_by)
				->from($table_name);
		$query = $this->db->get()->result();
		return $query;
	}

	public function order_by_data($select = "*", $where = null, $table_name = null, $order_by = null, $key = 'ASC', $where_in = null, $limit = null,$type=true)
	{
		$this->db->select($select);
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by($order_by, $key);
		if ($where_in != null) {
			$this->db->where($where_in);
		}
		if ($limit != null) {
			$this->db->limit($limit);
		}
		$this->db->from($table_name);
		if($type != true)
		{
			$query = $this->db->get()->row();
		}else
		{
			$query = $this->db->get()->result();
		}
		return $query;
	}


	public function get_all_data($where = null, $table_name = null)
	{
		$this->db->select("*")
				->where($where)
				->from($table_name);
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_all_table_data($table_name = null)
	{
		$this->db->select("*")
				->from($table_name);
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_count($where, $table_name)
	{
		$this->db->select('*')
				->where($where)
				->from($table_name);
		$query = $this->db->count_all_results();
		return $query;
	}


	public function get_all_data_custom_where($table_name = null, $Where = null, $customWhere = null)
	{
		if ($customWhere != null) {
			$this->db->where($customWhere);
		}
		$this->db->select("*")
				->where($Where)
				->from($table_name);
		$query = $this->db->get()->result();
		return $query;
	}


	public function get_select_all_data($select = "*", $table_name = null)
	{
		$this->db->select($select)
				->from($table_name);
		$query = $this->db->get()->result();
		return $query;
	}

	function 	upload_file($upload_path)
	{

		if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] != '4') {
			$files = $_FILES;
			if (is_array($_FILES['userfile']['name'])) {
				$count = count($_FILES['userfile']['name']); // count element
			} else {
				$count = 1;
			}
			$_FILES['userfile']['name'] = $files['userfile']['name'];
			$_FILES['userfile']['type'] = $files['userfile']['type'];
			$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'];
			$_FILES['userfile']['error'] = $files['userfile']['error'];
			$_FILES['userfile']['size'] = $files['userfile']['size'];
			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = '*';
			$config['max_size'] = '500000';    //limit 10000=1 mb
			$config['remove_spaces'] = true;
			$config['overwrite'] = false;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$fileName = preg_replace('/\s+/', '_', str_replace(' ', '_', $_FILES['userfile']['name']));
			$data = array('upload_data' => $this->upload->data());
			if (empty($fileName)) {
				$response['status'] = 203;
				$response['body'] = "file is empty";
				return false;
			} else {
				$file = $this->upload->do_upload('userfile');
				if (!$file) {
					$error = array('upload_error' => $this->upload->display_errors());
					$response['status'] = 204;
					$response['body'] = $files['userfile']['name'] . ' ' . $error['upload_error'];
					return $response;
				} else {
					$response['status'] = 200;
					$response['body'] = $fileName;
					return $response;
				}
			}
		} else {
			$response['status'] = 201;
			$response['body'] = "";
			return $response;
		}
	}

}

?>


