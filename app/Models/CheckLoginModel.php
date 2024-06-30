<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckLoginModel extends Model
{
    Protected $table = 'register_users';

    Public function checkIfExists($username, $password)
    {
        return $this->where('username', $username)
                    ->where('password', $password)
                    ->countAllResults() > 0;
    }
}