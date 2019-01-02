<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{
	public function login()
	{
		$this->load->view('frontend/login');
	}

	public function login_check()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if ( $this->form_validation->run() )
		{//if validation passess

			$email = $this->input->post('username');
			$password= $this->input->post('password');			

			$this->load->model('LoginModel');

			$login_id = $this->LoginModel->login_valid( $email, $password);
			if ( $login_id )
			{
				$this->load->model('LoginModel');
				$user_row=$this->LoginModel->get_user($login_id);
				/***********Sessions created*************/
				$this->session->set_userdata('user_id', $login_id);
				$this->session->set_userdata('username', $user_row->username);
				$this->session->set_userdata('adminid', $user_row->admin_id);
				$this->session->set_userdata('associateid', $user_row->associate_id);
				$this->session->set_userdata('user_image', $user_row->user_image);
				/***********End sessions created*************/
				$welcome="Welcome to CRM.";
                $this->session->set_flashdata('welcome',$welcome);
                $this->session->set_flashdata('status','btn-success');
				redirect(base_url('dashboard'));
			}
			else
			{
				$this->session->set_flashdata('login_failed','Invalid Username or Password.');
				redirect(base_url('login'));
			}
		}
		else
		{
			$this->load->view('frontend/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		redirect(base_url('login'));
	}      
}
