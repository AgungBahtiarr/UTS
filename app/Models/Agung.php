<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agung extends Model
{
    use HasFactory;

    protected $table = 'agungs';

    protected $fillable = ['tanggal', 'id_barang', 'jumlah'];
}
