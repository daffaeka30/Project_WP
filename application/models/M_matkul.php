<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_matkul extends CI_Model {

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->order_by('id_matkul', 'desc');
        return $this->db->get() -> result();
    }

    public function detail($id_matkul)
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->where('id_matkul', $id_matkul);
        return $this->db->get() -> row();
    }

    public function add($data)
    {
        $this->db->insert('matkul', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_matkul', $data['id_matkul']);
        $this->db->update('matkul', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_matkul', $data['id_matkul']);
        $this->db->delete('matkul', $data);
    }
}