<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'gedung';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [];

    public function getAllData()
    {
        return $this ->findAll();
    }

  public function getBooking()
  {
    $data = [
        [
            "nama_gedung" => "Gedung Sakura",
            "kapasitas_gedung" => "150",
            "foto_gedung" => "gedungsakura.jpg"
        ],
        [
            "nama_gedung" => "Gedung Seroja",
            "kapasitas_gedung" => "150",
            "foto_gedung" => "gedungseroja.jpg"
        ],
        [
            "nama_gedung" => "Gedung KHD",
            "kapasitas_gedung" => "150",
            "foto_gedung" => "gedungkhd.jpg"
        ]
        ];

        return $data;
  }
  public function getAllDataJoin(){
    $query = $this -> db ->table("gedung")
    ->select("gedung.*gedung.nama_gedung")
    ->join("pengajuan", "gedung.idpeminjam = pengajuan.id_peminjam");
    return $query ->get()->getResultArray();
  }
}
