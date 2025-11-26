<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamplesModel extends Model
{
    use HasFactory;

    protected $table = 'examples';
    protected $fillable = ['id', 'nama', 'email', 'alamat', 'created_at', 'updated_at'];
}
