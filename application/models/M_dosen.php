<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('matkul', 'matkul.id_matkul = dosen.id_matkul', 'left');
        $this->db->order_by('id_dosen', 'DESC');
        return $this->db->get() -> result();
    }

    public function detail($id_dosen)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('matkul', 'matkul.id_matkul = dosen.id_matkul', 'left');
        $this->db->where('id_dosen', $id_dosen);
        return $this->db->get() -> row();
    }

    public function add($data)
    {
        $this->db->insert('dosen', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_dosen', $data['id_dosen']);
        $this->db->update('dosen', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_dosen', $data['id_dosen']);
        $this->db->delete('dosen', $data);
    }
}