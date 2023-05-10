<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nationality extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'nationalities';
    protected $fillable = ['name'];

    public function person()
    {
        return $this->hasOne(Person::class, 'nationality_id', 'id');
    }
}
