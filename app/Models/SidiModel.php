<?php

namespace App\Models;

use CodeIgniter\Model;

class SidiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sidi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'tempat_lahir', 'tanggal_lahir', 'pendidikan', 'alamat', 'kontak', 'nama_ayah', 'nama_ibu', 'wali_ayah', 'wali_ibu', 'klasis', 'tanggal', 'dibabtis_oleh', 'ketua_phmj', 'sekretaris_phmj', 'majelis', 'file'];
}
