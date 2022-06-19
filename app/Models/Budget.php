<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $table='budget'; 
    protected $primaryKey = 'id'; 
  
    protected $fillable = [
        'budget_type',
        'date',
        'amount',
        'budget_source',
        'comment'
    ];

    public function savings(){
        return $this->belongsTo(Saving::class);
    }

    public function daily(){
        return $this->belongsToMany(Daily::class);
    }

}
