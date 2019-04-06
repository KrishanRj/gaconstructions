<?php
/**
 *
 */
class AdminOp extends CI_Model
{

  function makeAdmin($id)
  {
    $this->db->query("UPDATE user SET type_id=1 WHERE id=$id");
  }

  function removeUser($id){
    $this->db->where('id',$id);
    $this->db->delete('user');
  }

  function findUserById(){
    $this->db->where('id',$id);
    $response = $this->db->get('user');
    return $response->result();
  }

  function addProject($data){
    $this->db->insert('project',$data);
  }

}

 ?>
