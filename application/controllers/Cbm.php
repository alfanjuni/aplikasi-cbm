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
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
        $data['departemen'] = $this->Departemen_model->getAllDepartemen();
        $data['cbm'] = $this->Cbm_model->getAllCbm();
       
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
}