<?php

namespace App\Models\Person;

use Faker\Provider\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonPeople extends Model
{
    use HasFactory;

    protected $table = 'person_people';

    protected $fillable = [
        'person_chief_id',
        'people_id',
        'relation_description'
    ];

    public function personChief(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'person_chief_id');
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'people_id');
    }
}
