<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('User_model');
 //		$this->load->model('Class_model');
	 }

	public function index()
	{
		$this->load->view('reg');
	}
	public function user_list()
	{
		$users = $this->User_model->user_list();
		$this->load->view('list',array('list'=>$users));
	}
	public function add()
	{
		$name=$this->input->post("username");
		$row=$this->User_model->add($name);
		if($row > 0){
			echo 'success';
		}else{
			echo 'fail';
		}
	}
	public function del_user($id)
	{
		$rows=$this->User_model->del_user($id);
		if($rows >0){
			redirect('user/user_list');
		}
	}
	public function update_user($id)
	{
		$result=$this->User_model->get_name_by_id($id);
		$this->load->view('update_user',array('user'=>$result));
	}

	public function update($id)
	{
		$name=$this->input->post("username");
		$row=$this->User_model->update($id,array('name',$name));
		if($row>0){
			redirect("user/user_list");
		}else{
			echo "修改失败";
		}
	}
}
