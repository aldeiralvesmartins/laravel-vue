<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganIssuerRg extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function people()
    {
        return $this->hasMany(\App\Model\people::class, 'organ_issuer_rg_id', 'id');
    }
}
