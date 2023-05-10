<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marital_status extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function people()
    {
        return $this->hasMany(\App\Model\people::class, 'marital_status_id', 'id');
    }
}
