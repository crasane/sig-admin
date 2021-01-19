<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable     = [];
    protected $table        = "orders";
    protected $primaryKey   = "id";

    public $timestamps = false;
}

