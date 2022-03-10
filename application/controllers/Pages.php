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

        $p1 = $this->load->view('pages/factfind/p1.php', '', true);
        $p2 = $this->load->view('pages/factfind/p2.php', '', true);



        $this->load->view('./components/header', array('pageName' => 'Generate Planner', 'link' => __FUNCTION__));
        $this->load->view('pages/factfind',
            array('pages' => array('p1' => $p1, 'p2' => $p2))
        );
        $this->load->view('./components/footer', array("links" => array()));
    }

    public function plan()
    {
        $this->load->view('./components/header', array('pageName' => 'Generate Plan', 'link' => __FUNCTION__));
        $this->load->view('pages/soa');
        $this->load->view('./components/footer', array("links" => array()));
    }

    public function users()
    {
        $this->load->view('./components/header', array('pageName' => 'Users', 'link' => __FUNCTION__));
        $this->load->view('pages/users');
        $this->load->view('./components/footer', array("links" => array()));
    }
}
