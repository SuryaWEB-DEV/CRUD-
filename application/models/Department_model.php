<?php 
class Department_model extends CI_Model {

    public function Department_list()
    {
   
        $query=$this->db->query("SELECT * FROM third");
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return 0;
        }
    }

    public function save_department($id,$data)
    {
    if($id==NULL)
    {
        $query = $this->db->insert('third',$data);
        return 1;
       }else{
        $this->db->where('id',$id);
        $query =$this->db->update('third',$data);
        return 2;
       }
    }

    public function edit_department($id)
    {
        $query= $this->db->query("SELECT * FROM third WHERE id=$id");
        if($query->num_rows()> 0){
            return $query->row_array();
        }else{
            return 0;
        }
    }

    function delete_department($id) {
        echo($id);
        $this->db->where('id', $id);
        $this->db->delete('third');   
        return true;

    }
}

?>