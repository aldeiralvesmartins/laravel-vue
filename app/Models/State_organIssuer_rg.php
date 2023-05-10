<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State_organIssuer_rg extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function people()
    {
        return $this->hasMany(\App\Model\people::class, 'state_organ_issuer_rg_id', 'id');
    }
}
