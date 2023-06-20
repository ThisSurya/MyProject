<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Updateprofile extends BaseController
{
    public function index()
    {
        $id = session()->get('currentuser')['userid'];
        $User = new UserModel();

        $data['Table'] = $User->find($id);
        
        return view('Update_profile', $data);
    }

    public function Updatedata(){
        $userModel = new UserModel();
        $id = session()->get('currentuser')['userid'];
        $Dataprofile = $this->request->getPost();
        $sess = session();


        if($this->validate($userModel->Updaterules)){
            session()->set('currentuser', ['email' => $Dataprofile['email'], 'userid'   => $id]);
            $result = $userModel->updateUser($Dataprofile, $id);
            return redirect()->to('/');
            
        }else{
            $Error = [
                'validation' => $this->validator,
                'id' => $id,
                'Table' => $userModel->find($id),

                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email')
            ];
            return view('Update_profile', $Error);
        }
        
    }
}
