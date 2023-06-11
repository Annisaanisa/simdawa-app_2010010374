<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BeasiswaModel extends CI_Model
{
    private $tabel = "beasiswa";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function get_beasiswa()
    {
        $q = "SELECT beasiswa.*, jenis_beasiswa.nama_jenis, jenis_beasiswa.keterangan FROM beasiswa INNER JOIN jenis_beasiswa ON beasiswa.jenis_id = jenis_beasiswa.id ";
        return $this->db->query($q)->result();
    }

    public function insert_beasiswa()
    {
        $data = [
            'nama_beasiswa' => $this->input->post('nama_beasiswa'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai'),
            'jenis_id' => $this->input->post('jenis_id')
        ];
        $this->db->insert($this->tabel, $data);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data beasiswa berhasil ditambahkan!");
            $this->session->set_flashdata('status', true);
            return true;
        } else {
            $this->session->set_flashdata('pesan', "Data beasiswa gagal ditambahkan!");
            $this->session->set_flashdata('status', false);
            return false;
        }
    }


    //function dengan 1 parameter. $id nilainya dikirimkan oleh controller
    public function get_beasiswa_byid($id)
    {
        return $this->db->get_where($this->tabel, ['id' => $id])->row();
        /*
        get_where hampir sama seperti get, bedanya ada tambahan klause where untuk menampilkan data berdasarkan kriteria tertentu. 'id'=>$id artinya data yang diambil adalah data jenis_beasiswa dengan nilai id = $id. row() digunakan untuk mengambil satu baris data, beda dengan result() yang mengambil semua data
        */
    }

    public function update_beasiswa()
    {
        $data = [
            'nama_beasiswa' => $this->input->post('nama_beasiswa'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai'),
            'jenis_id' => $this->input->post('jenis_id')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->tabel, $data);
        /* proses update hampir sama seperti insert, bedanya, ada tambahan where (baris 39) untuk menentukan data mana yang akan diperbaharui */
    }
    public function delete_beasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
    }
}
