<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chain extends CI_Model{

    function get_provinsi(){
        $this->db->select('*');
        $this->db->from('provinsi');
        $data = $this->db->get();
        return $data->result();
    }

    /*function get_kotaa(){
        $this->db->select('*');
        $this->db->from('kota');
        $data = $this->db->get();
        return $data->result();
    }*/

    function get_kota(){
        $this->db->order_by('nama_kota', 'asc');
        $this->db->join('provinsi', 'kota.id_provinsi = provinsi.id');
        return $this->db->get('kota')->result();
    }

    function get_fakultas(){
        $this->db->select('*');
        $this->db->from('fakultas');
        $data = $this->db->get();
        return $data->result();
    }

    function get_jurusan(){
        $this->db->order_by('nama_jurusan', 'asc');
        $this->db->join('fakultas', 'jurusan.id_fakultas = fakultas.id_fakultas');
        return $this->db->get('jurusan')->result();
    }
}