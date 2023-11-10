<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yorum extends Model
{
    use HasFactory;
    protected $table='yorum';
    protected $fillable=["id","ad_soyad","mail","konu","yazi","created_at","updated_at"];
}
