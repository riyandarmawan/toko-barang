<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    /** @use HasFactory<\Database\Factories\BarangFactory> */
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id_barang';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $guarded = [];

    public function transaksis(): BelongsToMany
    {
        return $this->belongsToMany(Transaksi::class, DetailTransaksi::class, 'id_barang');
    }
}
