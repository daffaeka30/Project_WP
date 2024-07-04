<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeri extends CI_Model {

    public function lists()
    {
        $this->db->select('galeri.*, count(foto.id_galeri) as jml_foto');
        $this->db->from('galeri');
        $this->db->join('foto', 'foto.id_galeri = galeri.id_galeri','left');
        $this->db->group_by('galeri.id_galeri');
        $this->db->order_by('galeri.id_galeri', 'desc');
        return $this->db->get() -> result();
    }

    public function lists_foto($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get() -> result();
    }

    public function add($data)
    {
        $this->db->insert('galeri', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->update('galeri', $data);
    }

    public function detail($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get() -> row();
    }

    public function delete($data)
    {
        $this->db->where('id_galeri', $data['id_galeri']);
        $this->db->delete('galeri', $data);
    }

    public function add_foto($data)
    {
        $this->db->insert('foto', $data);
    }

    public function delete_foto($data)
    {
        $this->db->where('id_foto', $data['id_foto']);
        $this->db->delete('foto', $data);
    }

    public function detail_foto($id_foto)
    {
        $this->db->select('*');
        $this->db->from('foto');
        $this->db->where('id_foto', $id_foto);
        return $this->db->get() -> row();
    }
}