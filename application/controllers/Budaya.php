<?php
defined('BASEPATH') or exit('No direct script access allowed');

//Nampilin data dari model dan nampilin view
class Budaya extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmahasiswa');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tampil()
	{

		$data['dat'] = $this->Mmahasiswa->tampil_mahasiswa();
		$this->load->view('vmahasiswa', $data);
	}

	public function tambah_data()
	{
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action()
	{
		$insert = array(
			'nama_pgr' => $this->input->post("nama_pgr"),
			'jenis_beladiri' => $this->input->post("jenis_beladiri"),
			'tahun_berdiri' => $this->input->post("tahun_berdiri"),
			'pusat_pgr' => $this->input->post("pusat_pgr"),
		);

		$this->Mmahasiswa->tambah_data($insert);
		redirect('Budaya/tampil');
	}

	public function edit_data($id)
	{
		$data['dat'] = $this->Mmahasiswa->getDataEdit($id);
		$this->load->view('vedit_data', $data);
	}

	public function ubah_data()
	{
		$id = $this->input->post("id");
		$insert = array(
			'nama_pgr' => $this->input->post("nama_pgr"),
			'jenis_beladiri' => $this->input->post("jenis_beladiri"),
			'tahun_berdiri' => $this->input->post("tahun_berdiri"),
			'pusat_pgr' => $this->input->post("pusat_pgr"),
		);

		$this->Mmahasiswa->ubah_data($id, $insert);
		redirect('Budaya/tampil');
	}

	public function delete_data($id)
	{
		$this->Mmahasiswa->delete_data($id);
		redirect('Budaya/tampil');
	}
}