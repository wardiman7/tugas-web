<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	
	public function wisuda($param='')
	{
	 $data['tanggal'] = '25 - Juni - 2019';
	 $data['ketua'] = 'Lalu Wardiman';
	 $data['tambahan'] = $param;

	 $this->load->view('v_pengumuman', $data);
	 
	}
	public function detail($value='')
	{
		 $data['judul'] = 'Detail Pengumuman';

		 $this->load->view('v_detail', $data);
	}

}