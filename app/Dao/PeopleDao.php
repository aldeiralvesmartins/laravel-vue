<?php

namespace App\Dao;

use Illuminate\Support\Facades\DB;
use App\Models\People;

class PeopleDao
{
    public function getAll()
    {
        try {
            return DB::table('people')->get();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getById($id)
    {
        try {
            return DB::table('people')->where('id', $id)->first();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function save(Person $person)
    {
        try {
            $data = $person->toArray();
            unset($data['id']);
            return DB::table('people')->insertGetId($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Person $person)
    {
        try {
            $data = $person->toArray();
            unset($data['id']);
            return DB::table('people')->where('id', $person->id)->update($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            return DB::table('people')->where('id', $id)->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
