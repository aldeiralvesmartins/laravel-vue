<?php

namespace App\Models\Address;

use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    protected $fillable = ['name', 'acronyms'];

    public function people(): HasMany
    {
        return $this->hasMany(Person::class, 'country_id');
    }

    public function states()
    {
        return $this->hasMany(State::class, 'country_id');
    }
}
