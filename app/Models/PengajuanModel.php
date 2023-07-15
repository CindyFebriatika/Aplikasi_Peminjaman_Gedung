<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [];

    public function getAllData()
    {
        return $this ->findAll();
    }

  public function getPengajuan()
  {
    $data = [
        [
            "nama_peminjam" => "Ema Yudiana Cahyani",
            "npm" => "21753000", 
            "nama_gedung" =>  "Gedung Sakura",
            "tujuan_peminjaman" => "untuk stadium general"
        ],
        [
            "nama_peminjam" => "Cindy Febriatika",
            "npm" => "21753216", 
            "nama_gedung" =>  "Gedung GSG",
            "tujuan_peminjaman" => "untuk acara polinela bersholawat"
        ],
        [
            "nama_peminjam" => "Nuraini",
            "npm" => "21753001", 
            "nama_gedung" =>  "Gedung Kuliah Bersama",
            "tujuan_peminjaman" => "untuk pertemuan antar prodi"
        ],
        [
            "nama_peminjam" => "Ivan Setiawan",
            "npm" => "21753022", 
            "nama_gedung" =>  "Gedung Melati",
            "tujuan_peminjaman" => "untuk pertemuan ukm olahraga"
        ],
        [
            "nama_peminjam" => "Sutan Ambia",
            "npm" => "21753211", 
            "nama_gedung" =>  "Gedung Melati",
            "tujuan_peminjaman" => "untuk pertemuan pointer"
        ]
        ];

        return $data;
  }
}
