<?php
/**
 *
 */
class User extends CI_Model
{

  function insertUser()
  {
    $data = array(
      'fname' => $this->input->post('fname',TRUE),
      'lname' => $this->input->post('lname',TRUE),
      'email' => $this->input->post('email',TRUE),
      'password' => sha1($this->input->post('password',TRUE)),
    );
    return $this->db->insert('user',$data);
    //print_r($data);
  }

  function loginUser(){
    $email = $this->input->post('email');
    $password = sha1($this->input->post('password'));
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    // print_r($sql);
    // exit();
    $respond = $this->db->query($sql);

    if($respond->num_rows()==1){
      return $respond->row(0);
    }
    else{
      return FALSE;
    }
  }

  function fetchUsers(){
    $query = $this->db->get('user');
    return $query->result();
  }

}

 ?>
