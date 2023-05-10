<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situation_marketplace_work extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function people()
    {
        return $this->hasMany(\App\Model\people::class, 'situation_marketplace_work_id', 'id');
    }
}
