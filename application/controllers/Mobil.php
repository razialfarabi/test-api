<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function index()
    {
        $data['mobil'] = $this->db->get('mobil')->result_array();
        $this->load->view('templates/header');
        $this->load->view('mobil/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('mobil/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'no_kerangka' => $this->input->post('nokerangka'),
            'no_polisi' => $this->input->post('nopolisi'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'tahun' => $this->input->post('tahun')
        ];

        $this->db->insert('mobil', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-2" role="alert"  role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>Data mobil berhasil ditambahkan</div>');
        redirect('mobil');
    }

    public function hapus($id)
    {
        $data = $this->db->get_where('mobil', ['no_kerangka' => $id])->row_array();
        $this->db->delete('mobil', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-2" role="alert"  role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>Data mobil berhasil dihapus</div>');
        redirect('mobil');
    }

    public function ubah($id)
    {
        $data['mobil'] = $this->db->get_where('mobil', ['no_kerangka' => $id])->row_array();
        $this->load->view('templates/header');
        $this->load->view('mobil/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function simpanubah()
    {
        $data = [
            'no_kerangka' => $this->input->post('nokerangka'),
            'no_polisi' => $this->input->post('nopolisi'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'tahun' => $this->input->post('tahun')
        ];

        $this->db->where('no_kerangka', $this->input->post('nokerangka'));
        $this->db->update('mobil', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-2" role="alert"  role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>Data mobil berhasil diubah</div>');
        redirect('mobil');
    }
}
