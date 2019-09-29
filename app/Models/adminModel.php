<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class adminModel extends Authenticatable
{

    public function scopeCari($query,$q){
        return $query->Where("username","like","%{$q}%")
                        ->OrWhere("email","like","%{$q}%");
    }
    protected $table = "admin_module";
    protected $hidden = ["id"];
    protected $fillable = ["username","email","password"];
    protected $casts = [
        "created_at" => "datetime",
        "updated_at" => "datetime"
    ];
}
