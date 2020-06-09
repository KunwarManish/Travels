<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotelreview extends Model
{
    protected $table = 'hotelreviews';
    protected $fillable = [
    'hotelid', 'name', 'rating', 'reviews'];
}
