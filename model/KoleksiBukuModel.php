<?php

namespace App\Models;

use CodeIgniter\Model;

class KoleksiBukuModel extends Model
{
    protected $table = 'tb_koleksibuku';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tb_buku_id', 'nomor_koleksi', 'status_koleksi'];
}
