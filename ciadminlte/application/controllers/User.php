<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent :: __construct();
		$this->load->model("User_m");
	}

	public function from()
	{
		$this->load->view('form_user');
	}
	public function add()

	{
		//crete data array
		$data= array('id' =>$this->input->post('id'),
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password"),
			"fullname" => $this->input->post("fullname"),
			"level" =>$this->input->post("level"));

			$insert=$this->db->insert('user',$data);

			if ($insert)
			{
				echo "Sukses";
				redirect('User', 'refresh');
			}else{
				echo "Gagal";
			}
	}
	public function update($id='')
	{
		$this->db->where('id',$id);
		$data['isi'] = $this->db->get('user');

		$this->load->view('update',$data);
	}

	public function gantikan($id='')
	{
		$data = array('id'=>$this->input->post('id'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'fullname' => $this->input->post('fullname'),
			'level'    => $this->input->post('level'));

		$this->db->where('id',$id);//memasukan id yang tadi sudah ditemukan lalu memilih id tersebut
		$insert = $this->db->update('user',$data);

		if ($insert) {
			echo "Sukses";
			redirect('User', 'refresh');
		}else{
			echo "Gagal";
		}
	}



}
