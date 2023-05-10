<?php

namespace App\Models\Core;

use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class DispatchingAgency extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'dispatching_agencies';
    protected $fillable = ['name', 'code'];

    public function people(): HasMany
    {
        return $this->hasMany(Person::class, 'dispatching_agency_id');
    }
}
