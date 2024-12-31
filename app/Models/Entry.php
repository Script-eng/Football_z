<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = ['spectatorid', 'matchid', 'timestamp'];

    public function match()
    {
        return $this->belongsTo(Matchs::class, 'matchid');
    }

    public function spectator()
    {
        return $this->belongsTo(Spectator::class, 'spectatorid');
    }
}
