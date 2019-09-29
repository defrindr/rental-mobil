<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mobilModel extends Model
{
    /**
     * *  Setting Scope 
     * */
    public function scopeStatus($query,$status){
		if($status=="Tersedia") {
			return $query->Where('status','=','1');
		}
		elseif($status=="Kosong"){
			return $query->Where('status','=','0');
		}elseif($status==null){
			return $query;
		}
	}
    public function scopeHarga($query,$harga){
        return $query->Where('harga','<=',"{$harga}");
    }
    public function scopeJmobil($query,$jmobil){
        return $query->Where('merk','LIKE',"%{$jmobil}%");
    }
    public function scopeCari($query,$q){
		return $query
            ->Where('merk','LIKE',"%{$q}%")
            ->orWhere('plat_nomer','LIKE',"%{$q}%")
            ->orWhere('harga','<=',"%{$q}%")
            ->orWhere('status','LIKE',"%{$q}%");
    }


    /**
     * * Configuration Database
     * */
    protected $table = "mobil_module";
    protected $hidden = ["id"];
    protected $fillable = [
        "merk",
        "plat_nomer",
        "harga",
        "image",
        "status"];
    protected $casts = [
        "created_at" => "datetime",
        "updated_at" => "datetime"
    ];
}
