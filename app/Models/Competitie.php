<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitie extends Model
{
    use HasFactory;    
    protected $fillable = ['naam', 'start_datum', 'eind_datum', 'locatie', 'aantal_teams'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'voetbalcompetities';
}
