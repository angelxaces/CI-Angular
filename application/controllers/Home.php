<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{
		$data = array('title'=>'HOME');
        $this->load->view('templates/header', $data);
        $this->load->view('page', $data);
        $this->load->view('templates/footer', $data);
	}
}