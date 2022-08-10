<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class College extends CI_Controller {
    function __construct() {
        parent::__construct();
        // $this->load->model('Welcome_model');+
        $this->load->model('College_model');

}
public function index()
	{	
		$College_list=$this->College_model->College_list();
		$data['College_list'] = $College_list;
		$this->load->view('College_index',$data);

	}



public function add_college($id=NULL)
	{
      
      if($id==NULL)
	  {
		$this->load->view('College_insert.php');
	  }
	  else
	  {
		$edit_college=$this->College_model->edit_college($id);
        $data['row'] = $edit_college;
        $this->load->view('College_insert.php',$data);
      }
    }

    public function save_college($id=NULL)
	{
		if($id==NULL)
		{
			$data = $this->input->post();

			$save_college = $this->College_model->save_college($id,$data);
		}
		else
		{
           $data = $this->input->post();

		   $save_college = $this->College_model->save_college($id,$data);
		}
		if($save_college==1)
		{
			redirect('College');
		}else{
			redirect('College');
		}
	
	}

    public function delete_college($id) {
    
		$response=$this->College_model->delete_college($id);
		if($response==true){
			redirect('College');
		}else{
			redirect('College');
		}
} 
}