<?php 
class Pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengumuman_model');
	}

	public function index()
	{
		$data['judul'] = 'Pengumuman';
		$data['sub_judul'] = 'Halaman Pengumuman';
		$data['halaman'] = 'admin/v_pengumuman';
		$data['isi_tabel'] = $this ->Pengumuman_model ->all();

		//parsing data dari model ke view
		$data['isi_tabel'] = $this->Pengumuman_model->all();

		$this->load->view('admin/v_template', $data);
		

	}
	public function Tambah(){
		$data['judul'] = 'Tambah Pengumuman';
		$data['sub_judul'] = 'Tambah Pengumuman';
		$data['halaman'] = 'admin/v_tambah_pengumuman';

		//parsing data dari model ke view
		// $data['isi_tabel'] = $this->Pengumuman_model->all();

		$this->load->view('admin/v_template', $data);


	}
	public function proses_tambah()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');
         

         $objek = array(
         	'judul' => $judul,
         	'isi' => $isi,
         	'penulis' => $penulis
         	);
         if ($this->Pengumuman_model->create($objek)) {
         	 // echo 'Berhasil';
         	$this->session->set_flashdata('info', 'Data Berhasil Disimpan!');
         	redirect('admin/Pengumuman');
         }else{
         	// echo 'Gagal';
         	$this->session->set_flashdata('info', 'Data Gagal Disimpan!');
         	redirect('admin/Pengumuman');

         }
         // var_dump($objek);

	}
	public function Hapus($kode)
	{
		if ($this->Pengumuman_model->remove($kode)){

			$this->session->set_flashdata('info', 'Data Berhasil Dihapus!');
         	redirect('admin/Pengumuman');
         }else{
         	// echo 'Gagal';
         	$this->session->set_flashdata('info', 'Data Gagal Dihapus');
         	redirect('admin/Pengumuman');

		}
	}	
	public function edit($id)
	{
	
		$data['judul'] = 'Edit Pengumuman';
		$data['sub_judul'] = 'Halaman Edit Pengumuman';
		$data['halaman'] = 'admin/v_edit_pengumuman';


		$data['isi_tabel'] = $this->Pengumuman_model->get_id($id);
		// var_dump($data);

		$this->load->view('admin/v_template',$data);


		
	}

	public function proses_edit()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');
		$id = $this->input->post('id_pengumuman');

		$objek = array(
		'judul' => $judul , 
		'isi' => $isi , 
		'penulis' => $penulis,
		'id'=> $id
		);
		
		if ($this->Pengumuman_model->update($id, $objek)) {
			
			$this->session->set_flashdata('info','Data Berhasil Di Ubah !!');
			redirect('admin/pengumuman');

		}else{
			
			$this->session->set_flashdata('info','Data gagal Di Ubah!!');
			redirect('admin/pengumuman');

		}
		// var_dump($objek);
	}


	
}