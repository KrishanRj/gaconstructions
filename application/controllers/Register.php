<?php
/**
 *
 */
class Register extends CI_Controller
{
  function viewRegister()
  {
    $this->load->view('register');
  }

  function registerUser(){
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('confpass', 'Password Confirmation', 'required|matches[password]');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('register');
    }
    else
    {
      $this->load->model('User');
      $response = $this->User->insertUser();
      if($response){
        $this->session->set_flashdata('msg','Registered Successfully.. Please Login');
        $this->load->view('login');
      }
      else{
        $this->session->set_flashdata('msg1','Something went wrong..');
        redirect('Register/viewRegister');
      }

      // echo "Successfully Registered";
      // die();
      //$this->load->view('formsuccess');
    }

  }

}

 ?>
