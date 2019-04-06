<?php
/**
 *
 */
class Login extends CI_Controller
{

  function viewLogin()
  {
    $this->load->view('login');
  }

  function loginUser(){
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('login');
    }
    else{
      $this->load->model('User');
      $result = $this->User->loginUser();

      if($result != FALSE){
        $user_data = array(
          'user_id' => $result->id,
          'fname' => $result->fname,
          'lname' => $result->lname,
          'email' => $result->email,
          'loggedIn' => TRUE
        );
        if($result->type_id == 1){
          $this->session->set_userdata($user_data);
          $this->session->set_flashdata('wecome','Welcome Admin');
          redirect('Admin/viewAdmin');
        }
        else{
          $this->session->set_userdata($user_data);
          redirect('Customer/viewCustomer');
        }
      }
      else{
        $this->session->set_flashdata('msg1','Credentials you entered are incorrect.');
        redirect('Login/viewLogin');
      }
    }

  }

  function logoutUser(){
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('fname');
    $this->session->unset_userdata('lname');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('loggedIn');

    redirect('Home/index');
  }
}

 ?>
