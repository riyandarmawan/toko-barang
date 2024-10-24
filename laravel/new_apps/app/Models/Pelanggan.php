<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggan extends Model
{
    /** @use HasFactory<\Database\Factories\PelangganFactory> */
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id_pelanggan';

    protected $keyType = 'string';
    
    public $incrementing = false;

    protected $guarded = [];

    public function transaksis(): HasMany {
        return $this->hasMany(Transaksi::class);
    }
}
