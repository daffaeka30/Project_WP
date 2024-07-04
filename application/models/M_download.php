<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_download extends CI_Model {

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('file');
        $this->db->order_by('id_file', 'desc');
        return $this->db->get() -> result();
    }

    public function detail($id_file)
    {
        $this->db->select('*');
        $this->db->from('file');
        $this->db->where('id_file', $id_file);
        return $this->db->get() -> row();
    }

    public function add($data)
    {
        $this->db->insert('file', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_file', $data['id_file']);
        $this->db->update('file', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_file', $data['id_file']);
        $this->db->delete('file', $data);
    }
}