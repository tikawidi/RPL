<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = "order";
    protected $primaryKey = "id_order";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_order', 'jumlah_baju', 'berat_baju','id_paket','username','order' ];
    public function getOrder()
    {
        return $this->findAll();
    }
}