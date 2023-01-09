<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paket extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_paket'          => [
				'type'           => 'CHAR',
				'constraint'     => '4',
			],
			'name_paket'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
			],
			'harga' => [
				'type'           => 'CHAR',
				'constraint'     => '4',
			],
			'deskripsi' => [
				'type'           => 'TEXT',
				'null'       	 => true,
            ],
		]);
		$this->forge->addPrimaryKey('id_paket', true);
		$this->forge->createTable('paket');
	}
    

    public function down()
    {
		$this->forge->dropTable('paket');
    }
}
