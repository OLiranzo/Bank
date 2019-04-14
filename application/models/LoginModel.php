<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function crear($data){
    	
    	$this->db->insert('user', $data);
    }

    public function verificar($Usuario, $Contraseña){
    	
    	$this->db->get_where('user', array('username' => $Usuario, 'password' => $Contraseña));
    }

        public function cambiar($Usuario, $Contraseña){
    	
    	$this->db->update('user', $data);
    }

}
?>