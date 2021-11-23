<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_matakuliah');
    }
    public function cetak()
    {
        $kode = $this->input->post('kode', true);
        $nama = $this->input->post('nama', true);
        $sks = $this->input->post('sks', true);

        $data = [
            'kode' => $kode,
            'nama' => $nama,
            'sks' => $sks
        ];

        $this->load->view('view_data_matakuliah', $data);
    }
}