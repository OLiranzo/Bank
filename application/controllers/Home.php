<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		print_r($_SERVER['DOCUMENT_ROOT']);
		$data['view'] = 'clientes/home/home';
		$data['title'] = 'Inicio';
		$this->load->view('clientes/template', $data);
	}
}
