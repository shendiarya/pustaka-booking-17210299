<?php
class Matakuliah extends CI_Controller
{
    function __construct()
    {
     parent::__construct();
     $this->load->library('form_validation');
    }

    public function index()

    {
        $this->load->view('view_form_matakuliah') ;
    }

    public function cetak()
    {
       $this->form_validation->set_rules(
   'kode',
   'Kode Matakuliah',
   'required|min_length[3]',
   [
    'required' => 'Kode Matakuliah Harus diisi',
    'min_length' => 'Kode terlalu pendek'
   ]
  );

  $this->form_validation->set_rules(
   'nama',
   'Nama Matakuliah',
   'required|min_length[3]',
   [
    'required' => 'Nama Matakuliah Harus diisi',
    'min_length' => 'Nama terlalu pendek'
   ]
  );

  $this->form_validation->set_rules(
   'status',
   'Status Matakuliah',
   'required',
   [
    'required' => 'Status Matakuliah Harus diisi'
   ]
  );


  if ($this->form_validation->run() != true) {
   $this->load->view('view-form-matakuliah');
  } else {
   $data = [
    'kode' => $this->input->post('kode'),
    'nama' => $this->input->post('nama'),
    'sks' => $this->input->post('sks'),
    'status' => $this->input->post('status'),
   ];
   $this->load->view('view-data-matakuliah', $data);
  }
    }
}