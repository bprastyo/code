<?php
class member_model extends CI_Model{
	function get_member(){
		$result = $this->db->get('member');
		return $result;
		}
	function save($namacs,$namatoko){
		$data = array(
		'namacs' => $namacs,
		'namatoko' => $namatoko
		);
		$this->db->insert('member',$data);
	}
	function delete($idmember){
		$this->db->where('idmember', $idmember);
		$this->db->delete('member');
	} 
	function get_idmember($idmember){
		$query = $this->db->get_where('member', array('idmember' => $idmember));
		return $query;
	}
	function update($idmember,$namacs,$namatoko){
		$data = array(
		'namacs' => $namacs,
		'namatoko' => $namatoko
		);
		$this->db->where('idmember', $idmember);
		$this->db->update('member', $data);
 	}
}