<?php

namespace App\Models;

use CodeIgniter\Model;

class BabtisModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'babtis';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'tempat_lahir', 'tanggal_lahir', 'nama_ayah', 'nama_ibu', 'wali_ayah', 'wali_ibu', 'tanggal_pengembalian', 'majelis', 'tempat', 'pelayah'];
}
