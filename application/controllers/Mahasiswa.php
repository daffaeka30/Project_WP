<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
        $this->load->model('m_jurusan');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin',
            'title2' => 'Data Mahasiswa',
            'mahasiswa' => $this->m_mahasiswa->lists(),
            'isi' => 'admin/mahasiswa/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {

        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('id_jurusan', 'Nama Jurusan', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_mahasiswa/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_mahasiswa'))
                {
                        $data = array(
                            'title' => 'Dream University',
                            'title2' => 'Add Data Mahasiswa',
                            'jurusan' => $this->m_jurusan->lists(),
                            'error' => $this->upload->display_errors(),
                            'isi' => 'admin/mahasiswa/v_add'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './foto_mahasiswa/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                                        'nim' => $this->input->post('nim'),
                                        'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                                        'tgl_lahir' => $this->input->post('tgl_lahir'),
                                        'id_jurusan' => $this->input->post('id_jurusan'),
                                        'kelas' => $this->input->post('kelas'),
                                        'foto_mahasiswa' => $upload_data['uploads']['file_name']
                        );

                        $this->m_mahasiswa->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                        redirect('mahasiswa');
                }
        }

        $data = array(
            'title' => 'Dream University',
            'title2' => 'Add Data Mahasiswa',
            'jurusan' => $this->m_jurusan->lists(),
            'isi' => 'admin/mahasiswa/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_mahasiswa)
    {
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('id_jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_mahasiswa/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_mahasiswa'))
                {
                        $data = array(
                            'title' => 'Dream University',
                            'title2' => 'Edit Data Mahasiswa',
                            'error' => $this->upload->display_errors(),
                            'mahasiswa' => $this->m_mahasiswa->detail($id_mahasiswa),
                            'jurusan' => $this->m_jurusan->lists(),
                            'isi' => 'admin/mahasiswa/v_edit'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './foto_mahasiswa/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);
                        //menghapus file foto lama
                        $mahasiswa = $this->m_mahasiswa->detail($id_mahasiswa);
                        if($mahasiswa->foto_mahasiswa !="") {
                            unlink('./foto_mahasiswa/'.$mahasiswa->foto_mahasiswa);
                        }
                        //end menghapus foto

                        $data = array(
                                        'id_mahasiswa' => $id_mahasiswa,
                                        'nim' => $this->input->post('nim'),
                                        'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                                        'tgl_lahir' => $this->input->post('tgl_lahir'),
                                        'id_jurusan' => $this->input->post('id_jurusan'),
                                        'kelas' => $this->input->post('kelas'),
                                        'foto_mahasiswa' => $upload_data['uploads']['file_name']
                        );

                        $this->m_mahasiswa->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('mahasiswa');
                }

                $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './foto_mahasiswa/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                                        'id_mahasiswa' => $id_mahasiswa,
                                        'nim' => $this->input->post('nim'),
                                        'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                                        'tgl_lahir' => $this->input->post('tgl_lahir'),
                                        'id_jurusan' => $this->input->post('id_jurusan'),
                                        'kelas' => $this->input->post('kelas'),
                        );

                        $this->m_mahasiswa->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                        redirect('mahasiswa');
        }

        $data = array(
            'title' => 'Dream University',
            'title2' => 'Edit Data Mahasiswa',
            'jurusan' => $this->m_jurusan->lists(),
            'mahasiswa' => $this->m_mahasiswa->detail($id_mahasiswa),
            'isi' => 'admin/mahasiswa/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_mahasiswa)
    {
        //menghapus file foto lama
        $mahasiswa = $this->m_mahasiswa->detail($id_mahasiswa);
        if($mahasiswa->foto_mahasiswa !="") {
            unlink('./foto_mahasiswa/'.$mahasiswa->foto_mahasiswa);
        }
        //end menghapus foto

        $data = array('id_mahasiswa' => $id_mahasiswa);
        $this->m_mahasiswa->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('mahasiswa');
    }

}