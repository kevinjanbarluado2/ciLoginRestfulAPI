<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Pacific/Auckland');
        header("Access-Control-Allow-Origin: *");
        error_reporting(0);
        $this->load->helper('url');
    }

    
    public function illustration()
    {
        $uploads = array();
        foreach ($_FILES as $key => $file) {

            $illustrationName = "illustration_" . strtotime(date("Y-m-d H:i:s"));

            $config['upload_path']          = './resources/docs/'; // directory path
            $config['allowed_types']        = 'pdf|doc|docx|png'; // file format
            $config['max_size']             = 986300000; // max file size
            $config['file_name']            = $illustrationName;

            $this->load->library('upload', $config);
            $status = null;
            $error = null;
            $link = null;

            $uploaded = $this->upload->do_upload($key);
            if ($uploaded) {
                $status = $this->upload->data();
                $link = base_url() . "resources/docs/" . $status['file_name'];
            } else {
                $error = $this->upload->display_errors();
            }

            $uploads[] = array('success' => $uploaded, 'data' => $status, 'error' => $error, 'link' => $link, 'input' => $file);
        }

        echo json_encode($uploads);
    }
}
