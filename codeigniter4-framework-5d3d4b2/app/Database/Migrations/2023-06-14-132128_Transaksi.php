<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Transaksi_id' => [
                'type' => 'INT',
                'constraint' => 13
            ],
            'nama_transaksi' => [
                'type' => 'VARCHAR',
                'constraint' => 100 ,
                NULL
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 40
            ],
            'nominal' => [
                'type' => 'int',
                'constraint' => 13
            ],
            'Tanggal' => [
                'type' => 'DATETIME',
                NULL
            ]
        ]);
        $this->forge->addKey('Transaksi_id', true);
        $this->forge->createTable('table_', true);
    }

    public function down()
    {
        //
    }
}
