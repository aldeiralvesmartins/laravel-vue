<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkStatus extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'work_status';
    protected $fillable = ['name'];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
