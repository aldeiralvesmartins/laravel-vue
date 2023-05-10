<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schooling extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'schooling';
    protected $fillable = ['name', 'code', 'is_custom'];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
