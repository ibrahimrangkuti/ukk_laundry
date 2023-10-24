<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }

    public function detail_transaksis()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
