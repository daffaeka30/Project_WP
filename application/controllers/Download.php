<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_download');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'title2' => 'Data File Download',
            'download' => $this->m_download->lists(),
            'isi' => 'admin/download/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {

        $this->form_validation->set_rules('ket_file', 'Keterangan File', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './file/';
            $config['allowed_types']        = 'doc|docx|ppt|pptx|pdf|txt';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file'))
                {
                        $data = array(
                            'title' => 'Dream University',
                            'title2' => 'Add Data File',
                            'error' => $this->upload->display_errors(),
                            'isi' => 'admin/download/v_add'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './file/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                                        'ket_file' => $this->input->post('ket_file'),
                                        'file' => $upload_data['uploads']['file_name']
                        );

                        $this->m_download->add($data);
                        $this->session->set_flashdata('pesan', 'File Berhasil Ditambahkan');
                        redirect('download');
                }
        }

        $data = array(
            'title' => 'Dream University',
            'title2' => 'Add Data File',
            'isi' => 'admin/download/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_file)
    {

        $this->form_validation->set_rules('ket_file', 'Keterangan File', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './file/';
            $config['allowed_types']        = 'doc|docx|ppt|pptx|pdf|txt';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file'))
                {
                        $data = array(
                            'title' => 'Dream University',
                            'title2' => 'Edit Data File',
                            'download' => $this->m_download->detail($id_file),
                            'error' => $this->upload->display_errors(),
                            'isi' => 'admin/download/v_edit'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {
                //menghapus file lama
                $download = $this->m_download->detail($id_file);
                if($download->file !="") {
                    unlink('./file/'.$download->file);
                }
                //end menghapus file

                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './file/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                                        'id_file' => $id_file,
                                        'ket_file' => $this->input->post('ket_file'),
                                        'file' => $upload_data['uploads']['file_name']
                        );

                        $this->m_download->edit($data);
                        $this->session->set_flashdata('pesan', 'File Berhasil Diedit');
                        redirect('download');
                }
                $data = array(
                    'id_file' => $id_file,
                    'ket_file' => $this->input->post('ket_file'),
                );

                $this->m_download->edit($data);
                $this->session->set_flashdata('pesan', 'File Berhasil Diedit');
                redirect('download');
                }

        $data = array(
            'title' => 'Dream University',
            'title2' => 'Edit Data File',
            'download' => $this->m_download->detail($id_file),
            'isi' => 'admin/download/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_file)
    {
        //menghapus file lama
        $download = $this->m_download->detail($id_file);
        if($download->file !="") {
            unlink('./file/'.$download->file);
        }
        //end menghapus file

        $data = array('id_file' => $id_file);
        $this->m_download->delete($data);
        $this->session->set_flashdata('pesan', 'File Berhasil Dihapus');
        redirect('download');
    }
}