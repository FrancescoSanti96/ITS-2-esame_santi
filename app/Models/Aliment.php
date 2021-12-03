<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id', 'name', 'brand', 'number', 'location_id', 'expiryDate'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
