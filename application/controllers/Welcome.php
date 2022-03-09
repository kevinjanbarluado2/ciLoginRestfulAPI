<?php

use phpDocumentor\Reflection\DocBlock\Tags\Var_;

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Pacific/Auckland');
		error_reporting(0);
		$this->load->helper('url');
		session_start();
	}

	public function index()
	{
		if ($this->session->loggedIn === NULL) {
			$this->load->view('login');
		} else {
			header("Location: " . base_url('dashboard'));
			die();
		}
	}

	public function logout()
	{
		session_destroy();
		header("Location: " . base_url());
	}
}
