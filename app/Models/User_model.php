<?php

namespace App\Models;

use CodeIgniter\Model;

$db = \Config\Database::connect();

class User_model extends Model
{
    protected $table = 'tbl_users';
    protected $allowedFields = ['id','email', 'uniid', 'name', 'reg_token', 'password'];
    protected $primaryKey = 'id';

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // insert is with ci4
    public function getOne($id){
        $builder = $this->db->table('tbl_users');
        $builder->where('uniid', $id);
        $result = $builder->get();
        return $result->getRow();
    }

    // --------------------------------------------

    public function getToken($token){
        $builder = $this->db->table('tbl_users');
        $builder->where('reg_token', $token);
        $result = $builder->get();
        return $result->getRow();
    }

    // --------------------------------------------

    public function getMail($mail){
        $builder = $this->db->table('tbl_users');
        $builder->where('email', $mail);
        $result = $builder->get();
        return $result->getRow();
    }

    // --------------------------------------------

    public function checkAuth($mail, $token){
        $builder = $this->db->table('tbl_users');
        $builder->where('email', $mail);
        $builder->where('reg_token', $token);
        $result = $builder->get();
        return $result->getRow();
    }

}
