<?php
class Matakuliah extends CI_Controller
{
     public function index()
     {
        $this->load->view('v_form_matkul');
     }
     public function cetak()
     {
         $data = [
         'kode' => $this->input->post('kode'),
         'nama' => $this->input->post('nama'),
         'sks' => $this->input->post('sks')
         ];
         $this->load->view('v_data_matkul', $data);
     }
}
