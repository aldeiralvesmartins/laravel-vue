<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Naturalness extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function people()
    {
        return $this->hasMany(\App\Model\people::class, 'naturalness_id', 'id');
    }
}
