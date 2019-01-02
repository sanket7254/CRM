<?php
 
class Export_model extends CI_Model
{
    public function employeeList()
    {
        $this->db->select(array('id', 'first_name', 'last_name', 'email', 'dob', 'contact_no'));
        			->from('import as e');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>