<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'stream_name', 
        'property_id',
        'issue_date', 
        'next_due_date',
    ];

    public function properties(){
        return $this->belongsTo(Properties::class);
    }

}
