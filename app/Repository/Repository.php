<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;


abstract class Repository
{
    /**
     * @codeCoverageIgnore
     */
    public function findbyName(string $name)
    {
        $name = strtoupper($name);
        return $this->model->where(DB::raw('upper(name)'), $name)->first();
    }

    public function all($columns = ['*'])
    {
        return $this->paginate(getenv('APP_PAGINATE_DEFAULT'));
    }
}
