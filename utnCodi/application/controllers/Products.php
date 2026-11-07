<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Product_model');
		$this->load->helper(array('product', 'text', 'url'));
	}

	public function index()
	{
		$data['products'] = $this->Product_model->get_all();

		$this->load->view('templates/header', array('title' => 'Inicio'));
		$this->load->view('products/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id = NULL)
	{
		if ($id === NULL || !ctype_digit((string) $id)) {
			show_404();
		}

		$data['product'] = $this->Product_model->get_by_id((int) $id);
		if ($data['product'] === NULL) {
			show_404();
		}

		$this->load->view('templates/header', array(
			'title' => $data['product']->name,
		));
		$this->load->view('products/detail', $data);
		$this->load->view('templates/footer');
	}
}
