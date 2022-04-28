<?php
class Dilemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-dilemas');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
            'required' => "Nama Siswa Harus diisi",
            'min_length' => "Nama terlalu pendek Minimal 3 Karakter"
        ]);
        $this->form_validation->set_rules('nis', 'nis siswa', 'required|min_length[3]', [
            'required' => "Nis Siswa Harus diisi",
            'min_length' => "Nis terlalu pendek Minimal 3 karakter"
        ]);
        $this->form_validation->set_rules('kelas', 'kelas siswa', 'required|min_length[3]', [
            'required' => "Kelas Siswa Harus diisi",
            'min_length' => "Input Kelas terlalu pendek Minimal 3 karakter"
        ]);
        $this->form_validation->set_rules('tanggal', 'tanggal lahir siswa', 'required|min_length[3]', [
            'required' => "Tanggal Lahir Harus diisi",
            'min_length' => "Input Tanggal terlalu pendek Minimal 3 karakter"
        ]);
        $this->form_validation->set_rules('tempat', 'tempat lahir siswa', 'required|min_length[3]', [
            'required' => "Tempat Lahir Siswa Harus diisi",
            'min_length' => "Tempat terlalu pendek Minimal 3 karakter"
        ]);
        $this->form_validation->set_rules('alamat', 'alamat siswa', 'required|min_length[3]', [
            'required' => "Alamat Siswa Harus diisi",
            'min_length' => "Alamat terlalu pendek Minimal 3 karakter"
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('view-form-dilemas');
        } else {
            $nama = $this->input->post('nama', TRUE);
            $nis = $this->input->post('nis', TRUE);
            $kelas = $this->input->post('kelas', TRUE);
            $tanggal = $this->input->post('tanggal', TRUE);
            $tempat = $this->input->post('tempat', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $jk = $this->input->post('jk', TRUE);
            $agama = $this->input->post('agama', TRUE);

            $data = [
                'nama' => $nama,
                'nis' => $nis,
                'kelas' => $kelas,
                'tanggal' => $tanggal,
                'tempat' => $tempat,
                'alamat' => $alamat,
                'jk' => $jk,
                'agama' => $agama
            ];
            $this->load->view('view-data-dilemas', $data);
        }
    }
}
