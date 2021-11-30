<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'name', 'brand', 'numero', 'location', 'scadenza'
    ];

    // protected $fillable = [
    //     'type', 'name', 'brand', 'numero', 'location_id', 'scadenza'
    // ];
    // public function location(){

    //     return $this->belongsTo(Location::class);
    // }
}
