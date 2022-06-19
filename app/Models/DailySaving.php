<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySaving extends Model
{
    use HasFactory;
    protected $table='daily_saving'; 
    protected $primaryKey = 'id'; 
  
    protected $fillable = [
        'timestamps'
    ];
}
