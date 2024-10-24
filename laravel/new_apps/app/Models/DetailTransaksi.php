<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailTransaksi extends Model
{
    /** @use HasFactory<\Database\Factories\DetailTransaksiFactory> */
    use HasFactory, SoftDeletes;

    protected $guarded = [];
}
