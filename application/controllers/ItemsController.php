<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemsController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Items');
    }
    public function index()
    {
        $data['model'] = $this->Items->select();
        $data['title'] = 'Barang |';

        $this->load->view('master/header', $data)
            ->view('master/sidebar')
            ->view('Items/IndexItems', $data)
            ->view('master/footer');
    }

    public function simpan()
    {
        if ($this->Items->validation("save")) {
            $this->Items->save();

            $html = $this->load->view('Items/table', array('model' => $this->Items->select()), true);

            $callback = array(
                'status' => 'sukses',
                'pesan' => 'Data berhasil disimpan',
                'html' => $html
            );
        } else {
            $callback = array(
                'status' => 'gagal',
                'pesan' => validation_errors()
            );
        }

        echo json_encode($callback);
    }

    public function ubah($id)
    {
        if ($this->Items->validation("update")) {
            $this->Items->edit($id);

            $html = $this->load->view('Items/table', array('model' => $this->Items->select()), true);

            $callback = array(
                'status' => 'sukses',
                'pesan' => 'Data berhasil diubah',
                'html' => $html
            );
        } else {
            $callback = array(
                'status' => 'gagal',
                'pesan' => validation_errors()
            );
        }

        echo json_encode($callback);
    }

    public function hapus($id)
    {
        $this->Items->delete($id);

        $html = $this->load->view('Items/table', array('model' => $this->Items->select()), true);

        $callback = array(
            'status' => 'sukses',
            'pesan' => 'Data berhasil dihapus',
            'html' => $html
        );

        echo json_encode($callback);
    }
}
