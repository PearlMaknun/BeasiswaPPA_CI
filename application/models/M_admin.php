<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
	//fungsi cek session
    function logged_id(){
        return $this->session->userdata('user_id');
    }

    //fungsi check login
    function check_login($table, $user, $pass){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $user);
        $this->db->where('password', $pass);

        $data = $this->db->get();

        /*$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();*/
        if ($data->num_rows() == 0) {
            return FALSE;
        } else {
            return $data->result();
        }
    }
}