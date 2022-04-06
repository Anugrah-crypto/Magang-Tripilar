<?php

namespace App\Controllers;

use CodeIgniter\Database\Config;
use App\Controllers\M_Barang as ControllersM_Barang;
use CodeIgniter\Controller;
use App\Models\M_Barang;

class barang extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Barang();
    }
    public function index()
    {
        //$barang = $this->model->findAll();
        //return view('barang/index', $data);
        $data =
            [
                'judul' => 'Data Kerusakan',
                'barang' => $this->model->getAllData()
            ];

        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        return view('barang/index', $data);
        echo view('templates/v_footer');
    }
    public function tambah()
    {
        $data = [
            'BKT' => $this->request->getPost('BKT'),
            'IsJaringan' => $this->request->getPost('IsJaringan'),
            'IsSoftware' => $this->request->getPost('IsSoftware'),
            'IsHardware' => $this->request->getPost('IsHardware'),
            'Usr_Pelapor' => $this->request->getPost('Usr_Pelapor'),
            'Keterangan_Pelapor' => $this->request->getPost('Keterangan_Pelapor'),
            //'Usr_Teknisi' => $this->request->getPost('Usr_Teknisi'),
            //'Keterangan_Teknisi' => $this->request->getPost('Keterangan_Teknisi'),
            //'IsFinisih' => $this->request->getPost('IsFinisih')

        ];
        $success = $this->model->tambah($data);
        if ($success) {
            return redirect()->to('http://localhost:8080/barang');
        }
    }
    public function create()
    {
        $data = [
            'judul' => 'Form Tambah Data'
        ];
        //echo view('templates/v_header', $data);
        //echo view('templates/v_sidebar');
        //echo view('templates/v_topbar');
        return view('barang/create', $data);
        //echo view('templates/v_footer');
    }
    public function teknisi()
    {
        $data = [
            'judul' => 'Teknisi',
            'barang' => $this->model->getAllData()

        ];
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        return view('barang/teknisi', $data);
        echo view('templates/v_footer');
    }
}
