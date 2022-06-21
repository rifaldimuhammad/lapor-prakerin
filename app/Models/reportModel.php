<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reportModel extends Model
{
    use HasFactory;

    
    protected $table = 'report';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'class',
        'date',
        'time',
        'untiltime',
        'position',
        'activity',
        
    ];
}
