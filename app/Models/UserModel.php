<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table ='m_user';
    protected $primary_key ='user_id';
}
