<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_jurusan');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'title2' => 'Data Jurusan',
            'jurusan' => $this->m_jurusan->lists(),
            'isi' => 'admin/jurusan/v_list'
            );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');
        
        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => 'Dream University',
                'title2' => 'Add Jurusan',
                'isi' => 'admin/jurusan/v_add'
                );
    
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        } else {

        $data = array(
                        'nama_jurusan' => $this->input->post('nama_jurusan'),
                    );

        $this->m_jurusan->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        redirect('jurusan');
        }
    }

    public function edit($id_jurusan)
    {
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');
        
        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => 'Dream University',
                'title2' => 'Edit Jurusan',
                'jurusan' => $this->m_jurusan->detail($id_jurusan),
                'isi' => 'admin/jurusan/v_edit'
                );
    
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        } else {

        $data = array(
                        'id_jurusan' => $id_jurusan,
                        'nama_jurusan' => $this->input->post('nama_jurusan'),
                    );

        $this->m_jurusan->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        redirect('jurusan');
        }
    }

    public function delete($id_jurusan)
    {
        $data = array(
            'id_jurusan' => $id_jurusan,
        );

        $this->m_jurusan->delete($data); 
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('jurusan');
    }
}