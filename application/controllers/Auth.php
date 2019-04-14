<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		$this->load->model("LoginModel");
	}

	public function index()
	{
		$data['view'] = 'auth/index';
		$data['title'] = 'Login';
		$this->load->view('auth/Index', $data);
	}

	public function registro()
	{
		$data['view'] = 'auth/registro';
		$data['title'] = 'Registro';
		$this->load->view('auth/registro', $data);
	}

	public function crear()
	{
		if ($_POST) {

			$Cedula = $_POST['Cedula'];
			$Contraseña = $_POST['Contraseña'];
			$ConfirmarContraseña = $_POST['ConfirmarContraseña'];
			$Fecha = getdate();
			$Role = 1;

			echo $Cedula;
			echo $Contraseña;
			echo $ConfirmarContraseña;
			print_r($Fecha);
			echo $Role;
		}
	}

}
