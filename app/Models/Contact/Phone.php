<?php

namespace App\Models\Contact;

use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'phones';
    protected $fillable = ['people_id', 'number', 'marks', 'is_notify'];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
