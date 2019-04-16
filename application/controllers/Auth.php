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
		$this->load->library('encrypt');
		$this->load->library('session');
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
		if ($this->input->POST()) {
			if ($_POST['Contraseña'] == $_POST['ConfirmarContraseña']) {
				$usuario = $this->input->post('Cedula');
				
				if ($this->LoginModel->verificacion($usuario) > 0) {
					$this->session->set_flashdata('fail', 'Ya existe un usuario con este nombre.');
					redirect('Auth/registro');
				}else{
					$datos = array(
					'username' => $usuario, 
					'password' => convert_uuencode($this->input->post('Contraseña')), 
					'date' => date('d/m/y H:i a'),
					'role' => 1);
					
					$this->LoginModel->crear($datos);
					$this->session->set_flashdata('success', 'Usuario creado correctamente');
					redirect('Auth/index');
				}
			}else{
				$this->session->set_flashdata('fail', 'Las contraseñas no coinciden');
				redirect('Auth/registro');
			}
			
		}
	}

	public function verificar()
	{
		if ($this->input->POST()) {
			$Usuario = $this->input->post('Cedula'); 
			$Contraseña = convert_uudecode($this->input->post('Contraseña'));
			
			if ($this->LoginModel->verificar($Usuario, $Contraseña) > 0) {
				echo "Bienvenido";
			}else{
				echo "No existe.";
			}
			
		}
	}

	public function cambiar()
	{
		if ($this->input->POST()) {
			
		}
	}

}
