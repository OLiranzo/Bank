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

    public function verificacion($Usuario){
    	$datos = $this->db->select('username')->from('user')->where('username',$Usuario)->get(); 
    	return $datos->num_rows();
    }

    public function verificar($Usuario, $Contraseña){
    	
    	$datos = $this->db->get_where('user', array('username' => $Usuario, 'password' => $Contraseña));
    	return $datos->num_rows();
    }

    public function cambiar($Usuario, $Contraseña){
    	
    	$this->db->update('user', $data);
    }

}
?>