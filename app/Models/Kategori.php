<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['nama_ktg'];

    public function produks()
    {
        return $this->hasMany('App\Models\Produk');
    }
}
