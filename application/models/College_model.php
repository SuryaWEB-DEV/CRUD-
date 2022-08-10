<?php 
class College_model extends CI_Model {

    public function College_list()
    {
   
        $query=$this->db->query("SELECT * FROM fourth");
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return 0;
        }
    }

    public function save_college($id,$data)
    {
    if($id==NULL)
    {
        $query = $this->db->insert('fourth',$data);
        return 1;
       }else{
        $this->db->where('id',$id);
        $query =$this->db->update('fourth',$data);
        return 2;
       }
    }

    public function edit_college($id)
    {
        $query= $this->db->query("SELECT * FROM fourth WHERE id=$id");
        if($query->num_rows()> 0){
            return $query->row_array();
        }else{
            return 0;
        }
    }

    function delete_college($id) {
        echo($id);
        $this->db->where('id', $id);
        $this->db->delete('fourth');   
        return true;

    }
}

?>