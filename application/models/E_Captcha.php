<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_Captcha extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function make_captcha()
	{
		//Delete old data (10 minutes)
		$expiration = time()-600;
		$sql = "DELETE FROM captcha WHERE captcha_time < ? ";
		$binds = array($expiration);
		$query = $this->db->query($sql, $binds);
		
		//make captcha
		$this->load->helper('captcha');
		$vals = array(
			'img_path'	=> './assets/img/captcha/',
		    'img_url'	=> base_url().'/assets/img/captcha/',
		    'font_path'	=> './path/to/fonts/texb.ttf',
		    'img_width'	=> '150',
		    'img_height' => '50',
		    'expiration' => 300
		    );

		//create captcha
		$cap = create_captcha($vals);
		/*echo $cap['image'];
*/
		//write to DB
		if ($cap) {
			$data = array(
				'captcha_id' => '',
				'captcha_time' => $cap['time'], 
			 	'ip_address' => $this->input->ip_address(), 
				'word' => $cap['word'], 
			);
			$query = $this->db->insert_string('captcha', $data);
			$this->db->query($query);
		}else{
			return "Captcha not work";
		}
		return $cap['image'];
	}

	function check_captcha(){
		//Checking input
		$expiration = time()-500;
		$sql = "SELECT COUNT(*) as count FROM captcha 
			WHERE word = ?
			AND ip_address = ?
			AND captcha_time > ?";
		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();

		// //Delete old data (1 hours)
		// $sql = "DELETE FROM captcha WHERE captcha_time < ? ";
		// $binds = array($expiration);
		// $query = $this->db->query($sql, $binds);
		
		if ($row ->count > 0) {
			return true;
		}
		return false;
	}

}

/* End of file E_Login.php */
/* Location: ./application/models/E_Login.php */