<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanModel;

class Catatan extends BaseController
{
    public function index()
    {
        $sess = session();
        $data['id'] = $sess->get('currentuser')['userid'];

        $db = \Config\Database::connect();
        $tablename = "laporan_" . $data['id'];
        if($db->tableExists($tablename)){
            return view('view_catatan');
        }else{
            return redirect()->to('/newlaporan');
        }
    }

    public function Insertdata(){
        $simpan = $this->request->getPost();
        $Laporanmodel = new LaporanModel();

        $data['id'] = session()->get('currentuser')['userid'];

        $tablename = "laporan_" . $data['id'];

        if($this->validate($Laporanmodel->rules)){
            if($simpan['kategori'] == '2'){
                $simpan['nominal'] *= -1;
            }
            $Laporanmodel->Insertlaporan($simpan, $tablename);
        }else{
            $data = [
                'validation' => $this->validator,
                'input' => $this->request->getPost()
            ];
            return view('view_catatan', $data);
        }
    }

    public function Updatedata(){
        $Laporanmodel = new LaporanModel();
        $simpan = $this -> request -> getPost();

        $data['id'] = session()->get('currentuser')['userid'];
        $tablename = "laporan_" . $data['id'];

        if($this->validate($Laporanmodel->rules)){
            if($simpan['kategori'] == '2'){
                $simpan['nominal'] *= -1;
            }
            $Laporanmodel->Updatelaporan($simpan, $tablename);
        }  else{
            $data = [
                'validation' => $this->validator,
                'input' => $this->request->getPost()
            ];
            return view('view_catatan', $data);
        }
    }

    public function Inserttable(){
        $newlaporan = new LaporanModel();
        

        $dompet = $newlaporan->Newlaporan();
        if($dompet){
            return view('view_catatan');
        }
    }

    public function Updatelaporan($id){
        $id = request()->getPost('id');
        $data = session()->get('currentuser')['userid'];
        $tablename = "laporan_" . $data();
    }
}
