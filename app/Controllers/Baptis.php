<?php

namespace App\Controllers;

use App\Models\BabtisModel;

class Baptis extends BaseController
{
    protected $baptis;
    public function __construct() {
        $this->baptis = new BabtisModel();
    }

    public function index(): string
    {
        return view('layout');
    }

    public function read(): object
    {
        return $this->respond($this->baptis->findAll());
    }

    public function store(): object
    {
        $item = $this->request->getJSON();
        try {
            $this->baptis->insert($item);
            $item->id = $this->baptis->getInsertID();
            return $this->respondCreated($item);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    public function update(): object
    {
        $item = $this->request->getJSON();
        try {
            $this->baptis->update($item->id, $item);
            return $this->respondUpdated($item);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
    public function delete($id = null): object
    {
        try {
            $this->baptis->delete($id);
            return $this->respondDeleted(true);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
}
