<?php

namespace App\Models\Core;

use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profession extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'professions';
    protected $fillable = ['name', 'code', 'is_custom'];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
