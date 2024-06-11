<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * @mixin IdeHelperProperties
 */
class Properties extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'aera',
        'floors',
        'rooms',
        'sleeping_rooms'
    ];

    public function specificities(){
        return $this->belongsToMany(Specificities::class, 'property_specificity', 'properties_id', 'specificities_id');
    }
    public function heating(){
        return $this->belongsToMany(Heating::class,  'property_heating', 'properties_id', 'heating_id');
    }

    public function images(){
        return$this->belongsToMany(Images::class, 'property_images', 'properties_id', 'images_id');
    }

    public function imageUrl()
    {
        return Storage::disk('public')->url($this->image);
    }
}
