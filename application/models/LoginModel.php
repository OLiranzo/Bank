<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function CrearUsuario(String $Cedula, String $Contraseña){
    	
    	return $this->db->query("Insert INTO User (username, password, role, date) values ({$Cedula}, {$Contraseña}, {$Role}, {$Fecha}");
    }

}
?>