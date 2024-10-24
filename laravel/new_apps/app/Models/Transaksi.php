<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    /** @use HasFactory<\Database\Factories\TransaksiFactory> */
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id_transaksi';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $guarded = [];

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function barangs(): BelongsToMany
    {
        return $this->belongsToMany(Barang::class, DetailTransaksi::class, 'id_transaksi');
    }
}
