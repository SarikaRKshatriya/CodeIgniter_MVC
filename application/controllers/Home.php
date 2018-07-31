<!--This is Home controller php -->


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
public function __construct() {
parent::__construct();
// load array,form,security and url helpers
    $this->load->helper('array','form', 'url','security');
// load form_validation and security library
    $this->load->library('form_validation');
}

public function index()
	{
	$this->load->view('layout/header');
	$this->load->view('layout/menu');
	$this->load->view('index');
	$this->load->view('layout/footer');
	}
public function Askvet()
	{
		$this->load->model('Fishcreek_model');
		$res = $this->Fishcreek_model->get_question();
		$data['questionsData'] = $res;
        
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('Askvet', $data);
		$this->load->view('layout/footer');
	}
public function contact()
    {
        $this->load->model('Fishcreek_model');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('comments', 'Comments', 'trim|required|min_length[5]|max_length[100]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout/header');
            $this->load->view('layout/menu');
            $this->load->view("contact");
        }
        else {
                $data['non_xss'] = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'comments' => $this->input->post('comments')
                );
                $dataclean['xss_data']=$this->security->xss_clean($data['non_xss']);
                $res = $this->Fishcreek_model->set_Contact($dataclean['xss_data']);
                if($res){
                    $output['outputMsg'] = 'Inserted';
                    $this->load->view('layout/header');
                    $this->load->view('layout/menu');
                    $this->load->view("contact", $output);
                    }
           		 }
       		 }
    
    public function services()
	{
		$this->load->model('Fishcreek_model');
		$res = $this->Fishcreek_model->get_services();
		$data['serviceData'] = $res;

		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('services', $data);
		$this->load->view('layout/footer');
	}
	public function subscribe()
    {
         $this->load->helper('security');
        $this->load->model('Fishcreek_model');
        $setService = $this->Fishcreek_model->select_Service();
        $setPet = $this->Fishcreek_model->select_Pet();
        $data['setService'] = $setService;
        $data['setPet'] = $setPet;
           
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[5]|max_length[40]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|regex_match[/^[1-9]{3}-[0-9]{3}-[0-9]{4}$/]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|regex_match[/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z]{8,16}$/]');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout/header');
            $this->load->view('layout/menu');
            $this->load->view('subscribe', $data);
            $this->load->view('layout/footer');

        }
        else {
        $cData['nonxss'] = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address')
                );

        $idData = array(
                    'service_id' => $this->input->post('service_id'),
                    'pet_id' => $this->input->post('pet_id'),
        );
        $cdataclean['xss']=$this->security->xss_clean($cData['nonxss']);
               
        $result = $this->Fishcreek_model->set_Subscribe($cdataclean['xss'], $idData);                
        $data['outputMsg'] = $result;
        if($result){
                   
                    $this->load->view('layout/header');
                    $this->load->view('layout/menu');
                    $this->load->view("subscribe", $data);
                    }
        //$this->load->view('layout/header');
        //$this->load->view('layout/menu');
        //$this->load->view('subscribe', $data);
        //$this->load->view('layout/footer');

            }
        }
}
