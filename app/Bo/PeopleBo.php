<?php

namespace App\Bo;

use App\Dao\PeopleDao;
use App\Models\People;

class PersonBo
{
    private $personDao;

    public function __construct()
    {
        $this->personDao = new PeopleDao();
    }

    public function getAll()
    {
        try {
            return $this->personDao->getAll();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getById($id)
    {
        try {
            return $this->personDao->getById($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function save(array $data)
    {
        try {
            $person = new People();
            $person->fill($data);
            return $this->personDao->save($person);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id)
    {
        try {
            $person = $this->personDao->getById($id);
            if ($person) {
                $person->fill($data);
                $person->id = $id;
                return $this->personDao->update($person);
            }
            return false;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            return $this->personDao->delete($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

