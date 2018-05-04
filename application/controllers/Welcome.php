<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$posts = $this-> queries-> getPosts();
		$this->load->view('welcome_message', ['posts' => $posts]);
	}

	public function create(){
			$this->load->view('create');
	}
	public function save(){
		$this->form_validation->set_rules('id_karyawan', 'ID Karyawan', 'required');
		$this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required');
		$this->form_validation->set_rules('golongan', 'Golongan', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

		if($this->form_validation->run()){
				$data = $this->input->post();
				$today = date('Y-m-d');
				$data['date_created'] = $date;

				unset($data['submit']);
				$this->load->model('queries');
				if($this->queries->addPost($data)){
					$this->session->set_flashdata('msg', 'Post Saved Successfully');
				}else{
					$this->session->set_flashdata('msg', 'Failed to Save Post!');
				}
				return redirect('welcome');
		}
		else{
				$this->load->view('create');
		}
	}
}
