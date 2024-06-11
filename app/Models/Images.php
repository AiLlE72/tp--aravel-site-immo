<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperImages
 */
class Images extends Model
{
    use HasFactory;
    protected $fillable = [
        'imageUrl'
    ];

    public function property(){
        return $this->belongsToMany(Properties::class);
    }
}
