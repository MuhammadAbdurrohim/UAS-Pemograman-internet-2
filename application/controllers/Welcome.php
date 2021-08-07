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
		$this->load->model('M_Data');
		$data['tbl_data'] = $this->M_Data->tampil_data()->result();
		$this->load->view('Home/Template/header');
		$this->load->view('Home/home', $data);
		$this->load->view('Home/Template/footer');
	}
	public function about()
	{
		$this->load->model('M_Data');
		$data['tbl_data'] = $this->M_Data->tampil_data()->result();
		$this->load->view('Home/Template/header');
		$this->load->view('Home/about', $data);
		$this->load->view('Home/Template/footer');
	}
	public function history()
	{
		$this->load->model('M_Data');
		$data['tbl_data'] = $this->M_Data->tampil_data()->result();
		$this->load->view('Home/Template/header');
		$this->load->view('Home/history', $data);
		$this->load->view('Home/Template/footer');
	}
	public function work()
	{
		$this->load->model('M_Data');
		$data['tbl_data'] = $this->M_Data->tampil_data()->result();
		$this->load->view('Home/Template/header');
		$this->load->view('Home/work', $data);
		$this->load->view('Home/Template/footer');
	}
	public function contact()
	{
		$this->load->model('M_Data');
		$data['tbl_data'] = $this->M_Data->tampil_data()->result();
		$this->load->view('Home/Template/header');
		$this->load->view('Home/contact', $data);
		$this->load->view('Home/Template/footer');
	}
	// public function login()
	// {
	// 	// $this->load->view('Home/Template/header');
	// 	$this->load->view('login');
	// 	// $this->load->view('Home/Template/footer');
	// }
}
