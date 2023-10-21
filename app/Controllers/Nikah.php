<?php

namespace App\Controllers;

use App\Libraries\Decode;
use App\Models\NikahModel;

class Nikah extends BaseController
{
    protected $nikah;
    protected $lib;
    public function __construct() {
        $this->nikah = new NikahModel();
        $this->lib = new Decode();
    }

    public function index(): string
    {
        return view('nikah', ['title'=>'Nikah', 'icon'=>'fas fa-ring']);
    }

    public function read(): object
    {
        return $this->respond($this->nikah->findAll());
    }

    public function store(): object
    {
        $item = $this->request->getJSON();
        try {
            $item->file_babtis_suami = isset($item->berkas_babtis_suami) ? $this->lib->decodebase64($item->berkas_babtis_suami->base64) : null;
            $item->file_babtis_istri = isset($item->berkas_babtis_istri) ? $this->lib->decodebase64($item->berkas_babtis_istri->base64) : null;
            $item->file_sidi_suami = isset($item->berkas_sidi_suami) ? $this->lib->decodebase64($item->berkas_sidi_suami->base64) : null;
            $item->file_sidi_istri = isset($item->berkas_sidi_istri) ? $this->lib->decodebase64($item->berkas_sidi_istri->base64) : null;
            $this->nikah->insert($item);
            $item->id = $this->nikah->getInsertID();
            return $this->respondCreated($item);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    public function update(): object
    {
        $item = $this->request->getJSON();
        try {
            $this->nikah->update($item->id, $item);
            return $this->respondUpdated($item);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
    public function delete($id = null): object
    {
        try {
            $this->nikah->delete($id);
            return $this->respondDeleted(true);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
}
