<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->helper('MY');
		$this->load->model('artikel');
		$this->load->model('Kategori_model');

	}

	public function index()
	{
		$data['artikel'] = $this->artikel->get_all_artikel();
		$this->load->view('blog/blog', $data);
	}

		public function lihat_detail($kategori, $id)
	{
		echo $kategori;
		echo '<br>';
		echo $id;
	}
 
	public function view($id)
	{
		$data['view'] = $this->artikel->get_single($id);
		$this->load->view('blog/blog_view', $data);
	}

	public function tambah()
	{
	    $this->load->helper('form');
		$this->load->library('form_validation');

		$data['categories'] = $this->Kategori_model->generate_cat_dropdown();

	    $this->form_validation->set_rules('input_judul', 'Judul', 'required|is_unique[blog.judul]',
			array(
				'required' 		=> 'Silahkan isi %s terlebih dahulu.',
				'is_unique' 	=> 'Judul <strong>' .$this->input->post('input_judul'). '</strong> sudah ada.'
			));

		$this->form_validation->set_rules('input_content', 'Konten', 'required|min_length[8]',
			array(
				'required' 		=> 'Silahkan isi %s terlebih dahulu.',
				'min_length' 	=> '%s kurang panjang.',
			));

		$this->form_validation->set_rules('cat_description', 'Deskripsi', 'required|is_unique[categories.cat_name]',
			array(
				'required' 		=> 'Silahkan pilih %s terlebih dahulu.',
				'is_unique' 	=> 'Deskripsi <strong>' .$this->input->post('cat_name'). '</strong> sudah ada.'
			));

		$this->form_validation->set_rules('image', 'Gambar', 'required|is_unique[blog.image]',
			array(
				'required' 		=> 'Silahkan masukkan %s terlebih dahulu.',
				'is_unique' 	=> 'Gambar <strong>' .$this->input->post('image'). '</strong> sudah ada.'
			));

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('blog/tambah', $data);

	    } else {

    		if ( isset($_FILES['image']) && $_FILES['image']['size'] > 0 )
    		{
    			$config['upload_path']          = './img/';
    	        $config['allowed_types']        = 'gif|jpg|png';
    	        $config['max_size']             = 100;
    	        $config['max_width']            = 1024;
    	        $config['max_height']           = 768;


    	        $this->load->library('upload', $config);

    	        if ( ! $this->upload->do_upload('image'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();

    	        	$image = '';

    	            $this->load->view('blog/tambah', $data);
    	        } else {
    	            $img_data = $this->upload->data();
    	            $image = $img_data['file_name'];
    	        	
    	        }
    		} else {
    			$image = '';
    		}
	    	$slug = url_title($this->input->post('input_judul'), 'dash', TRUE);

	    	$post_data = array(
				'jenis_cat' => $this->input->post('cat_id'),
	    	    'judul' => $this->input->post('input_judul'),
	    	    'content' => $this->input->post('input_content'),
	    	    'image' => $image,
	    	);

	    	if( empty($data['upload_error']) ) {
		        $this->artikel->create_artikel($post_data);
		        $this->load->view('blog/blog_success', $data);
	    	}
	    }

		
	}


	public function edit($id = NULL)
	{
		$data['artikel'] = $this->artikel->get_artikel_by_id($id);
		if ( empty($id) || !$data['artikel'] ) redirect('blog');
		$data['categories'] = $this->Kategori_model->generate_cat_dropdown();
		$old_image = $data['artikel']->image;
	    $this->load->helper('form');
	    $this->load->library('form_validation');


	    $this->form_validation->set_rules('input_judul', 'Judul', 'required|is_unique[blog.judul]',
			array(
				'required' 		=> 'Silahkan isi %s terlebih dahulu.',
				'is_unique' 	=> 'Judul <strong>' .$this->input->post('input_judul'). '</strong> sudah ada.'
			));

		$this->form_validation->set_rules('input_content', 'Konten', 'required|is_unique[blog.content]',
			array(
				'required' 		=> 'Silahkan isi %s terlebih dahulu.',
				'is_unique' 	=> 'Konten <strong>' .$this->input->post('content'). '</strong> sudah ada.'
			));

		$this->form_validation->set_rules('cat_description', 'Kategori', 'required|is_unique[categories.cat_name]',
			array(
				'required' 		=> 'Silahkan pilih %s terlebih dahulu.',
				'is_unique' 	=> 'Kategori <strong>' .$this->input->post('cat_name'). '</strong> sudah ada.'
			));

		$this->form_validation->set_rules('image', 'Gambar', 'required|is_unique[blog.image]',
			array(
				'required' 		=> 'Silahkan masukkan %s terlebih dahulu.',
				'is_unique' 	=> 'Gambar <strong>' .$this->input->post('image'). '</strong> sudah ada.'
			));

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('blog/edit', $data);

	    } else {

    		if ( isset($_FILES['image']) && $_FILES['image']['size'] > 0 )
    		{
    			$config['upload_path']          = './img/';
    	        $config['allowed_types']        = 'gif|jpg|png';
    	        $config['max_size']             = 100;
    	        $config['max_width']            = 1024;
    	        $config['max_height']           = 768;

    	        $this->load->library('upload', $config);

    	        if ( ! $this->upload->do_upload('image'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();

    	        	$image = '';

    	            $this->load->view('edit', $data);

    	        } else {

    	        	if( !empty($old_image) ) {
    	        		if ( file_exists( './img/'.$old_image ) ){
    	        		    unlink( './img/'.$old_image );
    	        		} else {
    	        		    echo 'File tidak ditemukan.';
    	        		}
    	        	}

    	            $img_data = $this->upload->data();
    	            $image = $img_data['file_name'];
    	        	
    	        }
    		} else {

    			$image = ( !empty($old_image) ) ? $old_image : '';

    		}

	    	$post_data = array(
	    	    'jenis_cat' => $this->input->post('cat_id'),
	    	    'judul' => $this->input->post('input_judul'),
	    	    'content' => $this->input->post('input_content'),
	    	    'image' => $image,
	    	);

	    	if( empty($data['upload_error']) ) {

		        $this->artikel->update_artikel($post_data, $id);
		        $this->load->view('blog/blog_success', $data);
	    	}
	    }
	}



		public function delete($id)
	{
		$data['artikel'] = $this->artikel->get_artikel_by_id($id);

		if ( empty($id) || !$data['artikel'] ) show_404();

		$old_image = $data['artikel']->image;

    	if( !empty($old_image) ) {
    		if ( file_exists( './img/'.$old_image ) ){
    		    unlink( './img/'.$old_image );
    		} else {
    		    echo 'File tidak ditemukan.';
    		}
    	}

        if( ! $this->artikel->delete_artikel($id) )
        {
	        $this->load->view('blog/blog_failed', $data); 
	    } else {
	        $this->load->view('blog/blog_success', $data);
	    }


	}

}