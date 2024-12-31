<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    use HasFactory;

    protected $fillable = ['mdate', 'startsat', 'ticketprice', 'mtype'];

    public function entries()
    {
        return $this->hasMany(Entry::class, 'matchid');
    } 
}

    

