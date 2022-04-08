<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Document extends CI_Controller
{
    private $pdf;

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

    public function factfind()
    {
        // 2 means EliteInsure
        $this->load->library('Mypdf', array('company' => 2));
        $data = [];
        $html = $this->load->view('pages\documents\ff\p1', array('name' => $_POST['name']), true);
        $this->mypdf->company = 'EliteInsure';

        $this->mypdf->AddPage(); // add a page
        $this->mypdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);
        $tmp = sys_get_temp_dir();
        $file = "preview" . time() . ".pdf";
        $this->mypdf->Output($tmp . "/" . $file, "F");
        echo $file;
    }

    public function readPdf($file)
    {
        $tmp = sys_get_temp_dir();
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=" . $file);
        $path =  $tmp . "\\" . $file;
        @readfile($path);
    }
}
