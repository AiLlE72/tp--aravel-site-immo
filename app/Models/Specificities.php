<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperSpecificities
 */
class Specificities extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];

    public function property(){
        return$this->belongsToMany(Properties::class);
    }
}
