<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mygame extends CI_Controller {

	/**
	 * =====================================================
	 *		Podstawowa 
	 * =====================================================
	 * @author Mateusz Wrobel < bayomw@gmail.com >
	 */
	public function index()
	{
		echo "Plan dzialania";

		$this->load->view('header\conf_phead');
		$this->load->view('body\conf_pbody');
		$this->load->view('footer\conf_pfoot');

	}
}
