<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $this->db->order_by('id_jurusan', 'desc');
        return $this->db->get() -> result();
    }

    public function detail($id_jurusan)
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $this->db->where('id_jurusan', $id_jurusan);
        return $this->db->get() -> row();
    }

    public function add($data)
    {
        $this->db->insert('jurusan', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_jurusan', $data['id_jurusan']);
        $this->db->update('jurusan', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_jurusan', $data['id_jurusan']);
        $this->db->delete('jurusan', $data);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('jurusan');
        return $this->db->get()->row($field);
    }
}