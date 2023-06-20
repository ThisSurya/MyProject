<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanModel;
use App\Models\UserModel;

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
            return redirect()->to('/');
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
        $Usermdl = new UserModel();
        $simpan = $this -> request -> getPost();
        $sess = session();

        $id = session()->get('currentuser')['userid'];
        $tablename = "laporan_" . $id;

        $Check['profile'] = $Usermdl->find($id);

        if($Check['profile']->id == $sess->get('currentuser')['userid'])
        {
            if($this->validate($Laporanmodel->rules)){
                if($simpan['kategori'] == '2'){
                    $simpan['nominal'] *= -1;
                }
                $Laporanmodel->Updatelaporan($simpan, $tablename);
                return redirect()->to('/');
            }  else{
                $Error = [
                    'validation' => $this->validator,
                    'id' => $id,
    
                    'nama_transaksi' => $this->request->getPost('nama_transaksi'),
                    'kategori' => $this->request->getPost('kategori'),
                    'nominal' => $this->request->getPost('nominal'),
                    'Tanggal' => $this->request->getPost('Tanggal'),
                ];
                return view('Update_catatan', $Error);
            }
        }
        else{
            echo "Pembajakan yang bagus";
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
