<?php
/**
 *
 */
class Admin extends CI_Controller
{

  function viewAdmin()
  {
    $this->load->view('admin/homeAdmin');
  }

  function viewUsers()
  {
    $this->load->model('User');
    $users['data'] = $this->User->fetchUsers();
    $this->load->view('admin/viewUsers',$users);
  }

  function manageUsers()
  {
    $this->load->model('User');
    $users['data'] = $this->User->fetchUsers();
    $this->load->view('admin/manageUsers',$users);
  }

  function makeAdmin($id){
    $this->load->model('AdminOp');
    $this->AdminOp->makeAdmin($id);
    redirect('Admin/viewUsers');
  }

  function deleteUser($id){
    $this->load->model('AdminOp');
    $this->AdminOp->removeUser($id);
    redirect('Admin/manageUsers');
  }

  function editUser($id){

  }

  function viewAddProject(){
    $this->load->view('admin/addProject');
  }

  function addProject(){
    $config['upload_path']='base_url()."uploads/images"';
    $config['allowed_types']='*';
    $this->load->library('upload',$config);
    $this->upload->do_upload('image');
    $image=$this->upload->data();
    //$data = array('image' => $image['image']);
    $data = array(
      'pname' => $this->input->post('pname'),
      'ptype' => $this->input->post('ptype'),
      'client' => $this->input->post('client'),
      'location' => $this->input->post('location'),
      'date' => $this->input->post('date'),
      'image' => $this->upload->data(),
    );

    $this->load->model('AdminOp');
    $this->AdminOp->addProject($data);
  }


}

 ?>
