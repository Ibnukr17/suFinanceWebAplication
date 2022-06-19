<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    use HasFactory;

    
    protected $table='daily'; 
    protected $primaryKey = 'id'; 
  
    protected $fillable = [
        'budget_id',
        'expense_id',
        'date',
        'amount',
        'saving_id',
        'user_id'
    ];

    public function expense(){
        return $this->hasMany(Expense::class);
    }

    public function budget(){
        return $this->hasMany(Budget::class);
    }

    public function savings(){
        return $this->hasMany(Saving::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}
