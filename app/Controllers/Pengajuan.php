<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengajuanModel;

class Pengajuan extends BaseController
{
    protected $pengajuan;
    public function __construct()
    {
        $this->pengajuan = new PengajuanModel();
    }
    public function index()
    {
        $data['pengajuans'] = $this->pengajuan->getPengajuan();
        return view("pengajuan/index", $data);
    }

    public function all()
    {
        $data['datapengajuan'] = $this -> pengajuan -> getAllData();
        return view ("pengajuan/datapengajuan", $data);
    }
}
