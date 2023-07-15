<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SemuaGedungModel;

class SemuaGedung extends BaseController
{
    protected $semuagedung;
    public function __construct()
    {
        $this->semuagedung = new SemuaGedungModel();
    }
    public function index()
    {
        $data['semuagedungs'] = $this->semuagedung->getSemuaGedung();
        return view("semuagedung/index", $data);
    }

    public function all()
    {
        $data['semuadata'] = $this -> semuagedung -> getAllData();
        return view ("semuagedung/semuadata", $data);
    }
    public function add()
    {
        $data["semuadata"] = $this ->semuagedung ->getAllData();
        return view("semuagedung/add"); 
    }
}
