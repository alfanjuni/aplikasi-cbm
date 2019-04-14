<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Departemen_model');
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Daftar Karyawan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        $data['departemen'] = $this->Departemen_model->getAllDepartemen();
        $data['jabatan'] = ['KARYAWAN','MANDOR','ASISTEN MANDOR'];



        $this->form_validation->set_rules('nama_karyawan', 'Nama_karyawan', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('dep_karyawan', 'Dep_karyawan', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        //$this->form_validation->set_rules('tgl_masuk', 'Tgl_masuk', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Karyawan_model->tambahDataKaryawan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('karyawan');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Daftar Karyawan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('karyawan/detail', $data);
        $this->load->view('templates/footer');
    }
    public function hapus($id)
    {
        $this->Karyawan_model->hapusDataKaryawan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('karyawan');
    }

    public function ubah($id = 0)
    {
        $data['title'] = 'Daftar Karyawan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);

        $data['departemen'] = $this->Departemen_model->getAllDepartemen();
        $data['jabatan'] = ['KARYAWAN','MANDOR','ASISTEN MANDOR'];



        $this->form_validation->set_rules('nama_karyawan', 'Nama_karyawan', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('dep_karyawan', 'Dep_karyawan', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Karyawan_model->ubahDataKaryawan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('karyawan');
        }
    }
}
