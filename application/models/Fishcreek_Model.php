<!--This is fishcreek Model php -->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Fishcreek_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	} 
	//get data from service table
	function get_services() {
		$this->load->database();
		$fetch_serviceDetails = "SELECT * FROM service";
		$result = $this->db->query($fetch_serviceDetails);
		$this->db->close();
		return $result;
	}
	//get data from question table
	function get_question() {
		$this->load->database();
		$fetch_questionDetails = "SELECT * FROM question";
		$result = $this->db->query($fetch_questionDetails);
		$this->db->close();
		return $result;
	}
	//insert data into contact table
	function set_Contact($data){
		$this->load->database();
		$result = $this->db->insert('contact', $data);
		$this->db->close();
		return $result;
	}
	//get service table data for dropdown
	public function select_Service(){
		$this->load->database();
		$sql_service = "SELECT * FROM service";	
		$result = $this->db->query($sql_service);
		$this->db->close();
		return $result;
	}
	//get pet table data for dropdown
	public function select_Pet(){
		$this->load->database();
		$sql_pet = "SELECT * FROM pet";
		$result = $this->db->query($sql_pet);
		$this->db->close();
		return $result;
	}
	//select data from client table
	public function select_Client(){
		$this->load->database();
		$sql_client = "SELECT * FROM client";
		$result = $this->db->query($sql_client);
		$this->db->close();
		return $result;
	}
	//insert row to client table if email already does not exist
	public function set_Subscribe($data, $idData) {
        
        $this->load->database(); 
        $email = $this->input->post('email');
        $sql_checkEmail = "select clientid from client where email='$email'";
		$result = $this->db->query($sql_checkEmail);
		if ($result->num_rows() > 0)  
		{
			//client already exist
			foreach($result->result() as $row)
			{
			 $clientid=$row->clientid;//get clientid
			}
		}
		else
			{
				$new_client_insert_data = array(
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'phone' => $this->input->post('phone'),			
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
									
				);
				 $this->load->helper('security');
				 $clientdataclean=$this->security->xss_clean($new_client_insert_data);
				$insert = $this->db->insert('client', $clientdataclean);
				//echo "client added";
				$email = $this->input->post('email');
        		$sql_getEmail = "select clientid from client where email='$email'";
				$res = $this->db->query($sql_getEmail);
				foreach($res->result() as $row)
				{
			 		$clientid=$row->clientid;//get clientid
			 
				}
			}

			$serviceid =  $this->input->post('service_id');//get serviceid
			$petid =  $this->input->post('pet_id');//get petid
			$date=date("Y-m-d");//get current date
		
			$sql_insertInSubscribe= "INSERT INTO subscription(clientid,serviceid,petid,date) VALUES ('$clientid','$serviceid','$petid','$date')";
			$this->db->query($sql_insertInSubscribe);
			$Msg = "subscription table-record Added";
			
 		return $Msg;
		$this->db->close();  
    }
   
}
