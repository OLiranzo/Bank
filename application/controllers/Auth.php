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
		$data['layout'] = false;
		$this->load->view('clientes/template', $data);
	}

	public function registro()
	{
		$data['view'] = 'auth/registro';
		$data['title'] = 'Registro';
		$data['layout'] = false;
		$this->load->view('clientes/template', $data);
	}

	public function cambiarClave()
	{
		$data['view'] = 'auth/cambiarClave';
		$data['title'] = 'Cambiar Clave';
		$data['layout'] = false;
		$this->load->view('clientes/template', $data);
	}

	public function crear()
	{
		date_default_timezone_set('America/Santo_Domingo');
		setlocale(LC_ALL,"es_ES");
		$fecha=strftime( "%Y-%m-%d-%H-%M-%S", time() );
		if ($this->input->POST()) {
			if ($_POST['Clave'] == $_POST['ConfirmarClave']) {
				$usuario = $this->input->post('Cedula');
				
				if ($this->LoginModel->verificacion($usuario) > 0) {
					$this->session->set_flashdata('fail', 'Ya existe un usuario con este nombre.');
					redirect('Auth/registro');
				}else{
					$datos = array(
					'username' => $usuario, 
					'password' => convert_uuencode($this->input->post('Clave')), 
					'date' => $fecha,
					'role' => 1);
					
					$this->LoginModel->crear($datos);
					$this->session->set_flashdata('success', 'Usuario creado correctamente');
					redirect('Auth/index');
				}
			}else{
				$this->session->set_flashdata('fail', 'Las Claves no coinciden');
				redirect('Auth/registro');
			}
			
		}
	}

	public function verificar()
	{
		if ($this->input->POST()) {
			$Usuario = $this->input->post('Cedula'); 
			$Clave = convert_uuencode($this->input->post('Clave'));
			
			if ($this->LoginModel->verificar($Usuario, $Clave) > 0) {
				$this->session->set_flashdata('success', 'Bienvenido');
				redirect('Auth/index');
			}else{
				$this->session->set_flashdata('fail', 'Usuario o Clave incorrecto.');
				redirect('Auth/index');
			}
		}
	}

	public function actualizarClave()
	{
		if ($this->input->POST()) {
			if ($_POST['Clave'] == $_POST['ConfirmarClave']) {
				$Usuario = $this->input->post('Cedula');
				$Clave = convert_uuencode($this->input->post('Clave'));
				
				if ($this->LoginModel->verificacion($Usuario) > 0) {
					$this->LoginModel->actualizarClave($Usuario, $Clave);
					$this->session->set_flashdata('success2', 'Contraseña actualizada con exito.');
					redirect('Auth/index');
				}else{
					$this->session->set_flashdata('fail', 'Usuario o Clave incorrecto.');
					redirect('Auth/cambiarClave');
				}
			}
		}
	} 

	public function validarCedula(){
		if ($this->input->post()) {
			$Usuario = $this->input->post('Cedula');
			echo json_encode($this->LoginModel->verificacion($Usuario));
		}
	}

}
