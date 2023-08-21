<?php

namespace App\Models;

use CodeIgniter\Shield\Models\UserModel;

class MyUserModel extends UserModel
{
    public function listAll()
    {
        return $this->db->table('users')->get()->getResultArray();
    }
}
