<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
	public function get_all()
	{
		return $this->db->order_by('id', 'DESC')
			->get('products')
			->result();
	}

	public function get_by_id($id)
	{
		return $this->db->get_where('products', array('id' => $id))
			->row();
	}
}
