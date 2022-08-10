<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $user_list=$this->User_model->user_list();
        $data['user_list']=$user_list;
        $this->load->view('User_index',$data);

        // $this->load->library('session');
        // $this->session;
    }

    public function add_user($user_id=NULL)
    {
        if($user_id==NULL){
            $this->load->view('User_index.php',$data);
        }
    }

    public function check_user()
    {
       $username=$this->input->post('username');
       $password=$this->input->post('password');

       $checkuser=$this->User_model->check_user($username,$password);
        
        if($checkuser){

         
          $the_session = array('user_id'=>$checkuser->user_id,'firstname'=>$checkuser->firstname,);
          $this->session->set_userdata($the_session);
         
            redirect('Welcome');
        }
        else{
            redirect('User');
        }
    }










}


?>