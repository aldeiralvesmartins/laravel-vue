<?php

namespace App\Repository;



use App\Models\Person\Person;

class PersonRepository
{
    public function create(array $data)
    {
        return Person::create($data);
    }
}
