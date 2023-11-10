<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;
    protected $table='randevu';
    protected $fillable=["id","ad","soyad","telefon","mail","saat","tarih","created_at","updated_at"];
}
