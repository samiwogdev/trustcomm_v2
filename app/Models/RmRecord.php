<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RmRecord extends Model
{
    use HasFactory;

    protected $table = 'rm_records';     // Specify the table name

    public function authUser()
    {
        return $this->belongsTo(AuthUser::class, 'email', 'rm_email');
    }
}
