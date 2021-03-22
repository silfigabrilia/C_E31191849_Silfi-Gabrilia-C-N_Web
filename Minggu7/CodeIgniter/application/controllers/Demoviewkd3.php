<?php
class Demoviewkd3 extends CI_Controller{
	public function __construct (){
		parent :: __construct();
		$this->load->view('headerviewkd1');
	}

	public function index(){
		// $this->load->view('contentview');
		$this->load->view('Demoviewkd3');
	}
}
?>