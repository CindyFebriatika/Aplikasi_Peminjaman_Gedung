<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;

class Booking extends BaseController
{
    protected $booking;
    public function __construct()
    {
        $this->booking = new BookingModel();
    }
    public function index()
    {
        $data['data_gedung'] = $this->booking->getAllData();
        return view('booking/semuabooking', $data);
    }

    public function all()
    {
        $data['semuabooking'] = $this->booking->getAllDataJoin();
        return view('booking/semuabooking', $data);
    }

    public function add()
    {
        return view("semuagedung/add");
    }

    public function store()
    {
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film Harus diisi'
                ]
            ],
            'id_genre'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi Harus diisi'
                ]
            ],
            'cover'     => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi file.',
                    'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
                ]
            ]
        ]);
    }    
}
