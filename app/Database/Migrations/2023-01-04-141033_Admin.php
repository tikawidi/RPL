<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',

			],
            'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'no_hp'        =>[
                'type'           => 'CHAR',
                'constraint'     => '13',
            ],
            'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '225',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
			],
			
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]
 
		]);
		$this->forge->addPrimaryKey('username', true);
		$this->forge->createTable('admin');
    }

    public function down()
    {
		$this->forge->dropTable('admin');
    }
}
