<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserP5 extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'usersp5';
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];

    public function getOneCompany(){
        // Specify the foreign key in the relationship
        return $this->hasOne("App\Models\Companies", 'user_id');
    }

    public function getManyCompany(){
        // Specify the foreign key in the relationship
        return $this->hasMany("App\Models\Companies", 'user_id');
    }
}
