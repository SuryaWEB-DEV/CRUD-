<?php
class User_model extends CI_Model{
     

    public function user_list()
    {
        $query=$this->db->query("SELECT * FROM user");
        // print_r($query);
        // exit;
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return 0;
        }
    }

   public function check_user($username,$password)
   {
   
    $query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    // print_r("SELECT * FROM user WHERE username='$username' AND password='$password'");
    //  exit;

    if($query->num_rows()==1)
    {
        return $query->row();
    }else{
        return 0;
    }
         
    }
   }




?>