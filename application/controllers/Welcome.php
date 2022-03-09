<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Pacific/Auckland');
		error_reporting(0);
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('./components/header');
		$this->load->view('welcome_message');
		$this->load->view('./components/footer', array("links" => array("validator", "login")));
	}
}
