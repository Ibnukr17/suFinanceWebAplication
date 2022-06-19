<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    
    protected $table='feedback'; 
    protected $primaryKey = 'id'; 
  
    protected $fillable = [
        'full_name',
        'date',
        'email',
        'subject',
        'message',
        'account_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
