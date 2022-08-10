<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Department_model');

}
public function index()
	{	
		$Department_list=$this->Department_model->Department_list();
		$data['Department_list'] = $Department_list;
		$this->load->view('Department_index',$data);

	}



public function add_department($id=NULL)
	{
      
      if($id==NULL)
	  {
		$this->load->view('Department_insert.php');
	  }
	  else
	  {
		$edit_department=$this->Department_model->edit_department($id);
        $data['row'] = $edit_department;
        $this->load->view('Department_insert.php',$data);
      }
    }

    public function save_department($id=NULL)
	{
		if($id==NULL)
		{
			$data = $this->input->post();

			$save_Department = $this->Department_model->save_department($id,$data);
		}
		else
		{
           $data = $this->input->post();

		   $save_department = $this->Department_model->save_department($id,$data);
		}
		if($save_department==1)
		{
			redirect('Department');
		}else{
			redirect('Department');
		}
	
	}

    public function delete_department($id) {
    
		$response=$this->Department_model->delete_department($id);
		if($response==true){
			redirect('Department');
		}else{
			redirect('Department');
		}
} 
}