<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nim extends Model
{
    use HasFactory;

    protected $table = '362258302093';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'harga_satuan'];
}
