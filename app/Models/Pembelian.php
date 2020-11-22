<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $guarded = ['pembeli'];

    public function charts()
    {
        return $this->belongsTo('App\Models\Chart');
    }
}
