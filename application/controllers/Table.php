<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Table extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Departemen_model');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Departemen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['departemen'] = $this->Departemen_model->getAllDepartemen();
        if ($this->input->post('keyword')) {
            $data['departemen'] = $this->Departemen_model->cariDataDepartemen();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/table', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Departemen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_departemen', 'Nama_departemen', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('departemen/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Departemen_model->tambahDataDepartemen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('departemen');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Departemen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['departemen'] = $this->Departemen_model->getDepartemenById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('departemen/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Departemen_model->hapusDataDepartemen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('departemen');
    }


    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Departemen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['departemen'] = $this->Departemen_model->getDepartemenById($id);


        $this->form_validation->set_rules('nama_departemen', 'Nama_departemen', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('departemen/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Departemen_model->ubahDataDepartemen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('departemen');
        }
    }
}
