<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainaccount extends Model
{
    use HasFactory;
    protected $table = 'mainaccount';

    public function accounts(){
        return $this->hasMany(Account::class);
    }
        
    
}
