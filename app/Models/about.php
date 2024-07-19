<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "dashboard";
    protected $fillable = ['judul', 'deskripsi', 'foto'];
}
