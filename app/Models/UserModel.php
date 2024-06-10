<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserModel extends Authenticatable implements JWTSubject
{
    public $timestamps = false;
    function getJWTIdentifier(){
        return $this->getKey();
        
    }
    function getJWTCustomClaims(){
        return [];
    }
   

    protected $table ='m_user';
    protected $primaryKey ='user_id';
    protected $fillable = ['username','nama','password','level_id', 'image'];

    public function level() : BelongsTo {
        return $this -> belongsTo(LevelModel::class,'level_id','level_id');
    }
    protected function image(): Attribute{
        return Attribute::make(get: fn ($image) => url('/storage/posts/' . $image), );
}
}
