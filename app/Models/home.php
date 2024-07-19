<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;
    protected $table = "home";
    protected $fillable = ['nama', 'deskripsi', 'deskripsi2', 'foto'];
    public $timestamps = false;
}
