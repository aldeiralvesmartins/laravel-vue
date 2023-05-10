<?php

namespace App\Models\Person;

use App\Models\Address\Address;
use App\Models\Core\DispatchingAgency;
use App\Models\Core\MaritalStatus;
use App\Models\Core\Profession;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $fillable = [
        'name',
        'taxpayer',
        'birthdate',
        'rg_number',
        'dispatcher_agency_id',
        'observation',
        'name_mother',
        'name_father',
        'naturalness',
        'nationality_id',
        'expedition_date_rg',
        'gender',
        'nationalities',
        'schooling_id',
        'marital_status_id',
        'address_id',
        'married_date',
        'profession_id',
        'work_status_id',
        'has_social_benefits',
        'has_deficiencies',
        'has_chronic_diseases',
        'has_absent_parner',
    ];

    public function nationality()
    {
        return $this->hasOne(Nationality::class, 'nationality_id', 'id');
    }

    public function schooling()
    {
        return $this->hasOne(Schooling::class, 'schooling_id', 'id');
    }

    public function maritalStatus()
    {
        return $this->hasOne(MaritalStatus::class, 'marital_status_id');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'address_id');
    }

    public function dispatcherAgency()
    {
        return $this->hasOne(DispatchingAgency::class, 'dispatcher_agency_id');
    }

    public function profession()
    {
        return $this->hasOne(Profession::class, 'profession_id');
    }

    public function workStatus()
    {
        return $this->hasOne(WorkStatus::class, 'work_status_id');
    }
}
