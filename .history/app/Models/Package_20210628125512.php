<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function tourPackages(){
        return  $this->belongsTo(TourPackage::class,'package_id','id');
    }
}
