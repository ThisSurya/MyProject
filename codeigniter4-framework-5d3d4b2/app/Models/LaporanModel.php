<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Forge;

class LaporanModel extends Model
{
    //rules
    public $rules = [
        'nama_transaksi' => 'required|alpha_numeric',
        'kategori' => 'required',
        'nominal' => 'required|integer'
    ];
    public $allowedFields = [
        'nama_transaksi', 'kategori', 'nominal', 'Tanggal'
    ];

    //Insert laporan
    public function Insertlaporan($data, $tablename){
        $transaksi = [
            'nama_transaksi' => $data['nama_transaksi'],
            'kategori' => $data['kategori'],
            'nominal' => $data['nominal'],
            'Tanggal' => $data['Tanggal'],
        ];
        $this->db->table($tablename)->insert($data);

    }

    //manggil laporan
    public function Calllaporan($tableName){
        $db = \Config\Database::connect();
        if($db->tableExists($tableName)){
            return $db->table($tableName)->get()->getResult();
        }else {
            echo "Nope";
        }
    }

    public function Callsingle($id, $tableName){
        $db = \Config\Database::connect();

        if($db->tableExists($tableName)){
            return $db->table($tableName)->where('Transaksi_id', $id)->get()->getRow();
        }else{
            echo "hallo";
        }
    }

    //Membuat table laporan
    public function Newlaporan(){
        $dbForge = \Config\Database::forge();
        $sess = session();
        $data = $sess->get('currentuser')['userid'];
        
        $tableName = 'laporan_' . $data;

        $dbForge->addField([
            'Transaksi_id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'nama_transaksi' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                NULL
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => '40'
            ],
            'nominal' => [
                'type' => 'int',
                'constraint' => '13'
            ],
            'Tanggal' => [
                'type' => 'DATETIME',
                'CURRENT_TIMESTAMP',
            ]
        ]);

        
        $dbForge->addKey('Transaksi_id', true);
        $dbForge->createTable($tableName);


        return true;
    }

    //Update Laporan
    public function Updatelaporan($data, $tableName){
        $find = [
            'Transaksi_id' => $data['id']
        ];
        $transaksi = [
            'nama_transaksi' => $data['nama_transaksi'],
            'kategori' => $data['kategori'],
            'nominal' => $data['nominal'],
            'Tanggal' => $data['Tanggal'],
        ];
        $this -> db -> table($tableName) -> update($transaksi, $find);
    }
}