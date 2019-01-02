<?php
class LoginModel extends CI_Model
{
	public function login_valid( $username, $password)
	{
		$q = $this->db->where(['email'=>$username,'password'=>$password])
						->get('tbl_user');
			
// print_r($this->db->last_query());
// exit();
		if ( $q->num_rows() )
		{
			return $q->row()->user_id;				
		}
		else
		{
			return FALSE;				
		}
	}

	public function num_rows()
	{
		$query = $this->db->query('SELECT * FROM user');
		return $query->num_rows();
	}

	public function get_user($value)
    {
        $q=$this->db->select("*")
                    ->where('user_id',$value)
                    ->get('tbl_user');

        return $q->row();
            // print_r($q);
        }
}