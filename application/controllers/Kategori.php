<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('MY');
		$this->load->model('artikel');
		$this->load->model('Kategori_model');
	}

	public function index() 
	{
		$data['categories'] = $this->Kategori_model->get_all_categories();
		$this->load->view('kategori/kategori', $data);
	}

	public function create() 
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
			'cat_name',
			'Nama Kategori',
			'required|is_unique[categories.cat_name]',
			array(
				'required' => 'Silahkan isi %s terlebih dahulu.',
				'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada.'
			));
				$this->form_validation->set_rules(
			'cat_description',
			'Deskripsi',
			'required|is_unique[categories.cat_description]',
			array(
				'required' => 'Silahkan isi %s terlebih dahulu.',
				'is_unique' => 'Judul <strong>' . $this->input->post('cat_description') . '</strong> sudah ada.'
			));



		if($this->form_validation->run() === FALSE){
			$this->load->view('kategori/tambah');
		} else {
			$this->Kategori_model->create_category();
			redirect('kategori');
		

	    }
	}

	public function artikel($id) 
	{
		$data['page_title'] = $this->Kategori_model->get_category_by_id($id)->cat_name;
		$data['artikel'] = $this->artikel->get_artikel_by_category($id);
		$this->load->view('blog/blog', $data);
	}

	public function edit($id = NULL)
	{

		$data['page_title'] = 'Edit Kategori';
		$data['category'] = $this->Kategori_model->get_category_by_id($id);
	
		if ( empty($id) || !$data['category'] ) redirect('blog');

	    $this->load->helper('form');
	    $this->load->library('form_validation');

		$this->form_validation->set_rules('cat_name', 'Nama Kategori', 'required',
			array('required' => 'Silahkan isi %s terlebih dahulu.'));
	    $this->form_validation->set_rules('cat_description', 'Deskripsi', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('kategori/edit', $data);
	    } else {

	    	$post_data = array(
	    	    'cat_name' => $this->input->post('cat_name'),
	    	    'cat_description' => $this->input->post('cat_description'),
	    	);

	        if ($this->Kategori_model->update_category($post_data, $id)) {
		        $this->load->view('blog/blog_success', $data);
	        } else {
		        $this->load->view('blog/blog_failed', $data);
	        }
	    }
	}


	public function delete($id)
	{
		$this->Kategori_model->delete_category($id);
		$this->load->view('blog/blog_success');
	} 
}
