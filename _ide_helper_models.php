<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperContact {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Properties> $property
 * @property-read int|null $property_count
 * @method static \Illuminate\Database\Eloquent\Builder|Heating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Heating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Heating query()
 * @method static \Illuminate\Database\Eloquent\Builder|Heating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Heating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Heating whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Heating whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperHeating {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $imageUrl
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Properties> $property
 * @property-read int|null $property_count
 * @method static \Illuminate\Database\Eloquent\Builder|Images newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Images newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Images query()
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperImages {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $aera
 * @property int $floors
 * @property int $rooms
 * @property int $sleeping_rooms
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $price
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Heating> $heating
 * @property-read int|null $heating_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Images> $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Specificities> $specificities
 * @property-read int|null $specificities_count
 * @method static \Illuminate\Database\Eloquent\Builder|Properties newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Properties newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Properties query()
 * @method static \Illuminate\Database\Eloquent\Builder|Properties whereAera($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Properties whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Properties whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Properties whereFloors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Properties whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Properties wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Properties whereRooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Properties whereSleepingRooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Properties whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Properties whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperProperties {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Properties> $property
 * @property-read int|null $property_count
 * @method static \Illuminate\Database\Eloquent\Builder|Specificities newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specificities newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specificities query()
 * @method static \Illuminate\Database\Eloquent\Builder|Specificities whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specificities whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specificities whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specificities whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperSpecificities {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

