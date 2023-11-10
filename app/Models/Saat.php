<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saat extends Model
{
    use HasFactory;
    protected $table='saat';
    protected $fillable=["id","gun","saat","created_at","updated_at"];
}
