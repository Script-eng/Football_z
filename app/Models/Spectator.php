<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spectator extends Model
{
    use HasFactory;

    protected $fillable = ['sname', 'male', 'haspass'];

    public function entries()
    {
        return $this->hasMany(Entry::class, 'spectatorid');
    }
}
