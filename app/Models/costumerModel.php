<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class costumerModel extends Model
{
	public function scopeCari($query,$q){
		return $query->Where('nama','like',"%{$q}%")
						->OrWhere('no_ktp','like',"%{$q}%")
						->OrWhere('alamat','like',"%{$q}%")
						->OrWhere('no_hp','like',"%{$q}%")
						->OrWhere('email','like',"%{$q}%");
	}
    protected $table = "costumers_module";
    protected $hidden = ["id"];
    protected $fillable = [
    	"nama"
	    ,"no_ktp"
	    ,"alamat"
	    ,"no_hp"
	    ,"email"];
    protected $casts = [
        "created_at" => "datetime",
        "updated_at" => "datetime"
    ];
}
