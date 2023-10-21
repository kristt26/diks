<?php

namespace App\Controllers;

use App\Libraries\Decode;
use App\Models\SidiModel;

class Sidi extends BaseController
{
    protected $sidi;
    protected $lib;
    public function __construct() {
        $this->sidi = new SidiModel();
        $this->lib = new Decode();
    }

    public function index(): string
    {
        return view('sidi', ['title'=>'Sidi', 'icon'=>'fas fa-cross']);
    }

    public function read(): object
    {
        return $this->respond($this->sidi->findAll());
    }

    public function store(): object
    {
        $item = $this->request->getJSON();
        try {
            $item->file = isset($item->berkas) ? $this->lib->decodebase64($item->berkas->base64) : null;
            $this->sidi->insert($item);
            $item->id = $this->sidi->getInsertID();
            return $this->respondCreated($item);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    public function update(): object
    {
        $item = $this->request->getJSON();
        try {
            $this->sidi->update($item->id, $item);
            return $this->respondUpdated($item);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
    public function delete($id = null): object
    {
        try {
            $this->sidi->delete($id);
            return $this->respondDeleted(true);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
}
