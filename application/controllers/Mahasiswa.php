<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		echo "ini controller mahasiswa";
	}

	
	public function profil()
	{
		echo "Nama  : Lalu Wardiman Kusuma W <br>";
		echo "Nim   : 1600330033 <br>";
		echo "Email : laluwardiman7@gmail.com <br>";
		
	}

	public function dosen($param1='')
	{
		echo "Nama Dosen : ".$param1;
	}


	public function krs($semester='',$matkul='')
	{
		echo "Semester Ke".$semester." Saya mengambil ".$matkul;
	}

	public function get_semester()
	{
		echo "Semester : 3";
	}

 }