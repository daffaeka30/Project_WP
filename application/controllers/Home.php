<?php 

defined('BASEPATH') OR exit('No direct script accesss allowed'); 

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_dosen');
        $this->load->model('m_galeri');
        $this->load->model('m_berita');

    }

    public function index() 
    {
        $data = array(
            'title' => 'Web Kampus',
            'dosen' => $this->m_dosen->lists(),
            'galeri' => $this->m_galeri->lists(),
            'berita' => $this->m_berita->lists(),
            'latest_news' => $this->m_home->latest_news(),
            'isi' => 'v_home'
            );

        $this->load->view('layout/v_wrapperhome', $data, FALSE);
    }

    public function download()
    {
        $data = array(
            'title' => 'Download',
            'download' => $this->m_home->download(),
            'isi' => 'v_download'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function dosen()
    {
        $data = array(
            'title' => 'Dosen',
            'dosen' => $this->m_home->dosen(),
            'isi' => 'v_dosen'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function berita()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 4;
        $config['uri_segment'] = 3;

        $limit = $config['per_page'];
        $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
        $config['full_tag_close'] = '</div></ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);


        $data = array(
            'pagination' => $this->pagination->create_links(),
            'latest_news' => $this->m_home->latest_news(),
            'berita' => $this->m_home->berita($limit, $start),
            'title' => 'Berita',
            'isi' => 'v_berita'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function detail_berita($slug_berita)
    {
        $data = array(
            'title' => 'Detail Berita',
            'latest_news' => $this->m_home->latest_news(),
            'berita' => $this->m_home->detail_berita($slug_berita),
            'isi' => 'v_detail_berita'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function galeri()
    {
        $data = array(
            'title' => 'Galeri Foto',
            'galeri' => $this->m_home->galeri(),
            'isi' => 'v_galeri'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function detail_galeri($id_galeri)
    {
        $data = array(
            'title' => 'Detail Galeri Foto',
            'galeri' => $this->m_home->detail_galeri($id_galeri),
            'nama_galeri' => $this->m_home->nama_galeri($id_galeri),
            'isi' => 'v_detail_galeri'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function mahasiswa()
    {
        $data = array(
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $this->m_home->mahasiswa(),
            'isi' => 'v_mahasiswa'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function profile()
    {
        $data = array(
            'title' => 'Profile Kampus',
            'setting' => $this->m_setting->detail(),
            'isi' => 'v_profile'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function jurusan()
    {
        $data = array(
            'title' => 'Jurusan',
            'jurusan' => $this->m_home->jurusan(),
            'isi' => 'v_jurusan'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function about() 
    {
        $data = array(
            'title' => 'About',
            'setting' => $this->m_setting->detail(),
            'isi' => 'v_about'
            );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}