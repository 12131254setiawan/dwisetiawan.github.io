<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Folio extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('v_header');
		$this->load->view('v_biodata');
		$this->load->view('v_pendidikan');
		$this->load->view('v_pengalaman');
		$this->load->view('v_footer');
	}
}