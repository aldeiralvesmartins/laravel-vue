<?php

namespace App\Models\Contact;

use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'emails';
    protected $fillable = ['email', 'main', 'people_id', 'is_notify', 'marks'];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
