<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengembalianModel;

class Pengembalian extends BaseController
{
    protected $pengembalian;
    public function __construct()
    {
        $this->pengembalian = new PengembalianModel();
    }
    public function index()
    {
        $data['pengembalians'] = $this->pengembalian->getPengembalian();
        return view("pengembalian/index", $data);
    }

    public function all()
    {
        $data['datapengembalian'] = $this -> pengembalian -> getAllData();
        return view ("pengembalian/datapengembalian", $data);
    }
}
