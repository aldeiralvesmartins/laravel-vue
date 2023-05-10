<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth_date',
        'cpf',
        'number_rg',
        'date_emission_rg',
        'organ_issuer_rg_id',
        'state_organ_issuer_rg_id',
        'naturalness_id',
        'schooling_id',
        'sex',
        'marital_status__id',
        'date_marriage',
        'spouse_absent',
        'partner_residing_together',
        'illness_chronicle',
        'person_deficient',
        'recipient_Software_social',
        'profession',
        'situation_marketplace_work_id',
        'name_mother',
        'name_father',
        'observation'
    ];

    protected $dates = [
        'birth_date',
        'date_emission_rg',
        'date_marriage'
    ];

    public function organIssuerRg()
    {
        return $this->belongsTo(OrganIssuerRg::class);
    }

    public function stateOrganIssuerRg()
    {
        return $this->belongsTo(State_organIssuer_rg::class);
    }

    public function naturalness()
    {
        return $this->belongsTo(Naturalness::class);
    }

    public function schooling()
    {
        return $this->belongsTo(Schooling::class);
    }

    public function maritalStatus()
    {
        return $this->belongsTo(Marital_status::class);
    }

    public function situationMarketplaceWork()
    {
        return $this->belongsTo(Situation_marketplace_work::class);
    }
}
