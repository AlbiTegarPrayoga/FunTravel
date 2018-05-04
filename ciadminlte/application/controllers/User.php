<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function from()
	{
		$this->load->view('form_user');
	}
	public function add()
	{
		echo $this->input->post("username")."<br/>";
		echo $this->input->post("password")."<br/>";
		echo $this->input->post("fullname")."<br/>";
		echo $this->input->post("level")."<br/>";
	}
}
