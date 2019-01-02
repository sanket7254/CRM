<?php
class AdminModel extends CI_Model
{
/********************Admin****************************/
	public function insertadmin($insert,$insert_user)
	{
		$query = $this->db->insert('tbl_admin', $insert);
        $id = $this->db->insert_id();

        $insert_user['admin_id']=$id;
        $data = $this->db->insert('tbl_user', $insert_user);

        return $query;
    }

    public function adminlist($user_id)
    {
        $query = $this->db->select("*")
                        ->from('tbl_admin')
                        ->where('user_id',$user_id)
                        ->get();

        return $query->result();
    }

    public function update_admin($insert,$insert_user,$id)
    {
        $insert = $this->db->where('admin_id',$id)
                            ->update('tbl_admin', $insert);


        $user = $this->db->set('firstname', $insert_user['firstname'])
                        ->set('email', $insert_user['email'])
                        ->set('contact', $insert_user['contact'])
                        ->set('user_image', $insert_user['user_image'])
                        ->where('admin_id',$insert_user['admin_id'])
                        ->update('tbl_user');

        return $insert;
    }
/*****************End Admin*****************************/

/******************View Profile**************************/

    public function admin_profile_data($id)
    {
        $query = $this->db->select("*")
                        ->from('tbl_admin')
                        ->where('admin_id',$id)
                        ->get();

        return $query->row();
    }

    public function associate_profile_data($id)
    {
        $query = $this->db->select("*")
                        ->from('tbl_associate')
                        ->where('associate_id',$id)
                        ->get();

        return $query->row();
    }

/******************End View Profile*************************/

/******************Associate************************/
    public function insertassociate($insert,$insert_user)
    {
        $query = $this->db->insert('tbl_associate', $insert);
        $id = $this->db->insert_id();

        $insert_user['associate_id']=$id;
        $data = $this->db->insert('tbl_user', $insert_user);

        return $query;
    }

    public function associatelist()
    {
        $query = $this->db->select("*")
                        ->from('tbl_associate')
                        ->get();

        return $query->result();
    }

    public function update_associate($insert,$insert_user,$id)
    {
        $insert = $this->db->where('associate_id',$id)
                            ->update('tbl_associate', $insert);


        $user = $this->db->set('firstname', $insert_user['firstname'])
                        ->set('email', $insert_user['email'])
                        ->set('contact', $insert_user['contact'])
                        ->set('user_image', $insert_user['user_image'])
                        ->where('associate_id',$insert_user['associate_id'])
                        ->update('tbl_user');

        return $insert;
    }
/*****************End Associate********************/

/*********************Lead*************************/

    public function insertlead($insert)
    {
        return $this->db->insert('tbl_lead', $insert);
    }

    public function adminleadlist()
    {
        $query = $this->db->select("*")
                        ->from('tbl_lead')
                        ->get();

        return $query->result();
    }

    public function associateleadlist($asso_id)
    {
        $query = $this->db->select("*")
                        ->from('tbl_lead')
                        ->where('associate_id',$asso_id)
                        ->get();

        return $query->result();
    }

    public function lead_data($id)
    {
        $query = $this->db->select("*")
                        ->from('tbl_lead')
                        ->where('lead_id',$id)
                        ->get();

        return $query->row();
    }

/**********************End Lead*********************/

/**********************Add Lead Track*********************/

    public function insert_track($lead_details,$sales_funnel_status,$lead_id)
    {
        $this->db->set('sales_funnel_status',$sales_funnel_status)
                ->where('lead_id',$lead_id)
                ->update('tbl_lead');

        return $this->db->insert('tbl_lead_track', $lead_details);
    }

    public function lead_track_data($id)
    {
        $query = $this->db->select("*")
                        ->from('tbl_lead_track')
                        ->where('lead_id',$id)
                        ->order_by('track_id','DESC')
                        ->get();

        return $query->result();
    }

    public function gettrack($id)
    {
        $query = $this->db->select("*")
                        ->from('tbl_next_process')
                        ->where('lead_id',$id)
                        ->get();

        return $query->row();
    }

    public function insert_next_track($upcoming_lead_track_details)
    {
        return $this->db->insert('tbl_next_process', $upcoming_lead_track_details);
    }

    public function update_next_track($lead_id,$upcoming_lead_track_details)
    {
        return $this->db->where('lead_id',$lead_id)
                            ->update('tbl_next_process', $upcoming_lead_track_details);
    }

    public function next_track_data($id)
    {
        $query = $this->db->select("*")
                        ->from('tbl_next_process')
                        ->where('lead_id',$id)
                        ->get();

        return $query->row();
    }

/**********************End Lead Track*********************/

/**********************Update Password*********************/

    public function update_password($new_password,$user_id)
    {
        return $this->db->where('user_id',$user_id)
                        ->set('password', $new_password)
                        ->update('tbl_user');
    }

/**********************End Update Password*********************/

/*******************************************************/

    public function admin_lead_track_data()
    {
        $date = date('Y-m-d');
        $query = $this->db->select("*")
                        ->from('tbl_next_process')
                        ->where('DATE(upcoming_date)',$date)
                        ->join('tbl_lead', 'tbl_lead.lead_id = tbl_next_process.lead_id')
                        ->get();

        return $query->result();
    }

    public function associate_lead_track_data($id)
    {
        $date = date('Y-m-d');
        $query = $this->db->select("*")
                        ->from('tbl_next_process')
                        ->where('DATE(upcoming_date)',$date)
                        ->join('tbl_lead', 'tbl_lead.lead_id = tbl_next_process.lead_id')
                        ->where('tbl_lead.associate_id',$id)
                        ->get();

        return $query->result();
    }

    public function completed_lead_track_data()
    {
        $date = date('Y-m-d');
        $query = $this->db->select("*,tbl_lead_track.created_at as task_date,tbl_lead.created_at as lead_date")
                        ->from('tbl_lead_track')
                        ->where('DATE(tbl_lead_track.created_at)',$date)
                        ->where('tbl_lead_track.task_status',"completed")
                        ->join('tbl_lead', 'tbl_lead.lead_id = tbl_lead_track.lead_id')
                        ->get();

        return $query->result();
    }

    public function associate_completed_lead_track_data($id)
    {
        $date = date('Y-m-d');
        $query = $this->db->select("*,tbl_lead_track.created_at as task_date,tbl_lead.created_at as lead_date")
                        ->from('tbl_lead_track')
                        ->where('DATE(tbl_lead_track.created_at)',$date)
                        ->where('tbl_lead_track.task_status',"completed")
                        ->join('tbl_lead', 'tbl_lead.lead_id = tbl_lead_track.lead_id')
                        ->where('tbl_lead.associate_id',$id)
                        ->get();

        return $query->result();
    }

    public function pending_lead_track_data()
    {
        $date = date('Y-m-d');
        $query = $this->db->select("*")
                        ->from('tbl_next_process')
                        ->where('DATE(upcoming_date) <',$date)
                        ->join('tbl_lead', 'tbl_lead.lead_id = tbl_next_process.lead_id')
                        ->get();

        return $query->result();
    }

    public function associate_pending_lead_track_data($id)
    {
        $date = date('Y-m-d');
        $query = $this->db->select("*")
                        ->from('tbl_next_process')
                        ->where('DATE(upcoming_date) <',$date)
                        ->join('tbl_lead', 'tbl_lead.lead_id = tbl_next_process.lead_id')
                        ->where('tbl_next_process.associate_id',$id)
                        ->get();

        return $query->result();
    }

/****************************************************/

/*****************Check Functions******************/

    public function findemail($email)
    {
        $admin_email=$this->db->select('*')
                            ->from ("tbl_admin")
                            ->where('email', $email)
                            ->get();
        $admin_chek_email=$admin_email->result();

        $associate_email=$this->db->select('*')
                            ->from ("tbl_associate")
                            ->where('email', $email)
                            ->get();
        $associate_chek_email=$associate_email->result();

        if(!empty($admin_chek_email) || !empty($associate_chek_email))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function findcontact($contact)
    {
        $admin_contact=$this->db->select('*')
                            ->from ("tbl_admin")
                            ->where('contact', $contact)
                            ->get();
        $admin_chek_contact=$admin_contact->result();

        $associate_contact=$this->db->select('*')
                            ->from ("tbl_associate")
                            ->where('contact', $contact)
                            ->get();
        $associate_chek_contact=$associate_contact->result();

        if(!empty($admin_chek_contact) || !empty($associate_chek_contact))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function leadfindemail($email)
    {
        $lead_email=$this->db->select('*')
                            ->from ("tbl_lead")
                            ->where('email', $email)
                            ->get();
        return $lead_email->result();
    }

    public function leadfindcontact($contact)
    {
        $lead_contact=$this->db->select('*')
                            ->from ("tbl_lead")
                            ->where('contact', $contact)
                            ->get();
        return $lead_contact->result();
    }

    public function check_password($old_password,$user_id)
    {
        $find_password = $this->db->where(['password'=>$old_password])
                                    ->where('user_id',$user_id)
                                    ->get('tbl_user');

        return $find_password->num_rows();
    }

/*****************End Check Functions****************/
}