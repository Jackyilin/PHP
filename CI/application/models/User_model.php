
<?php
class User_model extends CI_Model
{

    public function add($name){
        $this->db->insert('user',array(
            'name'=>$name
        ));
        return $this->db->affected_rows();
    }

    public function user_list(){
        $query=$this->db->get('user');
        
        return $query->result();
    }

    public function del_user($id){
        $this->db->delete('user', array('id' => $id));
        return $this->db->affected_rows();
    }

    public function get_name_by_id($id){
        $query=$this->db->get_where('user',array('id'=>$id));
        return $query->row();
    }

    public function update($id,$name){
		$this->db->where('id', $id);
        $this->db->update('user',array(
            "name" => $name,
        ));
        return $this->db->affected_rows();
    }
}

?>