<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function download()
    {
        $this->db->select('*');
        $this->db->from('file');
        $this->db->order_by('id_file', 'desc');
        return $this->db->get() -> result();
    }

    public function dosen()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('matkul', 'matkul.id_matkul = dosen.id_matkul', 'left');
        $this->db->order_by('id_dosen', 'desc');
        return $this->db->get() -> result();
    }

    public function berita($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('user', 'user.id_user = berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get() -> result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('user', 'user.id_user = berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get() -> result();
    }

    public function detail_berita($slug_berita)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('user', 'user.id_user = berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get() -> row();
    }

    public function latest_news()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('user', 'user.id_user = berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(5);
        return $this->db->get() -> result();
    }

    public function galeri()
    {
        $this->db->select('galeri.*, count(foto.id_galeri) as jml_foto');
        $this->db->from('galeri');
        $this->db->join('foto', 'foto.id_galeri = galeri.id_galeri','left');
        $this->db->group_by('galeri.id_galeri');
        $this->db->order_by('galeri.id_galeri', 'desc');
        return $this->db->get() -> result();
    }

    public function detail_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get() -> result();
    }

    public function nama_galeri($id_galeri)
    {
        $this->db->select('');
        $this->db->from('galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get() -> row();
    }

    public function mahasiswa()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan', 'left');
        $this->db->order_by('id_mahasiswa', 'DESC');
        return $this->db->get() -> result();
    }

    public function jurusan()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $this->db->order_by('id_jurusan', 'desc');
        return $this->db->get() -> result();
    }
}