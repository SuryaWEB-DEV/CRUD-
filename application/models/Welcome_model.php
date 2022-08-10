<?php 
class Welcome_model extends CI_Model {

    public function student_list()
    {
        $query=$this->db->query("SELECT s.*,t.department_name,f.college_name FROM `second` s INNER JOIN third t ON s.department=t.id INNER JOIN fourth f on s.college=f.id");
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return 0;
        }
    }
    public function save_student($id,$data)
    {
       if($id==NULL)
       {
      
        $query = $this->db->insert('second',$data);
        $lastId = $this->db->insert_id(); 
        return $lastId;
       }else{
        $this->db->where('id',$id);
        $query =$this->db->update('second',$data);
        return 2;
       }
    }

    public function save_user($id,$user_data)
    {
        if($id==NULL)
        {
            $query=$this->db->insert('user',$user_data);
            // print_r('user',$user_data);
            // exit;
            return 1;
        }else{
            $this->db->where('student_id',$id);
            $query=$this->db->update('user',$user_data);
            // print_r($query);
            // exit;
            return 2;
        }
    }

    public function edit_student($id)
    {
        $query= $this->db->query("SELECT * FROM second INNER JOIN user ON second.id = user.student_id
        WHERE student_id = $id");

        //print_r($query);
        //exit;
        if($query->num_rows()> 0){
            return $query->row_array();
        }else{
            return 0;
        }
    }

    function delete_student($id) {
        echo($id);
        $this->db->where('id', $id);
        $this->db->delete('second');
        return true;

    }

    function get_department(){
        $query= $this->db->query("SELECT * FROM third ");

        //print_r($query);
        //exit;
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return 0;
        }

    }

    function get_college(){
        $query= $this->db->query("SELECT * FROM fourth ");

        //print_r($query);
        //exit;
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return 0;
        }

    }
}
?>