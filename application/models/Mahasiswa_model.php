<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function all()
	{
		return $this->db->get('mahasiswa_')->result();
	}
	public function create($object)
	{
		return $this->db->insert('mahasiswa_', $object);
	}
	public	function remove($id)
	{
		$this->db->where('NIM', $id);
		return $this->db->delete('mahasiswa_');
	}
	public function get_id($id)
	{
		$this->db->where('NIM', $id);
		return $this->db->get('mahasiswa_')->row();
	}
	public function update($id, $object)
	{
		$this->db->where('NIM', $id);
		return $this->db->update('mahasiswa_', $object);
	}
}