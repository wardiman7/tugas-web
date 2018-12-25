<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {

	public function all()
	{
		return $this->db->get('dosen')->result();
	}
	public function create($object)
	{
		return $this->db->insert('dosen', $object);
	}
	public	function remove($id)
	{
		$this->db->where('nik', $id);
		return $this->db->delete('dosen');
	}
	public function get_id($id)
	{
		$this->db->where('nik', $id);
		return $this->db->get('dosen')->row();
	}
	public function update($id, $object)
	{
		$this->db->where('nik', $id);
		return $this->db->update('dosen', $object);
	}
}