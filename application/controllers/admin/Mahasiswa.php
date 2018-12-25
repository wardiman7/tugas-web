<?php

class Mahasiswa extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index()
	{
		$data['judul'] = 'mahasiswa';
		$data['sub_judul'] = 'Halaman Mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa';
		$data['isi_tabel'] = $this ->Mahasiswa_model ->all();

		$this->load->view('admin/v_template', $data); 
	}
	public function tambah(){
		$data['judul'] = 'Tambah Mahasiswa';
		$data['sub_judul'] = 'Tambah Mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa_tambah';

		//parsing data dari model ke view
		// $data['isi_tabel'] = $this->Pengumuman_model->all();

		$this->load->view('admin/v_template', $data);


	}
	public function proses_tambah()
	{
		$obj = array(
			'NIM'=>$this->input->post('NIM'),
			'nama_mahasiswa'=>$this->input->post('nama_mahasiswa'),
			'program_studi'=>$this->input->post('program_studi')
		);
		$this->Mahasiswa_model->create($obj);

		redirect('admin/mahasiswa', 'refresh');
	}
	public function	hapus($nim)
	{
			$this->Mahasiswa_model->remove($nim );
			redirect('admin/mahasiswa', 'refresh');
	}
	public function edit($nim)
	{
		$data['judul'] = 'Mahasiswa';
		$data['sub_judul'] = 'Edit Data Mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa_edit';

		$data['isi_data'] = $this->Mahasiswa_model->get_id($nim);

		//parsing data dari model ke view
		// $data['isi_tabel'] = $this->Pengumuman_model->all();

		$this->load->view('admin/v_template', $data);
	}
	public function proses_edit()
	{
	$id = $this->input->post('NIM');
	$obj = array(
			'nama_mahasiswa'=>$this->input->post('nama_mahasiswa'),
			'program_studi'=>$this->input->post('program_studi')
		);
		$this->Mahasiswa_model->update($id, $obj);

		redirect('admin/mahasiswa', 'refresh');
	}

}