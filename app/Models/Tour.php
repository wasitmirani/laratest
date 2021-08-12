<?php

namespace App\Models;

use App\Models\BookingTour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Location;

class Tour extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Tour
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
public function tourDetails(){
        return  $this->hasOne(TourPackage::class,'tour_id','id');
    }

    // public function location(){
    //     return $this->hasMany(Location::class);
    // }



}
