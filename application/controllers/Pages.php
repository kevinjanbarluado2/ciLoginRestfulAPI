<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Pacific/Auckland');
        error_reporting(0);
        $this->load->helper('url');
        session_start();
        if ($this->session->loggedIn === NULL) {
            header("Location: " . base_url());
        }
    }

    public function dashboard()
    {
        $this->load->view('./components/header', array('pageName' => 'Dashboard', 'link' => __FUNCTION__));
        $this->load->view('dashboard');
        $this->load->view('./components/footer', array("links" => array()));
    }

    public function planner()
    {
        $this->load->view('./components/header', array('pageName' => 'Planner', 'link' => __FUNCTION__));
        $this->load->view('pages/factfind');
        $this->load->view('./components/footer', array("links" => array()));
    }

    public function plan()
    {
        $this->load->view('./components/header', array('pageName' => 'Plan', 'link' => __FUNCTION__));
        $this->load->view('pages/soa');
        $this->load->view('./components/footer', array("links" => array()));
    }
}
