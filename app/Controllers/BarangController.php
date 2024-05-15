<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use CodeIgniter\HTTP\ResponseInterface;

class BarangController extends BaseController
{
    public function index()
    {
        $barangModel = new BarangModel();
        $data['barang'] = $barangModel->ambilData();
        return view('v_barang',$data);
    }
}
