<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komen extends Model
{
    use HasFactory;
    protected $table = "komen";
    protected $fillable = ['nama', 'email', 'nomor', 'komen'];
    public $timestamps = false;
}
