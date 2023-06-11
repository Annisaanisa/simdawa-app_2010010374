<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persyaratan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PersyaratanModel');
        $this->load->library('pdf');
    }

    public function index()
    {
        $data['title'] = "Dashboard | SIMDAWA-APP";
        $data['persyaratan'] = $this->PersyaratanModel->get_Persyaratan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('persyaratan/persyaratan_read', $data);
        $this->load->view('template/footer');
    }

    public function cetak()
    {
        $data['persyaratan'] = $this->PersyaratanModel->get_persyaratan();
        $this->load->view('persyaratan/persyaratan_print', $data);
    }

    public function tambah()
    {
        if (isset($_POST['create'])) {
            $this->PersyaratanModel->insert_Persyaratan();
            redirect('persyaratan');
        } else {
            $data['title'] = "Tambah Data Persyaratan Beasiswa | SIMDAWA-APP";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('persyaratan/persyaratan_create');
            $this->load->view('template/footer');
        }
    }

    public function ubah($id)
    {
        if (isset($_POST['update'])) {
            $this->PersyaratanModel->update_Persyaratan();
            redirect('Persyaratan');
        } else {
            $data['title'] = "Edit Data Persyaratan Beasiswa | SIMDAWA-APP";
            $data['persyaratan'] = $this->PersyaratanModel->get_Persyaratan_byid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('persyaratan/persyaratan_update', $data);
            $this->load->view('template/footer');
        }
    }
    public function hapus($id)
    {
        if (isset($id)) {
            $this->PersyaratanModel->delete_Persyaratan($id);
            redirect('persyaratan');
        }
    }
}
