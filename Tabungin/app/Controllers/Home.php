<?php

namespace App\Controllers;

use App\Models\LaporanModel;
use stdClass;

class Home extends BaseController
{
    public function index()
    {
        $Laporanmodel = new LaporanModel();

        $id = session()->get('currentuser')['userid'];
        $tablename = "laporan_" . $id;

        $data = [
            'userTable' => $Laporanmodel->Calllaporan($tablename),
            'pemasukkan' => $Laporanmodel->getPemasukkan($tablename),
            'pengeluaran' => $Laporanmodel->getPengeluaran($tablename)
        ];

        return view('Dashboard', $data);
    }

    public function updatelaporan($id){
        $updateModel = new LaporanModel();
        $antiObjek = new stdClass();

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
        
        return view('Updatecatatan', $data);
    }
}
