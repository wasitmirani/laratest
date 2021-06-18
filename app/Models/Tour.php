<?php

namespace App\Models;

use App\Models\BookingTour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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



}
