<?php

namespace App\Controllers;

use App\Models\LaporanModel;
use App\Models\UserModel;
use stdClass;

class Home extends BaseController
{
    public function index()
    {
        $Laporanmodel = new LaporanModel();

        $id = session()->get('currentuser')['userid'];
        $tablename = "laporan_" . $id;

        $Today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day', strtotime($Today)));

        $db = \Config\Database::connect();
        $tablename = "laporan_" . $id;
        if($db->tableExists($tablename)){
            $data = [
                'userTable' => $Laporanmodel->Calllaporan($tablename),
                'todayTable' => $Laporanmodel->Todaylaporan($tablename, $Today),
                'yesterdayTable' => $Laporanmodel->Todaylaporan($tablename, $yesterday),
                'pemasukkan' => $Laporanmodel->getLaporan($tablename, 1),
                'pengeluaran' => $Laporanmodel->getLaporan($tablename, 2),
                'date' => date('Y-m-d', strtotime('-1 day', strtotime($Today)))
            ];
            return view('Dashboard', $data);
            
        }else{
            return redirect()->to('/newlaporan');
        }        
    }

    public function updateForm(){
        return redirect()->to('/updateProfile');
    }

    public function updatelaporan($id){
        $updateModel = new LaporanModel();

        $name = session()->get('currentuser')['userid'];

        $tablename = "laporan_" . $name;
        $Row = $updateModel->Callsingle($id, $tablename);
        
        $data = [
            'id' => $id,
            'nama_transaksi' => $Row->nama_transaksi,
            'kategori' => $Row->kategori,
            'nominal' => $Row->nominal,
            'Tanggal' => $Row->Tanggal,
        ];
        
        return view('Update_catatan', $data);
    }
}
