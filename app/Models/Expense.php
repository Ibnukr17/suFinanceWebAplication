<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    
    protected $table='expense'; 
    protected $primaryKey = 'id'; 
  
    protected $fillable = [
        'specification',
        'date',
        'price',
        'quantity',
        'comment'
    ];

    public function daily(){
        return $this->belongsToMany(Daily::class);
    }
}
