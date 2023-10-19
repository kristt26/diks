<?php

namespace App\Models;

use CodeIgniter\Model;

class NikahModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'nikah';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_suami', 'nama_ayah_suami', 'nama_ibu_suami', 'alamat_suami', 'klasis_baptis_suami', 'tanggal_babtis_suami', 'babtis_oleh_suami', 'klasis_sidi_suami', 'tanggal_sidi_suami', 'sidi_oleh_suami', 'nama_istri', 'nama_ayah_istri', 'nama_ibu_istri', 'alamat_istri', 'klasis_babtis_istri', 'tanggal_babtis_istri', 'babtis_oleh_istri', 'klasis_sidi_istri', 'tanggal_sidi_istri', 'sidi_oleh_istri', 'file_babtis_suami', 'file_babtis_istri', 'file_sidi_suami', 'file_sidi_istri', 'tempat_lahir_suami','tempat_lahir_istri', 'tanggal_lahir_suami', 'tanggal_lahir_istri'];
}
