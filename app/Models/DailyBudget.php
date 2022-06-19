<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyBudget extends Model
{
    use HasFactory;
    protected $table='daily_budget'; 
    protected $primaryKey = 'id'; 
  
    protected $fillable = [
        'timestamps'
    ];
}
