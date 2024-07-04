<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan', 'left');
        $this->db->order_by('id_mahasiswa', 'DESC');
        return $this->db->get() -> result();
    }

    public function detail($id_mahasiswa)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan', 'left');
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        return $this->db->get() -> row();
    }

    public function add($data)
    {
        $this->db->insert('mahasiswa', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_mahasiswa', $data['id_mahasiswa']);
        $this->db->update('mahasiswa', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_mahasiswa', $data['id_mahasiswa']);
        $this->db->delete('mahasiswa', $data);
    }
}