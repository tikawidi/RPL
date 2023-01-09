<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Oders extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_order' => [
                'type' => 'CHAR',
                'constraint' => '100',
            ],
            'jumlah_baju' => [
                'type' => 'CHAR',
                'constraint' => '10',
            ],
            'berat_baju' => [
                'type' => 'CHAR',
                'constraint' => '10',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'id_paket' => [
                'type' => 'CHAR',
                'constraint' => '4',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'update_kondisi' => [
                'type' => 'ENUM',
                'constraint' => ['mencuci', 'selesai', 'setrika', 'siap diambil'],
            ],
            'order' => [
                'type' => 'ENUM',
                'constraint' => ['antar/jemput sendir', 'antar/jemput karyawan'],
            ],
            'pembayaran' => [
                'type' => 'ENUM',
                'constraint' => ['cash', 'Transfer'],
            ],


        ]);
        $this->forge->addPrimaryKey('id_order', true);
        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}
