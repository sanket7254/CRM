<?php
class CountModel extends CI_Model
{
	public function awareness_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Awareness")
							->get();
		return $query->num_rows();
	}

	public function interest_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Interest")
							->get();
		return $query->num_rows();
	}

	public function evaluation_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Evaluation")
							->get();
		return $query->num_rows();
	}

	public function decision_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Decision")
							->get();
		return $query->num_rows();
	}

	public function purchase_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Purchase")
							->get();
		return $query->num_rows();
	}

	public function reevaluation_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Re-Evaluation")
							->get();
		return $query->num_rows();
	}

	public function repurchase_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Re-Purchase")
							->get();
		return $query->num_rows();
	}

	public function awareness_names_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Awareness")
							->get();
		return $query->result();
	}

	public function interest_names_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Interest")
							->get();
		return $query->result();
	}

	public function evaluation_names_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Evaluation")
							->get();
		return $query->result();
	}
	public function decision_names_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Decision")
							->get();
		return $query->result();
	}

	public function purchase_names_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Purchase")
							->get();
		return $query->result();
	}

	public function re_evaluation_names_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Re-Evaluation")
							->get();
		return $query->result();
	}

	public function re_purchase_names_num_rows()
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('sales_funnel_status',"Re-Purchase")
							->get();
		return $query->result();
	}

/*******************************Associate*********************************/

	public function asso_awareness_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Awareness")
							->get();
		return $query->num_rows();
	}

	public function asso_interest_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Interest")
							->get();
		return $query->num_rows();
	}

	public function asso_evaluation_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Evaluation")
							->get();
		return $query->num_rows();
	}

	public function asso_decision_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Decision")
							->get();
		return $query->num_rows();
	}

	public function asso_purchase_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Purchase")
							->get();
		return $query->num_rows();
	}

	public function asso_reevaluation_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Re-Evaluation")
							->get();
		return $query->num_rows();
	}

	public function asso_repurchase_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Re-Purchase")
							->get();
		return $query->num_rows();
	}

	public function asso_awareness_names_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Awareness")
							->get();
		return $query->result();
	}

	public function asso_interest_names_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Interest")
							->get();
		return $query->result();
	}

	public function asso_evaluation_names_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Evaluation")
							->get();
		return $query->result();
	}
	public function asso_decision_names_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Decision")
							->get();
		return $query->result();
	}

	public function asso_purchase_names_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Purchase")
							->get();
		return $query->result();
	}

	public function asso_re_evaluation_names_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Re-Evaluation")
							->get();
		return $query->result();
	}

	public function asso_re_purchase_names_num_rows($asso_id)
	{
		$query = $this->db
							->select("*")
							->from('tbl_lead')
							->where('associate_id',$asso_id)
							->where('sales_funnel_status',"Re-Purchase")
							->get();
		return $query->result();
	}



}