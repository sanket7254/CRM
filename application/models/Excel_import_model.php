<?php
class Excel_import_model extends CI_Model
{
 function select()
 {
  $this->db->order_by('lead_id', 'DESC');
  $query = $this->db->get('tbl_lead');
  return $query;
 }

 function insert($data)
 {
   return $this->db->insert_batch('tbl_lead', $data);
 }
}