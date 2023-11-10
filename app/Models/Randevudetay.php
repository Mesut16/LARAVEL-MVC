<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevudetay extends Model
{
    use HasFactory;
    protected $table='randevu_detay';
    protected $fillable=["randevu_detay_id","randevu_tarih","tedavi","id","created_at","updated_at"];
}
