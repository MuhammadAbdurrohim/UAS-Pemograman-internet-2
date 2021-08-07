<?php
class Admin extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url;
			redirect($url);
		}
	}

	function index(){
		// $this->load->view('Admin/Template/header.php');
		// $this->load->view('Admin/Template/menu.php');
		$this->load->model('M_Data');
		$data['tbl_data'] = $this->M_Data->tampil_data()->result();
		$this->load->view('Admin/index.php', $data);
		// $this->load->view('Admin/Template/footer.php');
	}
	function index_edit($id){
		$where = array('id' => $id);
		$this->load->model('M_Data');
		$data['tbl_data'] = $this->M_Data->view_data($where,'tbl_data')->result();
		// $this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/index_edit.php',$data);
	}
	function index_edit_aksi(){
		$id = $this->input->POST('id');
		$nama = $this->input->POST('nama');
		$email = $this->input->POST('email');
		$tgl_lahir = $this->input->POST('tgl_lahir');
		$jenis_kelamin = $this->input->POST('jenis_kelamin');
		$agama = $this->input->POST('agama');
		$no_hp = $this->input->POST('no_hp');
		$kota = $this->input->POST('kota');
		$alamat = $this->input->POST('alamat');
		$nama_sekolah1 = $this->input->POST('nama_sekolah1');
		$nama_sekolah2 = $this->input->POST('nama_sekolah2');
		$nama_sekolah3 = $this->input->POST('nama_sekolah3');
		$tamat_sekolah1 = $this->input->POST('tamat_sekolah1');
		$tamat_sekolah2 = $this->input->POST('tamat_sekolah2');
		$tamat_sekolah3 = $this->input->POST('tamat_sekolah3');
		$pengalaman_kerja = $this->input->POST('pengalaman_kerja');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'tgl_lahir' => $tgl_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'no_hp' => $no_hp,
			'kota' => $kota,
			'alamat' => $alamat,
			'nama_sekolah1' => $nama_sekolah1,
			'nama_sekolah2' => $nama_sekolah2,
			'nama_sekolah3' => $nama_sekolah3,
			'tamat_sekolah1' => $tamat_sekolah1,
			'tamat_sekolah2' => $tamat_sekolah2,
			'tamat_sekolah3' => $tamat_sekolah3,
			'pengalaman_kerja' => $pengalaman_kerja
		);

		$where = array(
			'id' => $id
		);

		$this->load->model('M_Data');
		$this->M_Data->update_data($where,$data,'tbl_data');
		redirect('Admin/Admin/index');

	}

	// //-------------- Data Dosen ---------------------------

	// function data_dosen(){
	// 	$this->load->model('M_Dosen');
	// 	$data['tbl_dosen'] = $this->M_Dosen->tampil_data()->result();
	// 	$this->load->view('Admin/Template/header.php');
	// 	$this->load->view('Admin/Template/menu.php');
	// 	$this->load->view('Admin/data_dosen.php',$data);
	// 	$this->load->view('Admin/Template/footer.php');
	// }

	// function data_dosen_input(){
	// 	$this->load->view('Admin/Template/header.php');
	// 	$this->load->view('Admin/Template/menu.php');
	// 	$this->load->view('Admin/data_dosen_input.php');
	// 	$this->load->view('Admin/Template/footer.php');
	// }

	// function data_dosen_input_aksi(){
	// 	$nidn = $this->input->POST('nidn_dosen');
	// 	$nama = $this->input->POST('nm_dosen');
	// 	$gender = $this->input->POST('gender');
	// 	$alamat = $this->input->POST('alamat');
	// 	$hp = $this->input->POST('nohp');

	// 	$data = array(
	// 		'nidn_dosen' => $nidn,
	// 		'nm_dosen' => $nama,
	// 		'gender' => $gender,
	// 		'alamat' => $alamat,
	// 		'nohp' => $hp
	// 	);
	// 	$this->load->model('M_Dosen');
	// 	$this->M_Dosen->input_data($data,'tbl_dosen');
	// 	redirect('Admin/Admin/data_dosen');

	// }

	// function data_dosen_edit($id_dosen){
	// 	$where = array('id_dosen' => $id_dosen);
	// 	$this->load->model('M_Dosen');
	// 	$data['tbl_dosen'] = $this->M_Dosen->view_data($where,'tbl_dosen')->result();
	// 	$this->load->view('Admin/Template/header.php');
	// 	$this->load->view('Admin/Template/menu.php');
	// 	$this->load->view('Admin/data_dosen_edit.php',$data);
	// 	$this->load->view('Admin/Template/footer.php');
	// }
	
	// function data_dosen_edit_aksi(){
	// 	$id = $this->input->POST('id_dosen');
	// 	$nidn = $this->input->POST('nidn_dosen');
	// 	$nama = $this->input->POST('nm_dosen');
	// 	$gender = $this->input->POST('gender');
	// 	$alamat = $this->input->POST('alamat');
	// 	$hp = $this->input->POST('nohp');

	// 	$data = array(
	// 		'nidn_dosen' => $nidn,
	// 		'nm_dosen' => $nama,
	// 		'gender' => $gender,
	// 		'alamat' => $alamat,
	// 		'nohp' => $hp
	// 	);

	// 	$where = array(
	// 		'id_dosen' => $id
	// 	);

	// 	$this->load->model('M_Dosen');
	// 	$this->M_Dosen->update_data($where,$data,'tbl_dosen');
	// 	redirect('Admin/Admin/data_dosen');

	// }

	// function data_dosen_delete($id_dosen){
	// 	$where = array('id_dosen' => $id_dosen);
	// 	$this->load->model('M_Dosen');
	// 	$this->M_Dosen->delete_data($where,'tbl_dosen');
	// 	redirect('Admin/Admin/data_dosen');
	// }

	// function cetak_data_dosen(){
	// 	$this->load->model('M_Dosen');
	// 	$data['tbl_dosen'] = $this->M_Dosen->tampil_data()->result();
	// 	$this->load->view('Admin/cetak_data_dosen.php',$data);
	// }
}
