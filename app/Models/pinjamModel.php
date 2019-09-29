<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pinjamModel extends Model
{

    public function scopeCari($query,$q)
    {
        return $query->Where('mobil_module.merk','like',"%{$q}%")
                        ->OrWhere('mobil_module.plat_nomer','like',"%{$q}%")
                        ->OrWhere('costumers_module.nama','like',"%{$q}%")
                        ->join('mobil_module','pinjam_module.id_mobil','=','mobil_module.id')
                        ->join('costumers_module','pinjam_module.id_costumer','=','costumers_module.id');
    }
    public function scopeTime($query,$year,$month)
    {
        return $query->WhereYear('pinjam_module.tanggal_pinjam','=',"{$year}")
                            ->WhereMonth('pinjam_module.tanggal_pinjam','=',"{$month}");
    }

    protected $table = "pinjam_module";
    protected $hidden = ["id"];
    protected $fillable = [
        "id_mobil",
        "id_costumer",
        "tanggal_pinjam",
        "tanggal_kembali",
        "status",
        "total",
        "created_by"];
    protected $casts = [
        "created_at" => "datetime",
        "updated_at" => "datetime"
    ];
    public function costumer()
    {
        return $this->hasOne('App\Models\costumerModel','id','id_costumer');
    }
    public function mobil(){
        return $this->hasOne('App\Models\mobilModel','id','id_mobil');
    }
}
