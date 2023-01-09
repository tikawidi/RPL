<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Tampil extends BaseController
{
    protected $order;
    function __construct()
    {
        $this->order = new OrderModel();
    }
    public function index()
    {
        $data['order'] = $this->order->findAll();

        return view('TampilA', $data);
    }
}