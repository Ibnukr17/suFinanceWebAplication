<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    use HasFactory;
    
    protected $table='savings'; 
    protected $primaryKey = 'id'; 
  
    protected $fillable = [
        'budget_id',
        'date',
        'amount',
    ];

    public function budget(){
        return $this->hasMany(Budget::class);
    } 

    public function daily(){
        return $this->belongsToMany(Daily::class);
    }
}
