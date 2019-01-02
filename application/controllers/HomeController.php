<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{
/*************Load Dashboard******************/
	public function dashboard()
	{
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->admin_profile_data($id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);

			$data['next_track_data'] = $this->AdminModel->admin_lead_track_data();
			$data['completed_track_data'] = $this->AdminModel->completed_lead_track_data();
			$data['pending_track_data'] = $this->AdminModel->pending_lead_track_data();
			/*
			echo "<pre>";
			print_r($data['completed_track_data']);
			exit();*/
			$this->load->view('frontend/dashboard',$data);
			$this->load->view('frontend/include/footer');
		}
		else
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->associate_profile_data($asso_id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$data['next_track_data'] = $this->AdminModel->associate_lead_track_data($asso_id);
			$data['completed_track_data'] = $this->AdminModel->associate_completed_lead_track_data($asso_id);
			$data['pending_track_data'] = $this->AdminModel->associate_pending_lead_track_data($asso_id);
			/*$count = count($data['next_track_data']);
			for ($i=0; $i < $count; $i++)
			{ 
				$id[$i] = $data['next_track_data'][$i]->lead_id;
				$data[$i] = $this->AdminModel->lead_data($id[$i]);
			}*/
			$this->load->view('frontend/dashboard',$data);
			$this->load->view('frontend/include/footer');
		}
		
	}
/*************End Dashboard******************/


/*****************Admin**********************/
	public function adminsignup()
	{
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->admin_profile_data($id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/adminsignup');
			$this->load->view('frontend/include/footer');
		}
		else
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->associate_profile_data($asso_id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/adminsignup');
			$this->load->view('frontend/include/footer');
		}
	}

	public function admin_signup()
	{
		$config=[
               		'upload_path'=>'./uploads/',
                	'allowed_types'=>'jpg|gif|png|jpeg',
                ];
        $this->load->library('upload');
        $this->upload->initialize($config);
        $this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if(true)
        {
        	$firstname=$this->input->post("firstname");
		    $lastname=$this->input->post("lastname");
		    $email=$this->input->post("email");
		    $password=$this->input->post("password");
		    $address=$this->input->post("address");
		    $city=$this->input->post("city");
		    $state=$this->input->post("state");
		    $country=$this->input->post("country");
		    $optradio=$this->input->post("optradio");
		    $birth_date=$this->input->post("birth_date");
		    $contact=$this->input->post("contact");
		    $caption=$this->input->post("caption");
		    $user_id=$this->session->userdata("user_id");
		    $created_at=date('Y-m-d h:m:s');

			if($this->upload->do_upload('userfile'))
			{
				$data=$this->upload->data();
		        $image_path=$data["raw_name"].$data['file_ext'];

		        $insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'password'=>$password,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'user_id'=>$user_id,'caption'=>$caption,'created_at'=>$created_at];

		        $insert_user=['firstname'=>$firstname,'email'=>$email,'password'=>$password,'user_image'=>$image_path,'contact'=>$contact];

		        $this->load->model('AdminModel');

		        if($this->AdminModel->insertadmin($insert,$insert_user))
		        {
		            $success="Add Admin Successful.";
		            $this->session->set_flashdata('success',$success);
		            $this->session->set_flashdata('status','btn-success');
		            redirect(base_url('alladmin'));
		       	}
		        else
		        {
		            redirect(base_url('adminsignup'));                         
		        }
			}//$this->upload->do_upload('userfile')
			else
			{
				$image_path = "demo.jpg";

		        $insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'password'=>$password,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'user_id'=>$user_id,'caption'=>$caption];

		        $insert_user=['firstname'=>$firstname,'email'=>$email,'password'=>$password,'user_image'=>$image_path,'contact'=>$contact];

		        $this->load->model('AdminModel');

		        if($this->AdminModel->insertadmin($insert,$insert_user))
		        {
		            $success="Add Admin Successful.";
		            $this->session->set_flashdata('success',$success);
		            $this->session->set_flashdata('status','btn-success');
		            redirect(base_url('alladmin'));
		       	}
		        else
		        {
		            redirect(base_url('adminsignup'));                         
		        }
			}//withoutimage
        }//$this->form_validation->run()
        else
        {
        	return redirect(base_url('adminsignup'));
        }
	}//admin_signup

	public function alladmin()
	{
		$id = $this->session->userdata('adminid');
		$this->load->model('AdminModel');
		$profile_data = $this->AdminModel->admin_profile_data($id);
		$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
		$this->load->model('AdminModel');
		$user_id=$this->session->userdata("user_id");
		$admin = $this->AdminModel->adminlist($user_id);
		$this->load->view('frontend/alladmin',['admin'=>$admin]);
		$this->load->view('frontend/include/footer');
	}
/*****************End Admin**********************/

	public function addcustomer()
	{
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->admin_profile_data($id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/customersignup');
			$this->load->view('frontend/include/footer');
		}
		else
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->associate_profile_data($asso_id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/customersignup');
			$this->load->view('frontend/include/footer');
		}
	}

	public function lead_signup()
	{
		$config=[
               		'upload_path'=>'./uploads/',
                	'allowed_types'=>'jpg|gif|png|jpeg',
                ];
        $this->load->library('upload');
        $this->upload->initialize($config);
        $this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if(true)
        {
        	$firstname=$this->input->post("firstname");
		    $lastname=$this->input->post("lastname");
		    $email=$this->input->post("email");
		    $address=$this->input->post("address");
		    $city=$this->input->post("city");
		    $state=$this->input->post("state");
		    $country=$this->input->post("country");
		    $optradio=$this->input->post("optradio");
		    $birth_date=$this->input->post("birth_date");
		    $contact=$this->input->post("contact");
		    $caption=$this->input->post("caption");
		    $user_id=$this->session->userdata("user_id");
		    $created_at=date('Y-m-d h:m:s');

		    $image_path = "demo.jpg";
		    $sales_funnel_status = "Awareness";

		    $id=$this->session->userdata('adminid');
			$asso_id=$this->session->userdata('associateid');
			if(!($id == NULL))
			{
		    	$insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'admin_id'=>$id,'sales_funnel_status'=>$sales_funnel_status,'created_at'=>$created_at];
		    }
		    else
		    {
		    	$insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'associate_id'=>$asso_id,'sales_funnel_status'=>$sales_funnel_status,'created_at'=>$created_at];
		    }

		        $this->load->model('AdminModel');

		        if($this->AdminModel->insertlead($insert))
		        {
		            $lead_create="Lead cretaed successfully.";
		            $this->session->set_flashdata('lead_create',$lead_create);
		            $this->session->set_flashdata('status','btn-success');
		            redirect(base_url('allcustomer'));
		       	}
		        else
		        {
		            redirect(base_url('addcustomer'));                         
		        }
			}//withoutimage
			else
			{
				return redirect(base_url('allcustomer'));
			}
    }//$this->form_validation->run()

	public function allcustomer()
	{
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->admin_profile_data($id);
			$lead_data = $this->AdminModel->adminleadlist();
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/allcustomer',['lead_data'=>$lead_data]);
			$this->load->view('frontend/include/footer');
		}
		else
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->associate_profile_data($asso_id);
			$lead_data = $this->AdminModel->associateleadlist($asso_id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/allcustomer',['lead_data'=>$lead_data]);
			$this->load->view('frontend/include/footer');
		}
	}

	public function lead_details($lead_id)
	{
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->admin_profile_data($id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$data['lead_data'] = $this->AdminModel->lead_data($lead_id);
			$data['track_data'] = $this->AdminModel->lead_track_data($lead_id);
			$data['next_track_data'] = $this->AdminModel->next_track_data($lead_id);
			$this->load->view('frontend/lead',$data);
			$this->load->view('frontend/include/footer');
		}
		else
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->associate_profile_data($asso_id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$data['lead_data'] = $this->AdminModel->lead_data($lead_id);
			$data['track_data'] = $this->AdminModel->lead_track_data($lead_id);
			$data['next_track_data'] = $this->AdminModel->next_track_data($lead_id);
			$this->load->view('frontend/lead',$data);
			$this->load->view('frontend/include/footer');
		}
	}
/****************Associate******************/
	public function allassociate()
	{
		$id = $this->session->userdata('adminid');
		$this->load->model('AdminModel');
		$profile_data = $this->AdminModel->admin_profile_data($id);
		$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
		$associate = $this->AdminModel->associatelist();
		$this->load->view('frontend/allassociate',['associate'=>$associate]);
		$this->load->view('frontend/include/footer');
	}

	public function addassociate()
	{
		$id = $this->session->userdata('adminid');
		$this->load->model('AdminModel');
		$profile_data = $this->AdminModel->admin_profile_data($id);
		$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
		$this->load->view('frontend/addassociate');
		$this->load->view('frontend/include/footer');
	}

	public function associate_signup()
	{
		$config=[
               		'upload_path'=>'./uploads/associate/',
                	'allowed_types'=>'jpg|gif|png|jpeg',
                ];
        $this->load->library('upload');
        $this->upload->initialize($config);
        $this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if(true)
        {
        	$firstname=$this->input->post("firstname");
		    $lastname=$this->input->post("lastname");
		    $email=$this->input->post("email");
		    $password=$this->input->post("password");
		    $address=$this->input->post("address");
		    $city=$this->input->post("city");
		    $state=$this->input->post("state");
		    $country=$this->input->post("country");
		    $optradio=$this->input->post("optradio");
		    $birth_date=$this->input->post("birth_date");
		    $contact=$this->input->post("contact");
		    $caption=$this->input->post("caption");
		    $admin_id=$this->session->userdata("adminid");
		    $created_at=date('Y-m-d h:m:s');

			if($this->upload->do_upload('userfile'))
			{
				$data=$this->upload->data();
		        $image_path=$data["raw_name"].$data['file_ext'];

		        $insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'password'=>$password,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'admin_id'=>$admin_id,'caption'=>$caption,'created_at'=>$created_at];

		        $insert_user=['firstname'=>$firstname,'email'=>$email,'password'=>$password,'user_image'=>$image_path,'contact'=>$contact];

		        $this->load->model('AdminModel');

		        if($this->AdminModel->insertassociate($insert,$insert_user))
		        {
		            $success="Add Associate Successful.";
		            $this->session->set_flashdata('success',$success);
		            $this->session->set_flashdata('status','btn-success');
		            redirect(base_url('allassociate'));
		       	}
		        else
		        {
		            redirect(base_url('addassociate'));                         
		        }
			}//$this->upload->do_upload('userfile')
			else
			{
				$image_path = "demo.jpg";

		        $insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'password'=>$password,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'admin_id'=>$admin_id,'caption'=>$caption];

		        $insert_user=['firstname'=>$firstname,'email'=>$email,'password'=>$password,'user_image'=>$image_path,'contact'=>$contact];

		        $this->load->model('AdminModel');

		        if($this->AdminModel->insertassociate($insert,$insert_user))
		        {
		            $success="Add Associate Successful.";
		            $this->session->set_flashdata('success',$success);
		            $this->session->set_flashdata('status','btn-success');
		            redirect(base_url('allassociate'));
		       	}
		        else
		        {
		            redirect(base_url('addassociate'));                         
		        }
			}//withoutimage
        }//$this->form_validation->run()
        else
        {
        	return redirect(base_url('addassociate'));
        }
	}

/****************End Associate******************/

/****************My Profile******************/

	public function myprofile()
	{
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{
			$id = $this->session->userdata('adminid');
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->admin_profile_data($id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
			$this->load->view('frontend/include/footer');
		}
		else if($asso_id)
		{
			$id = $this->session->userdata('associateid');
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->associate_profile_data($id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
			$this->load->view('frontend/include/footer');
		}
		else
		{
			$warning="Your session expired please login again.";
            $this->session->set_flashdata('warning',$warning);
            $this->session->set_flashdata('status','btn-success');
			redirect(base_url('login'));
		}

	}

/***************Edit Profile*******************/
	public function edit_profile()
	{
		//Find the user
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
/*********************Update Admin**********************/
		if(!($id == NULL))
		{
			$config=[
               		'upload_path'=>'./uploads/',
                	'allowed_types'=>'jpg|gif|png|jpeg',
                ];
	        $this->load->library('upload');
	        $this->upload->initialize($config);
	        $this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
	        if(true)
	        {
	        	$firstname=$this->input->post("firstname");
			    $lastname=$this->input->post("lastname");
			    $email=$this->input->post("email");
			    $address=$this->input->post("address");
			    $city=$this->input->post("city");
			    $state=$this->input->post("state");
			    $country=$this->input->post("country");
			    $optradio=$this->input->post("optradio");
			    $birth_date=$this->input->post("birth_date");
			    $contact=$this->input->post("contact");
			    $caption=$this->input->post("caption");
			    $admin_id=$this->session->userdata("adminid");
			    $updated_at=date('Y-m-d h:m:s');

				if($this->upload->do_upload('userfile'))
				{
					$old_image_path = "uploads/".$this->input->post("user_image");
					if(file_exists($old_image_path))
					{
						unlink($old_image_path);
					}

					$data=$this->upload->data();
			        $image_path=$data["raw_name"].$data['file_ext'];

			        $insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'admin_id'=>$admin_id,'caption'=>$caption,'updated_at'=>$updated_at];
			        

			        $insert_user=['firstname'=>$firstname,'email'=>$email,'user_image'=>$image_path,'admin_id'=>$admin_id,'contact'=>$contact];

			        $this->load->model('AdminModel');
			        if($this->AdminModel->update_admin($insert,$insert_user,$id))
			        {
			            $edited="Profile Edited Successfully.";
			            $this->session->set_flashdata('edited',$edited);
			            $this->session->set_flashdata('status','btn-success');
			            $id = $this->session->userdata('adminid');
						$this->load->model('AdminModel');
						$profile_data = $this->AdminModel->admin_profile_data($id);
						$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
						$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
						$this->load->view('frontend/include/footer');
			       	}//insertassociate
			        else
			        {
			        	$id = $this->session->userdata('adminid');
						$this->load->model('AdminModel');
						$profile_data = $this->AdminModel->admin_profile_data($id);
						$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
						$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
						$this->load->view('frontend/include/footer');
			        }//else
				}//$this->upload->do_upload('userfile')
				else
				{
					$image_path = $this->input->post("user_image");

			        $insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'admin_id'=>$admin_id,'caption'=>$caption];

			        $insert_user=['firstname'=>$firstname,'email'=>$email,'user_image'=>$image_path,'admin_id'=>$admin_id,'contact'=>$contact];

			        $this->load->model('AdminModel');

			        if($this->AdminModel->update_admin($insert,$insert_user,$id))
			        {
			            $edited="Profile Edited Successfully.";
			            $this->session->set_flashdata('edited',$edited);
			            $id = $this->session->userdata('adminid');
						$this->load->model('AdminModel');
						$profile_data = $this->AdminModel->admin_profile_data($id);
						$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
						$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
						$this->load->view('frontend/include/footer');
			       	}//insertassociate
			        else
			        {
			        	$id = $this->session->userdata('adminid');
						$this->load->model('AdminModel');
						$profile_data = $this->AdminModel->admin_profile_data($id);
						$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
						$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
						$this->load->view('frontend/include/footer');
			        }//else
				}//withoutimage
	        }//true
	        else
	        {
	        	$id = $this->session->userdata('adminid');
				$this->load->model('AdminModel');
				$profile_data = $this->AdminModel->associate_profile_data($id);
				$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
				$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
				$this->load->view('frontend/include/footer');
	        }
		}//adminID
/*******************End Update Admin**************************/
		else if($asso_id)
		{
			$config=[
               		'upload_path'=>'./uploads/',
                	'allowed_types'=>'jpg|gif|png|jpeg',
                ];
	        $this->load->library('upload');
	        $this->upload->initialize($config);
	        $this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
	        if(true)
	        {
	        	$firstname=$this->input->post("firstname");
			    $lastname=$this->input->post("lastname");
			    $email=$this->input->post("email");			    
			    $address=$this->input->post("address");
			    $city=$this->input->post("city");
			    $state=$this->input->post("state");
			    $country=$this->input->post("country");
			    $optradio=$this->input->post("optradio");
			    $birth_date=$this->input->post("birth_date");
			    $contact=$this->input->post("contact");
			    $caption=$this->input->post("caption");
			    $admin_id=$this->session->userdata("adminid");
			    $asso_id=$this->session->userdata("associateid");
			    $updated_at=date('Y-m-d h:m:s');

				if($this->upload->do_upload('userfile'))
				{
					$old_image_path = "uploads/".$this->input->post("user_image");
					if(file_exists($old_image_path))
					{
						unlink($old_image_path);
					}
					
					$data=$this->upload->data();
			        $image_path=$data["raw_name"].$data['file_ext'];

			        $insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'caption'=>$caption,'updated_at'=>$updated_at];
			        

			        $insert_user=['firstname'=>$firstname,'email'=>$email,'user_image'=>$image_path,'associate_id'=>$asso_id,'contact'=>$contact];
			        

			        $this->load->model('AdminModel');
			        if($this->AdminModel->update_associate($insert,$insert_user,$asso_id))
			        {
			            $edited="Profile Edited Successfully.";
			            $this->session->set_flashdata('edited',$edited);
			            $this->session->set_flashdata('status','btn-success');
			            $id = $this->session->userdata('associateid');
						$this->load->model('AdminModel');
						$profile_data = $this->AdminModel->associate_profile_data($id);
						$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
						$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
						$this->load->view('frontend/include/footer');
			       	}//insertassociate
			        else
			        {
			        	$id = $this->session->userdata('associateid');
						$this->load->model('AdminModel');
						$profile_data = $this->AdminModel->associate_profile_data($id);
						$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
						$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
						$this->load->view('frontend/include/footer');
			        }//else
				}//$this->upload->do_upload('userfile')
				else
				{
					$image_path = $this->input->post("user_image");

			        $insert=['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'gender'=>$optradio,'birth_date'=>$birth_date,'contact'=>$contact,'user_image'=>$image_path,'caption'=>$caption,'updated_at'=>$updated_at];

			        $insert_user=['firstname'=>$firstname,'email'=>$email,'user_image'=>$image_path,'associate_id'=>$asso_id,'contact'=>$contact];

			        $this->load->model('AdminModel');

			        if($this->AdminModel->update_associate($insert,$insert_user,$asso_id))
			        {
			            $edited="Profile Edited Successfully.";
			            $this->session->set_flashdata('edited',$edited);
			            $id = $this->session->userdata('associateid');
						$this->load->model('AdminModel');
						$profile_data = $this->AdminModel->associate_profile_data($id);
						$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
						$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
						$this->load->view('frontend/include/footer');
			       	}//insertassociate
			        else
			        {
			        	$id = $this->session->userdata('associateid');
						$this->load->model('AdminModel');
						$profile_data = $this->AdminModel->associate_profile_data($id);
						$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
						$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
						$this->load->view('frontend/include/footer');
			        }//else
				}//withoutimage
	        }//true
	        else
	        {
	        	$id = $this->session->userdata('associateid');
				$this->load->model('AdminModel');
				$profile_data = $this->AdminModel->associate_profile_data($id);
				$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
				$this->load->view('frontend/myprofile',['profile_data'=>$profile_data]);
				$this->load->view('frontend/include/footer');
	        }
		}//AssociateID
		else
		{
			$warning="Your session expired please login again.";
            $this->session->set_flashdata('warning',$warning);
            $this->session->set_flashdata('status','btn-success');
			redirect(base_url('login'));
		}
	}



/****************End My Profile******************/

	public function addtrack($lead_id)
	{
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->admin_profile_data($id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$data['lead_data'] = $this->AdminModel->lead_data($lead_id);
			$data['next_track_data'] = $this->AdminModel->next_track_data($lead_id);/*
			echo "<pre>";
			print_r($data);
			exit();*/
			$this->load->view('frontend/addtrack',$data);
			$this->load->view('frontend/include/footer');
		}
		else
		{
			$this->load->model('AdminModel');
			$profile_data = $this->AdminModel->associate_profile_data($asso_id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$data['lead_data'] = $this->AdminModel->lead_data($lead_id);
			$data['next_track_data'] = $this->AdminModel->next_track_data($lead_id);/*
			echo "<pre>";
			print_r($data);
			exit();*/
			$this->load->view('frontend/addtrack',$data);
			$this->load->view('frontend/include/footer');
		}
	}

	public function addingtrack()
	{

	    $id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{			
			$status=$this->input->post("TrackStatus");
		    $Priority=$this->input->post("Priority");
		    $additional_massage=$this->input->post("additional_massage");
		    $lead_id=$this->input->post("lead_id");
		    $admin_id=$this->session->userdata('adminid');
		    $task_status="completed";
		    $date=date('Y-m-d H-r-s');

		    $lead_details = ['lead_id'=>$lead_id,'admin_id'=>$admin_id,'status'=>$status,'priority'=>$Priority,'description'=>$additional_massage,'created_at'=>$date,'task_status'=>$task_status];

		    $nextstatus=$this->input->post("nextfollowup");
		    $nextpriority=$this->input->post("nextpriority");
		    $followup=$this->input->post("followup");
		    $lead_id=$this->input->post("lead_id");
		    $admin_id=$this->session->userdata('adminid');
		    $next_date=date('Y-m-d H:i:s',strtotime($this->input->post("upcoming_date")));

		    if($nextstatus == "Call or Enquiry")
		    {
		    	$sales_funnel_status = "Awareness";
		    }
		    elseif($nextstatus == "Appointment")
		    {
		    	$sales_funnel_status = "Interest";
		    }
		    elseif($nextstatus == "Business Proposal")
		    {
		    	$sales_funnel_status = "Evaluation";
		    }
		    elseif($nextstatus == "Confirmation")
		    {
		    	$sales_funnel_status = "Decision";
		    }
		    elseif($nextstatus == "Dispatch")
		    {
		    	$sales_funnel_status = "Purchase";
		    }
		    elseif($nextstatus == "Re-purchase Evaluation")
		    {
		    	$sales_funnel_status = "Re-Evaluation";
		    }
		    elseif($nextstatus == "Re-purchase Decision")
		    {
		    	$sales_funnel_status = "Re-Purchase";
		    }
		    elseif($nextstatus == "Cancelled")
		    {
		    	$sales_funnel_status = "Cancelled";
		    }

		    $upcoming_lead_track_details = ['lead_id'=>$lead_id,'admin_id'=>$admin_id,'status'=>$nextstatus,'priority'=>$nextpriority,'description'=>$followup,'upcoming_date'=>$next_date];

		    $lead_id=$this->input->post("lead_id");
		    if($this->AdminModel->insert_track($lead_details,$sales_funnel_status,$lead_id))
		    {
		    	$lead_id=$this->input->post("lead_id");
		    	$next_track_details = $this->AdminModel->gettrack($lead_id);
		    	if(!($next_track_details == NULL))
		    	{
		    		$update = $this->AdminModel->update_next_track($lead_id,$upcoming_lead_track_details);
		    		if($update)
		    		{
		    			redirect('HomeController/re_direct/'.$lead_id);
		    		}		    		
		    	}
		    	else
		    	{
		    		$insert = $this->AdminModel->insert_next_track($upcoming_lead_track_details);
		    		if($insert)
		    		{
		    			redirect('HomeController/re_direct/'.$lead_id);
		    		}
		    	}	    
		    }
		}
		else
		{			
			$status=$this->input->post("TrackStatus");
		    $Priority=$this->input->post("Priority");
		    $additional_massage=$this->input->post("additional_massage");
		    $lead_id=$this->input->post("lead_id");
		    $associate_id=$this->session->userdata('associateid');
		    $task_status="completed";
		    $date=date('Y-m-d H:i:s');

		    $lead_details = ['lead_id'=>$lead_id,'associate_id'=>$associate_id,'status'=>$status,'priority'=>$Priority,'description'=>$additional_massage,'created_at'=>$date,'task_status'=>$task_status];

		    $nextstatus=$this->input->post("nextfollowup");
		    $nextpriority=$this->input->post("nextpriority");
		    $followup=$this->input->post("followup");
		    $lead_id=$this->input->post("lead_id");
		    $associate_id=$this->session->userdata('associateid');
		    $next_date=date('Y-m-d H:i:s',strtotime($this->input->post("upcoming_date")));

		    if($nextstatus == "Call or Enquiry")
		    {
		    	$sales_funnel_status = "Awareness";
		    }
		    elseif($nextstatus == "Appointment")
		    {
		    	$sales_funnel_status = "Interest";
		    }
		    elseif($nextstatus == "Business Proposal")
		    {
		    	$sales_funnel_status = "Evaluation";
		    }
		    elseif($nextstatus == "Confirmation")
		    {
		    	$sales_funnel_status = "Decision";
		    }
		    elseif($nextstatus == "Dispatch")
		    {
		    	$sales_funnel_status = "Purchase";
		    }
		    elseif($nextstatus == "Re-purchase Evaluation")
		    {
		    	$sales_funnel_status = "Re-Evaluation";
		    }
		    elseif($nextstatus == "Re-purchase Decision")
		    {
		    	$sales_funnel_status = "Re-Purchase";
		    }
		    elseif($nextstatus == "Cancelled")
		    {
		    	$sales_funnel_status = "Cancelled";
		    }


		    $upcoming_lead_track_details = ['lead_id'=>$lead_id,'associate_id'=>$associate_id,'status'=>$nextstatus,'priority'=>$nextpriority,'description'=>$followup,'upcoming_date'=>$next_date];

		    if($this->AdminModel->insert_track($lead_details,$sales_funnel_status,$lead_id))
		    {
		    	$lead_id=$this->input->post("lead_id");
		    	$next_track_details = $this->AdminModel->gettrack($lead_id);
		    	if(!($next_track_details == NULL))
		    	{
		    		$update = $this->AdminModel->update_next_track($lead_id,$upcoming_lead_track_details);
		    		if($update)
		    		{
		    			redirect('HomeController/re_direct/'.$lead_id);
		    		}		    		
		    	}
		    	else
		    	{
		    		$insert = $this->AdminModel->insert_next_track($upcoming_lead_track_details);
		    		if($insert)
		    		{
		    			redirect('HomeController/re_direct/'.$lead_id);
		    		}
		    	}	    	
		    }
		}
	}

	public function re_direct($lead_id)
	{
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{
		    $admin_id=$this->session->userdata('adminid');
		    $this->load->model('AdminModel');
			$profile_data = $this->AdminModel->admin_profile_data($id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$data['lead_data'] = $this->AdminModel->lead_data($lead_id);
			$data['track_data'] = $this->AdminModel->lead_track_data($lead_id);
			$data['next_track_data'] = $this->AdminModel->next_track_data($lead_id);
			$this->load->view('frontend/lead',$data);
			$this->load->view('frontend/include/footer');
		}
		else
		{
		    $associate_id=$this->session->userdata('associateid');
		    $this->load->model('AdminModel');
			$profile_data = $this->AdminModel->associate_profile_data($asso_id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$data['lead_data'] = $this->AdminModel->lead_data($lead_id);
			$data['track_data'] = $this->AdminModel->lead_track_data($lead_id);
			$data['next_track_data'] = $this->AdminModel->next_track_data($lead_id);
			$this->load->view('frontend/lead',$data);
			$this->load->view('frontend/include/footer');
		}
	}

/****************Change Password******************/

	public function change_pass()
	{
		$id=$this->session->userdata('adminid');
		$asso_id=$this->session->userdata('associateid');
		if(!($id == NULL))
		{
		    $admin_id=$this->session->userdata('adminid');
		    $this->load->model('AdminModel');
			$profile_data = $this->AdminModel->admin_profile_data($id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/change_password');
			$this->load->view('frontend/include/footer');
		}
		else
		{
		    $associate_id=$this->session->userdata('associateid');
		    $this->load->model('AdminModel');
			$profile_data = $this->AdminModel->associate_profile_data($asso_id);
			$this->load->view('frontend/include/header',['profile_data'=>$profile_data]);
			$this->load->view('frontend/change_password');
			$this->load->view('frontend/include/footer');
		}
	}

	public function confirm_change_password()
	{
		$new_password = $this->input->post("confirm_password");
		$user_id=$this->session->userdata('user_id');
		if($this->AdminModel->update_password($new_password,$user_id))
	    {
	    	$this->session->sess_destroy();
	    	return redirect('login');
	    }
	}


/****************End Change Password******************/

/****************Send Email*********************/

	public function send_email()
	{
		$this->load->library('email');

		$this->email->from('sanket.chidrawar@mavericksindia.com', 'Your Name');
		$this->email->to('sanketchidrawar@gmail.com.com');
		$this->email->cc('p.ahire04@gmail.com');
		//$this->email->bcc('them@their-example.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();
		/*$this->email->cc('another@another-example.com');
		$this->email->bcc('them@their-example.com');*/

		/*$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');*/

		/*$username = "p.ahire04@gmail.com";
		$hash = "1b0549f5fed8db23be5119ad8c4f651b2b49fb3296af9496ab742160982a9e30";

		$associate_id=$this->session->userdata('associateid');
		$this->load->model('AdminModel');
		$profile_data = $this->AdminModel->associate_profile_data($associate_id);

		// Config variables. Consult http://api.textlocal.in/docs for more info.
		$test = "0";
		$name=$profile_data->first_name ." ". $details->profile_data;
		// Data for text message. This is the text message data.
		$sender = "TXTLCL"; // This is who the message appears to be from.
		$numbers = 8208301116; // A single number or a comma-seperated list of numbers
		$message = "Dear,".$name."\r\nRs."."You have follow up task with XYZ customer on XYZ time"."\r\nLogin to know more.\r\nwww.mavericks-crm/home.com";
		// 612 chars or less
		// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.textlocal.in/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch); // This is the result from the API
		curl_close($ch);

		if($result)
		{
			echo json_encode($data['json']="Success.");
		}
		else
		{
			echo json_encode($data['json']="Failed.");
		}*/
	}

/****************End Send Email*********************/

/*******************Download File*********************/

	public function download_file()
    {
        $this->load->helper('download');
        $pth = file_get_contents(base_url()."assets/admin/sample_excel_format.xlsx");
        $nme = "sample_excel_format.xlsx";
        force_download($nme, $pth); 
    }

/********************End Download File*****************/


/****************Check Functions******************/

	public function cheq_number()
	{
		$number=$_POST['number'];
        $this->load->model('AdminModel');
        if(!empty($number))
        {
        	$find_number=$this->AdminModel->findcontact($number);
        	if($find_number)
	        {
	        	echo json_encode($data['json']="Contact Number Already Exist.");
	        }
	        else
	        {
	        	echo json_encode($data['json']="Success.");
	        }
        }
        else
        {
        	echo json_encode($data['json']="");
        }
	}

	public function cheq_email()
	{
		$email=$_POST['email'];
        $this->load->model('AdminModel');
        if(!empty($email))
        {
        	$find_email=$this->AdminModel->findemail($email);
        	if($find_email)
	        {
	        	echo json_encode($data['json']="Email Already Exist.");
	        }
	        else
	        {
	        	echo json_encode($data['json']="Success.");
	        }
        }
        else
        {
        	echo json_encode($data['json']="");
        }
	}

	public function lead_cheq_number()
	{
		$number=$_POST['number'];
        $this->load->model('AdminModel');
        if(!empty($number))
        {
        	$find_number=$this->AdminModel->leadfindcontact($number);
        	if($find_number)
	        {
	        	echo json_encode($data['json']="Contact Number Already Exist.");
	        }
	        else
	        {
	        	echo json_encode($data['json']="Success.");
	        }
        }
        else
        {
        	echo json_encode($data['json']="");
        }
	}

	public function lead_cheq_email()
	{
		$email=$_POST['email'];
        $this->load->model('AdminModel');
        if(!empty($email))
        {
        	$find_email=$this->AdminModel->leadfindemail($email);
        	if($find_email)
	        {
	        	echo json_encode($data['json']="Email Already Exist.");
	        }
	        else
	        {
	        	echo json_encode($data['json']="Success.");
	        }
        }
        else
        {
        	echo json_encode($data['json']="");
        }
	}

	public function check_password()
	{
		$old_password=$_POST['old_password'];
		$user_id=$this->session->userdata('user_id');
        $this->load->model('AdminModel');
        if(!empty($old_password))
        {
        	$find_password=$this->AdminModel->check_password($old_password,$user_id);
        	if($find_password == 0)
	        {
	        	echo json_encode($data['json']="Please enter correct password.");
	        }
	        else
	        {
	        	echo json_encode($data['json']="Success.");
	        }
        }
        else
        {
        	echo json_encode($data['json']="");
        }
	}

/****************End Check Functions**************/

	public function __construct()
	{
		parent::__construct();

		$this->load->model('AdminModel');
		$this->load->helper('date');

        if($this->session->userdata('user_id') == NULL || $this->session->userdata('user_id') == 0)
        {
            return redirect(base_url('login'));
        }
	}
}
