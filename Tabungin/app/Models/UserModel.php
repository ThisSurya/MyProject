<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = [
        'username', 'password', 'fullname'
    ];

    protected $returnType = \App\Entities\User::class;

    public $rules = [
        'username' => 'required|alpha_numeric|min_length[5]|is_unique[users.username]',
        'password' => 'required|min_length[8]',
        'confirmation' => 'required_with[password]|matches[password]',
        'fullname' => 'required|min_length[5]'
    ];

    public $Updaterules = [
        'username' => 'required|alpha_numeric|min_length[5]|is_unique[users.username]',
        'fullname' => 'required|min_length[5]'
    ];

    public $loginRules = [
        'username' => 'required',
        'password' => 'required'
    ];

    public function addUser($data){
        $user = new \App\Entities\User();

        $user->username = $data['username'];
        $user->password = $data['password'];
        $user->fullname = $data['fullname'];
        $this->save($user);
        return [$user->username, $this->getInsertID()];
    }

    public function updateUser($data, $id){
        $find = $this->find($id);
        $find->username = $data['username'];
        $find->fullname = $data['fullname'];

        if(!empty($data['password'])){
            $find->password = $data['password'];
        }

        $this->save($find);

        return 1;
    }

    public function login($username, $password){
        $user = $this->where('username', $username)->first();
        if($user && password_verify($password, $user->password)){
            return [$user->username, $user->id];
        }else{
            return false;
        }
    }
}
