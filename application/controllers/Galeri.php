<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_galeri');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'title2' => 'Galeri Foto',
            'galeri' => $this->m_galeri->lists(),
            'isi' => 'admin/galeri/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('sampul'))
                {
                        $data = array(
                            'title' => 'Dream University',
                            'title2' => 'Add Galeri',
                            'error' => $this->upload->display_errors(),
                            'isi' => 'admin/galeri/v_add'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                                        'nama_galeri' => $this->input->post('nama_galeri'),
                                        'sampul' => $upload_data['uploads']['file_name']
                        );

                        $this->m_galeri->add($data);
                        $this->session->set_flashdata('pesan', 'Galeri Berhasil Disimpan');
                        redirect('galeri');
                }
        }

        $data = array(
            'title' => 'Admin',
            'title2' => 'Add Galeri',
            'isi' => 'admin/galeri/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_galeri)
    {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('sampul'))
                {
                        $data = array(
                            'title' => 'Dream University',
                            'title2' => 'Edit Galeri',
                            'error' => $this->upload->display_errors(),
                            'galeri' => $this->m_galeri->detail($id_galeri),
                            'isi' => 'admin/galeri/v_edit'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {

                        //menghapus file foto lama
                        $galeri = $this->m_galeri->detail($id_galeri);
                        if($galeri->sampul !="") {
                            unlink('./sampul/'.$galeri->sampul);
                        }
                        //end menghapus foto

                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                                        'id_galeri' => $id_galeri,
                                        'nama_galeri' => $this->input->post('nama_galeri'),
                                        'sampul' => $upload_data['uploads']['file_name']
                        );

                        $this->m_galeri->edit($data);
                        $this->session->set_flashdata('pesan', 'Galeri Berhasil Diedit');
                        redirect('galeri');
                }

                $data = array(
                    'id_galeri' => $id_galeri,
                    'nama_galeri' => $this->input->post('nama_galeri'),
                );

                $this->m_galeri->edit($data);
                $this->session->set_flashdata('pesan', 'Galeri Berhasil Diedit');
                redirect('galeri');
        }

        $data = array(
            'title' => 'Admin',
            'title2' => 'Edit Galeri',
            'galeri' => $this->m_galeri->detail($id_galeri),
            'isi' => 'admin/galeri/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_galeri)
    {
        //menghapus file foto lama
        $galeri = $this->m_galeri->detail($id_galeri);
        if($galeri->sampul !="") {
            unlink('./sampul/'.$galeri->sampul);
        }
        //end menghapus foto

        $data = array('id_galeri' => $id_galeri);
        $this->m_galeri->delete($data);
        $this->session->set_flashdata('pesan', 'Galeri Berhasil Dihapus');
        redirect('galeri');
    }

    public function add_foto($id_galeri)
    {
        $this->form_validation->set_rules('ket_foto', 'Keterangan Foto', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto'))
                {
                        $galeri = $this->m_galeri->detail($id_galeri);

                        $data = array(
                            'title' => 'Dream University',
                            'title2' => 'Add Foto Galeri : '.$galeri->nama_galeri,
                            'error' => $this->upload->display_errors(),
                            'galeri' => $galeri,
                            'foto' => $this->m_galeri->lists_foto($id_galeri),
                            'isi' => 'admin/galeri/v_add_foto'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {

                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './foto/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                                        'id_galeri' => $id_galeri,
                                        'ket_foto' => $this->input->post('ket_foto'),
                                        'foto' => $upload_data['uploads']['file_name']
                        );

                        $this->m_galeri->add_foto($data);
                        $this->session->set_flashdata('pesan', 'Foto Berhasil Ditambahkan');
                        redirect('galeri/add_foto/'.$id_galeri);
                }
        }
        $galeri = $this->m_galeri->detail($id_galeri);

        $data = array(
            'title' => 'Admin',
            'title2' => 'Add Foto Galeri : '.$galeri->nama_galeri,
            'galeri' => $galeri,
            'foto' => $this->m_galeri->lists_foto($id_galeri),
            'isi' => 'admin/galeri/v_add_foto'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete_foto($id_galeri, $id_foto)
    {
        //menghapus file foto lama
        $foto = $this->m_galeri->detail_foto($id_foto);
        if($foto->foto !="") {
            unlink('./foto/'.$foto->foto);
        }
        //end menghapus foto

        $data = array('id_foto' => $id_foto);
        $this->m_galeri->delete_foto($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Dihapus');
        redirect('galeri/add_foto/'.$id_galeri);
    }
}