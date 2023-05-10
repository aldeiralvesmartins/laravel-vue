<?php

namespace App\Bo;

use App\Repository\PersonRepository;

class PersonBo
{
    protected $personRepository;

    public function __construct(personRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function create(array $data)
    {
        return $this->personRepository->create($data);
    }
}
