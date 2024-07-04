<?php

defined('BASEPATH') OR exit('No direct script access allowed'); 

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_setting');
        $this->load->model('m_jurusan');
        $this->load->model('m_admin');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'title2' => 'Dashboard',
            'total_dosen' => $this->m_admin->total_dosen(),
            'total_mahasiswa' => $this->m_admin->total_mahasiswa(),
            'total_jurusan' => $this->m_admin->total_jurusan(),
            'total_matkul' => $this->m_admin->total_matkul(),
            'isi' => 'admin/v_home'
            );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function setting() 
    {
        $this->form_validation->set_rules('nama_kampus', 'Nama Kampus', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telpon', 'Nomor Telpon', 'required');
        $this->form_validation->set_rules('rektor_kampus', 'Rektor Kampus', 'required');
        $this->form_validation->set_rules('sejarah', 'Sejarah Kampus', 'required');
        $this->form_validation->set_rules('visi', 'Visi Kampus', 'required');
        $this->form_validation->set_rules('misi', 'Misi Kampus', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_rektor/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_rektor'))
                {
                    $data = array(
                        'title' => 'Admin',
                        'title2' => 'Setting Web',
                        'setting' => $this->m_setting->detail(),
                        'isi' => 'admin/v_setting'
                        );
            
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './foto_rektor/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);
                        //menghapus file foto lama
                        $setting = $this->m_setting->detail();
                        if($setting->foto_rektor !="") {
                            unlink('./foto_rektor/'.$setting->foto_rektor);
                        }
                        //end menghapus foto

                        $data = array(
                                        'id' => '1',
                                        'nama_kampus' => $this->input->post('nama_kampus'),
                                        'alamat' => $this->input->post('alamat'),
                                        'no_telpon' => $this->input->post('no_telpon'),
                                        'rektor_kampus' => $this->input->post('rektor_kampus'),
                                        'sejarah' => $this->input->post('sejarah'),
                                        'visi' => $this->input->post('visi'),
                                        'misi' => $this->input->post('misi'),
                                        'foto_rektor' => $upload_data['uploads']['file_name']
                        );

                        $this->m_setting->save_setting($data);
                        $this->session->set_flashdata('pesan', 'Setting Telah Dirubah');
                        redirect('admin/setting');
                }

                        $data = array(
                                        'id' => '1',
                                        'nama_kampus' => $this->input->post('nama_kampus'),
                                        'alamat' => $this->input->post('alamat'),
                                        'no_telpon' => $this->input->post('no_telpon'),
                                        'rektor_kampus' => $this->input->post('rektor_kampus'),
                                        'sejarah' => $this->input->post('sejarah'),
                                        'visi' => $this->input->post('visi'),
                                        'misi' => $this->input->post('misi'),
                        );

                        $this->m_setting->save_setting($data);
                        $this->session->set_flashdata('pesan', 'Setting Telah Dirubah');
                        redirect('admin/setting');
        }

        $data = array(
            'title' => 'Admin',
            'title2' => 'Setting Web',
            'setting' => $this->m_setting->detail(),
            'isi' => 'admin/v_setting'
            );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}