<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myproject extends Model
{
    use HasFactory;

    // Pastikan semua kolom yang bisa diisi (mass assignment) dideklarasikan di sini
    protected $fillable = ['title', 'description'];
}
