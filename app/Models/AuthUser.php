<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class AuthUser extends Authenticable
{
    use HasFactory;
    protected $guard = 'authUser';
    protected $table = 'auth_users';

    public function rmRecord()
    {
        return $this->hasOne(RmRecord::class, 'rm_email', 'email');
    }
}
