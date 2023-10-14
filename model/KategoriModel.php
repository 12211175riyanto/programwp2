<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'tb_kategori';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kategori', 'kode_ddc'];
}
