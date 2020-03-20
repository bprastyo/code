<?php
class member extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('member_model');
	}
	function index(){
		$data['member'] = $this->member_model->get_member();
		$this->load->view('member/member_view',$data);
	} 
	function add_new(){
		$this->load->view('member/add_member_view');
	}
	function save(){
		$namacs = $this->input->post('namacs');
		$namatoko = $this->input->post('namatoko');
		$this->member_model->save($namacs,$namatoko);
		redirect('member');
	}
	function delete(){
		$idmember = $this->uri->segment(3);
		$this->member_model->delete($idmember);
		redirect('member');
	}
	function get_edit(){
		$idmember = $this->uri->segment(3);
		$result = $this->member_model->get_idmember($idmember);
		if($result->num_rows() > 0){
		$i = $result->row_array();
		$data = array(
		'idmember' => $i['idmember'],
		'namacs' => $i['namacs'],
		'namatoko' => $i['namatoko']
		);
		$this->load->view('member/edit_member_view',$data);
		}else{
		echo "Data Was Not Found";
		} 
	}
	function update(){
		$idmember = $this->input->post('idmember');
		$namacs = $this->input->post('namacs');
		$namatoko = $this->input->post('namatoko');
		$this->member_model->update($idmember,$namacs,$namatoko);
		redirect('member');
	}

}