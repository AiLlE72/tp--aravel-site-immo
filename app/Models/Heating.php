<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperHeating
 */
class Heating extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];

    public function property(){
        return $this->belongsToMany(Properties::class);
    }
}
