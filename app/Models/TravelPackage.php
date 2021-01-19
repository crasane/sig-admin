<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    protected $fillable     = [];
    protected $table        = "travel_packages";
    protected $primaryKey   = "id";

    public $timestamps = false;
}

