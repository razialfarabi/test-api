<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mobil extends REST_Controller
{
    public function index_get()
    {
        $id = $this->get('id');
        if ($id == null) {
            $data = $this->db->query('SELECT * FROM mobil')->result_array();
        } else {
            $data = $this->db->get_where('mobil', ['id' => $id])->result_array();
        }

        if ($data) {
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        $data = $this->db->get_where('mobil', ['id' => $id])->row_array();

        if ($id == null) {
            $this->response([
                'status' => FALSE,
                'message' => 'ID kosong'
            ], REST_Controller::HTTP_NOT_FOUND);
        } else {
            if ($id = $data) {
                $this->db->delete('mobil', $id);
                $this->response([
                    'status' => true,
                    'message' => 'Deleted'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'ID tidak ada'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'no_polisi' => $this->post('no_polisi'),
            'merek' => $this->post('merek'),
            'tipe' => $this->post('tipe'),
            'tahun' => $this->post('tahun'),
            'no_kerangka' => $this->post('no_kerangka')
        ];

        if ($data) {
            $this->db->insert('mobil', $data);
            $this->response([
                'status' => true,
                'message' => 'Data berhasil ditambahkan'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal ditambahkan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'no_kerangka' => $this->put('no_kerangka'),
            'no_polisi' => $this->put('no_polisi'),
            'merek' => $this->put('merek'),
            'tipe' => $this->put('tipe'),
            'tahun' => $this->put('tahun')
        ];

        $data1 = $this->db->get_where('mobil', ['id' => $id])->row_array();

        if ($id == null) {
            $this->response([
                'status' => FALSE,
                'message' => 'ID kosong'
            ], REST_Controller::HTTP_NOT_FOUND);
        } else {
            if ($id == $data1['id']) {
                $this->db->update('mobil', $data, ['id' => $id]);
                $this->response([
                    'status' => true,
                    'message' => 'Updated'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'ID tidak ada'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }
}
