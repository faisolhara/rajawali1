<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_Login extends CI_Model {

	function validasi($username, $password) { 
		$login =  $this->db->query("
			SELECT username, password, nama, avatar, usr.id_unit, u.id_unit, nama_unit
			FROM user usr, unit u
			WHERE usr.id_unit = u.id_unit
				and username like '$username' 
				and password like '$password' 
		");
					
		if($login->num_rows() == 1) {
			$user = $login->row();
			$auth = array('username' => $user->username,'avatar' => $user->avatar, 'unit' => $user->nama_unit, 'nama' => $user->nama, 'sudahlogin' => true);
			$this->session->set_userdata($auth);
			//$this->session->sess_create();
			return true;
			
		} else {
			$this->session->set_flashdata('notification', 'Incorrect username and/or password');
			return false;
		}


	}

}

/* End of file E_Login.php */
/* Location: ./application/models/E_Login.php */