<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_matkul');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'title2' => 'Data Mata Kuliah',
            'matkul' => $this->m_matkul->lists(),
            'isi' => 'admin/matkul/v_list'
            );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_matkul', 'Nama Matkul', 'required');
        
        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => 'Dream University',
                'title2' => 'Add Matkul',
                'isi' => 'admin/matkul/v_add'
                );
    
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        } else {

        $data = array(
                        'nama_matkul' => $this->input->post('nama_matkul'),
                    );

        $this->m_matkul->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        redirect('matkul');
        }
    }

    public function edit($id_matkul)
    {
        $this->form_validation->set_rules('nama_matkul', 'Nama Matkul', 'required');
        
        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => 'Dream University',
                'title2' => 'Edit Matkul',
                'matkul' => $this->m_matkul->detail($id_matkul),
                'isi' => 'admin/matkul/v_edit'
                );
    
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        } else {

        $data = array(
                        'id_matkul' => $id_matkul,
                        'nama_matkul' => $this->input->post('nama_matkul'),
                    );

        $this->m_matkul->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        redirect('matkul');
        }
    }

    public function delete($id_matkul)
    {
        $data = array(
            'id_matkul' => $id_matkul,
        );

        $this->m_matkul->delete($data); 
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('matkul');
    }
}