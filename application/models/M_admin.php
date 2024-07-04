<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function total_dosen()
    {
        return $this->db->count_all('dosen');
    }

    public function total_mahasiswa()
    {
        return $this->db->count_all('mahasiswa');
    }

    public function total_jurusan()
    {
        return $this->db->count_all('jurusan');
    }

    public function total_matkul()
    {
        return $this->db->count_all('matkul');
    }

}