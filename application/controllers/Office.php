<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Secure_Controller.php");

class Office extends Secure_Controller
{
	function __construct()
	{
		parent::__construct('office', NULL, 'office');
	}

	public function index()
	{
		$this->load->view('office');
	}

	public function logout()
	{
		$this->track_page('logout', 'logout');

		$this->Employee->logout();
	}
}
?>
