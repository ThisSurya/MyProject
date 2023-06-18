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
        
        return view('Update_form', $data);
    }

    public function Updatedata(){
        $userModel = new UserModel();
        $id = session()->get('currentuser')['userid'];
        $Dataprofile = $this->request->getPost();

        $result = $userModel->updateUser($Dataprofile, $id);
        session()->set('currentuser', ['username' => $Dataprofile['username'], 'userid'   => $id]);
        return redirect()->to('/');
    }
}
