<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct() {
        parent::__construct();
		$this->load->model('Welcome_model');

    }


	public function index()
	{	
		$student_list=$this->Welcome_model->student_list();
		$data['student_list'] = $student_list;
		$data['Department_list'] = $Department_list;
		$data['college_list'] = $college_list;
		$this->load->view('index',$data);

	}
	public function add_student($id=NULL)
	{
	 $data['department_list'] = $this->Welcome_model->get_department();
	 $data['college_list'] = $this->Welcome_model->get_college();
      if($id==NULL)
	  {
		$this->load->view('insert.php',$data);
	  }
	  else
	  {
		$edit_student=$this->Welcome_model->edit_student($id);

		//print_r($edit_student);
		//exit;
        $data['row'] = $edit_student;
        $this->load->view('insert.php',$data);
	     
	  }
	 
      
	}
	public function save_student($id)
	{
		
		if($id==NULL)
		{
		
			//$data = $this->input->post('');
			$data = array(
				'student_name' => $this->input->post('student_name'),
				'register_number' => $this->input->post('register_number'),
				'college' => $this->input->post('college'),
				'department' => $this->input->post('department'),
				'dob' => $this->input->post('dob'),
				'gender'=>$this->input->post('gender'),
				'blood_group'=>$this->input->post('blood_group'),
				'mobile_number'=>$this->input->post('mobile_number'),
				'gmail'=>$this->input->post('gmail'),
				'sport'=>$this->input->post('sport'),
				'address'=>$this->input->post('address')
				);

			$last_id = $this->Welcome_model->save_student($id,$data);
             
			   $user_data = array(
				'student_id' => $last_id,
				'username' => $this->input->post('username1'),
				'password' => $this->input->post('password1'),
				'role_id' => 2,
				'firstname' => $this->input->post('student_name'),
				'email'=>$this->input->post('gmail'),
				'mobile'=>$this->input->post('mobile_number'),
				'address'=>$this->input->post('address'),
				'createdby'=>$this->session->userdata('user_id')
				);
			$save_user = $this->Welcome_model->save_user($id,$user_data);
		}
		else
		{
			$data = array(
				'student_name' => $this->input->post('student_name'),
				'register_number' => $this->input->post('register_number'),
				'college' => $this->input->post('college'),
				'department' => $this->input->post('department'),
				'dob' => $this->input->post('dob'),
				'gender'=>$this->input->post('gender'),
				'blood_group'=>$this->input->post('blood_group'),
				'mobile_number'=>$this->input->post('mobile_number'),
				'gmail'=>$this->input->post('gmail'),
				'sport'=>$this->input->post('sport'),
				'address'=>$this->input->post('address')
				);

			$last_id = $this->Welcome_model->save_student($id,$data);
             //print_r($last_id);
			   $user_data = array(
				'username' => $this->input->post('username1'),
				'password' => $this->input->post('password1'),
				'firstname' => $this->input->post('student_name'),
				'email'=>$this->input->post('gmail'),
				'mobile'=>$this->input->post('mobile_number'),
				'address'=>$this->input->post('address'),
				'createdby'=>$this->session->userdata('user_id')
				);
            //    print_r($user_data);
			//    exit;
			$save_user = $this->Welcome_model->save_user($id,$user_data);
		}
		if($save_user==1)
		{
			redirect('Welcome');
		}else{
			redirect('Welcome');
		}
	
	}
	public function delete_student($id) {
    
		$response=$this->Welcome_model->delete_student($id);
		if($response==true){
			redirect('Welcome');
		}else{
			redirect('Welcome');
		}
} 

   
}
