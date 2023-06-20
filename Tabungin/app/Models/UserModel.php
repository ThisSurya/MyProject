<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = [
        'username', 'password', 'email'
    ];

    protected $returnType = \App\Entities\User::class;

    public $rules = [
        'username' => 'required|alpha_numeric|min_length[5]',
        'password' => 'required|min_length[8]',
        'confirmation' => 'required_with[password]|matches[password]',
        'email' => 'required|min_length[5]|is_unique[users.email]'
    ];

    public $Updaterules = [
        'username' => 'required|alpha_numeric|min_length[5]',
        'email' => 'required|min_length[5]|is_unique[users.email]'
    ];

    public $loginRules = [
        'email' => 'required',
        'password' => 'required'
    ];

    public function addUser($data){
        $user = new \App\Entities\User();

        $user->username = $data['username'];
        $user->password = $data['password'];
        $user->email = $data['email'];
        $this->save($user);
        return [$user->username, $this->getInsertID()];
    }

    public function updateUser($data, $id){
        $find = $this->find($id);
        $find->username = $data['username'];
        $find->email = $data['email'];

        if(!empty($data['password'])){
            $find->password = $data['password'];
        }

        $this->save($find);

        return 1;
    }

    public function login($email, $password){
        $user = $this->where('email', $email)->first();
        if($user && password_verify($password, $user->password)){
            return [$user->email, $user->id];
        }else{
            return false;
        }
    }
}
