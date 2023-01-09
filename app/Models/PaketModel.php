<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = "paket";
    protected $primaryKey = "id_paket";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_paket', 'nama_paket'];
}