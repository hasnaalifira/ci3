<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('artikel');
		$data['artikel'] = $this->artikel->get_artikels();
		$this->load->view('blog', $data);
	}

	public function view($id)
	{
		$this->load->model('artikel');
		$data['view'] = $this->artikel->get_single($id);
		$this->load->view('blog_view', $data);
	}


}