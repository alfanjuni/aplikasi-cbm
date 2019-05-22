<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cbm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Departemen_model');
        $this->load->model('Karyawan_model');
        $this->load->model('Cbm_model');
        $this->load->library('form_validation');
        user_level();
    }

    public function index()
    {
        $data['title'] = 'Input CBM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawanSortName();
        $data['departemen'] = $this->Departemen_model->getAllDepartemen();
        $data['cbm'] = $this->Cbm_model->getAllCbm();


        $this->form_validation->set_rules('id_karyawan', 'id_karyawan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('cbm', 'cbm', 'required');
     
       
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('cbm/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Cbm_model->tambahDataCbm();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('cbm');
        }
    }

    public function ubah($id = 0)
    {
        $data['title'] = 'Input CBM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawanSortName();
       
        $data['cbm'] = $this->Cbm_model->getCbmById($id);


        
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('cbm', 'cbm', 'required');
     

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('cbm/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Cbm_model->ubahDataCbm();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('cbm');
        }
    }

    public function hapus($id)
    {
        $this->Cbm_model->hapusDataCbm($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('cbm');
    }

    public function inputmasal()
    {
        $data['title'] = 'Input CBM Masal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawanSortName();
        $data['departemen'] = $this->Departemen_model->getAllDepartemen();
        $data['cbm'] = $this->Cbm_model->getAllCbm();
        $data['color'] = ['border-left-primary','border-left-success','border-left-success', 'border-left-danger', 'border-left-warning','border-left-info'];
        $data['icon'] = ['fas fa-tags','fas fa-compass','fas fa-industry', 'fas fa-folder-minus', 'fas fa-bars','fas fa-landmark'];
       

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('cbm/pilihdepartemen', $data);
            $this->load->view('templates/footer');
    
    }
    public function inputbydepartemen($id=0){

    }


    
}