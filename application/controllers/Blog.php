<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('artikel');
		$data['artikel'] = $this->artikel->get_artikels();
		$this->load->view('blog', $data);
	}
 
	public function view($a)
	{
		$this->load->model('artikel');
		$data['view'] = $this->artikel->get_single($a);
		$this->load->view('blog_view', $data);
	}

	public function tambah()
	{
		$this->load->model('artikel');
		$data = array();

		if ($this->input->post('simpan')) 
		{
			$upload = $this->artikel->upload();

			if ($upload['result'] == 'success') 
			{
				$this->artikel->insert($upload);
				redirect('blog');
			}else
			{
				$data['message'] = $upload['error'];
			}
		}
			$this->load->view('tambah', $data);
		
	}


		public function Form_Edit($a)
	{
		$this->data['update_data']=$this->artikel->update_data('blog',$a);
		$this->load->view('edit', $this->data);
	}

		public function delete($a)
	{
		$this->load->model('artikel');
		$this->artikel->hapus($a);
		redirect('blog');
	}

	public function update($a)
	{

	$judul= $_POST['judul'];
	$content = $_POST['content'];
	$image = $_POST['image'];
 	$data = array(
 		'judul' => $judul,
		'content' => $content,
		'image' => $image
	);
 	$edit = $this->artikel->edit_data('blog',$data,$a);
 	if($edit>0){
 		redirect('blog');
 	}else{
 		echo 'Gagal disimpan';
 	}
}


}