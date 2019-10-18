<?php

//query query
class Mmahasiswa extends CI_Model
{

	public function tampil_mahasiswa()
	{
		$query = $this->db->get("pencaksilat");
		return $query->result();
	}

	public function tambah_data($data)
	{
		$this->db->insert("pencaksilat", $data);
	}

	public function ubah_data($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("pencaksilat", $data);
	}

	public function delete_data($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("pencaksilat");
	}

	public function getDataEdit($id)
	{
		$this->db->where("id", $id);
		$query = $this->db->get("pencaksilat");
		return $query->row(); //Mengambil data sebaris saja
	}
}