<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Transaksi extends Model
{
    /** @use HasFactory<\Database\Factories\TransaksiFactory> */
    use HasFactory,  SoftDeletes;

    protected $primaryKey = 'id_transaksi';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [];

    public function pelanggan(): BelongsTo {
        return $this->belongsTo(Pelanggan::class);
    }

    public function barangs(): BelongsToMany
    {
        return $this->belongsToMany(Barang::class, 'detail_transaksi', 'id_transaksi', 'id_barang');
    }
}
