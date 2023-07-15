<?php

namespace App\Models;

use CodeIgniter\Model;

class PengembalianModel extends Model
{
    protected $table = 'pengembalian';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [];

    public function getAllData()
    {
        return $this ->findAll();
    }

  public function getPengembalian()
  {
    $data = [
        [
            "nama_pengembalian" => "Ema Yudiana Cahyani",
            "bukti_pengembalian" => "Foto KTM"
        ],
        [
            "nama_pengembalian" => "Cindy Febriatika",
            "bukti_pengembalian" => "foto gedung sudah dibersihkan"
        ],
        [
            "nama_pengembalian" => "Nuraini",
            "bukti_pengembalian" => "foto kunci sudah dikembalikan"
        ],
        ];

        return $data;
  }
}
