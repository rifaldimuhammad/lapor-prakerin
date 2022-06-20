<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensiModel extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'class',
        'date',
        'time'
    ];
}
