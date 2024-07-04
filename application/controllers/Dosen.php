<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dosen');
        $this->load->model('m_matkul');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'title2' => 'Data Dosen',
            'dosen' => $this->m_dosen->lists(),
            'isi' => 'admin/dosen/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {

        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('id_matkul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_dosen/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_dosen'))
                {
                        $data = array(
                            'title' => 'Dream University',
                            'title2' => 'Add Data Dosen',
                            'error' => $this->upload->display_errors(),
                            'matkul' => $this->m_matkul->lists(),
                            'isi' => 'admin/dosen/v_add'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './foto_dosen/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                                        'nip' => $this->input->post('nip'),
                                        'nama_dosen' => $this->input->post('nama_dosen'),
                                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                                        'tgl_lahir' => $this->input->post('tgl_lahir'),
                                        'id_matkul' => $this->input->post('id_matkul'),
                                        'pendidikan' => $this->input->post('pendidikan'),
                                        'foto_dosen' => $upload_data['uploads']['file_name']
                        );

                        $this->m_dosen->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                        redirect('dosen');
                }
        }

        $data = array(
            'title' => 'Dream University',
            'title2' => 'Add Data Dosen',
            'matkul' => $this->m_matkul->lists(),
            'isi' => 'admin/dosen/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_dosen)
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('id_matkul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_dosen/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_dosen'))
                {
                        $data = array(
                            'title' => 'Dream University',
                            'title2' => 'Edit Data Dosen',
                            'error' => $this->upload->display_errors(),
                            'dosen' => $this->m_dosen->detail($id_dosen),
                            'matkul' => $this->m_matkul->lists(),
                            'isi' => 'admin/dosen/v_edit'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './foto_dosen/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);
                        //menghapus file foto lama
                        $dosen = $this->m_dosen->detail($id_dosen);
                        if($dosen->foto_dosen !="") {
                            unlink('./foto_dosen/'.$dosen->foto_dosen);
                        }
                        //end menghapus foto

                        $data = array(
                                        'id_dosen' => $id_dosen,
                                        'nip' => $this->input->post('nip'),
                                        'nama_dosen' => $this->input->post('nama_dosen'),
                                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                                        'tgl_lahir' => $this->input->post('tgl_lahir'),
                                        'id_matkul' => $this->input->post('id_matkul'),
                                        'pendidikan' => $this->input->post('pendidikan'),
                                        'foto_dosen' => $upload_data['uploads']['file_name']
                        );

                        $this->m_dosen->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('dosen');
                }

                $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './foto_dosen/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                                        'id_dosen' => $id_dosen,
                                        'nip' => $this->input->post('nip'),
                                        'nama_dosen' => $this->input->post('nama_dosen'),
                                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                                        'tgl_lahir' => $this->input->post('tgl_lahir'),
                                        'id_matkul' => $this->input->post('id_matkul'),
                                        'pendidikan' => $this->input->post('pendidikan'),
                        );

                        $this->m_dosen->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('dosen');
        }

        $data = array(
            'title' => 'Dream University',
            'title2' => 'Edit Data Dosen',
            'matkul' => $this->m_matkul->lists(),
            'dosen' => $this->m_dosen->detail($id_dosen),
            'isi' => 'admin/dosen/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_dosen)
    {
        //menghapus file foto lama
        $dosen = $this->m_dosen->detail($id_dosen);
        if($dosen->foto_dosen !="") {
            unlink('./foto_dosen/'.$dosen->foto_dosen);
        }
        //end menghapus foto

        $data = array('id_dosen' => $id_dosen);
        $this->m_dosen->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('dosen');
    }
}