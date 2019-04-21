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

    public function verificar($Usuario, $Clave){
    	
    	$datos = $this->db->get_where('user', array('username' => $Usuario, 'password' => $Clave));
    	return $datos->num_rows();
    }

    public function actualizarClave($Usuario, $Clave){
    	
    	$this->db->set('password', $Clave);
		$this->db->where('username', $Usuario);
		$this->db->update('user');
    }

}
?>