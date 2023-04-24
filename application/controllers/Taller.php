<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {
	public function index()
	{
		$this->load->view('Taller/index_View');
	}

    public function primer_vista()
	{
		$this->load->view('primer_vista');
	}
	public function agregar_taller()
	{
		$this->load->view('agregar_taller');
	}
}
