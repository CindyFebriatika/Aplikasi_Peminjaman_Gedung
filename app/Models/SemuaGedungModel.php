<?php

namespace App\Models;

use CodeIgniter\Model;

class SemuaGedungModel extends Model
{
    protected $table = 'gedung';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [];

    public function getAllData()
    {
        return $this ->findAll();
    }

  public function getSemuaGedung()
  {
    $data = [
        [
            "nama_gedung" => "Gedung Sakura",
            "kapasitas_gedung" => "150 orang",
            "foto_gedung" => "gedungsakura.jpg",
            "status_gedung" => "Terpakai"
        ],
        [
            "nama_gedung" => "Gedung Seroja",
            "kapasitas_gedung" => "170 orang",
            "foto_gedung" => "gedungseroja.jpg",
            "status_gedung" => "Kosong"
        ],
        [
            "nama_gedung" => "Gedung KHD",
            "kapasitas_gedung" => "200 orang",
            "foto_gedung" => "gedungkhd.jpg",
            "status_gedung" => "Kosong"
        ],
        [
            "nama_gedung" => "Gedung GSG",
            "kapasitas_gedung" => "500 orang",
            "foto_gedung" => "gedunggsg.jpg",
            "status_gedung" => "Terpakai"
        ],
        [
            "nama_gedung" => "Gedung Kuliah Bersama",
            "kapasitas_gedung" => "400 orang",
            "foto_gedung" => "gedunggkb.jpg",
            "status_gedung" => "Terpakai"
        ],
        [
            "nama_gedung" => "Gedung Melati",
            "kapasitas_gedung" => "100 orang",
            "foto_gedung" => "gedungmelati.jpg",
            "status_gedung" => "Kosong"
        ],
        [
            "nama_gedung" => "Gedung PPA",
            "kapasitas_gedung" => "200 orang",
            "foto_gedung" => "gedungppa.jpg",
            "status_gedung" => "Terpakai"
        ]
        ];

        return $data;
  }
}
