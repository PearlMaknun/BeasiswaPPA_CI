<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peserta extends CI_Model{
	
    public function select_all() {
        $sql = "SELECT biodata_mahasiswa.id_biodata, biodata_mahasiswa.nama_mhs AS Nama, biodata_mahasiswa.IPK AS IPK, fakultas.nama_fakultas AS Fakultas, jurusan.nama_jurusan AS Jurusan FROM biodata_mahasiswa, fakultas, jurusan WHERE biodata_mahasiswa.fakultas = fakultas.id_fakultas AND biodata_mahasiswa.jurusan = jurusan.id_jurusan";
        //$this->db->select('*');
        //$this->db->from('biodata_mahasiswa');
        $data = $this->db->query($sql);

        return $data->result();
    }

    public function total_rows() {
        $data = $this->db->get('biodata_mahasiswa');

        return $data->num_rows();
    }
}