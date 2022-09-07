<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'organisation', 
        'property_type', 
        'parent_property_id', 
        'uprn', 
        'address', 
        'town', 
        'postcode', 
        'live',
    ];

    public function certificates(){
        return $this->hasMany(Certificates::class, 'property_id');
    }
}
