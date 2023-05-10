<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Bo\PersonBo;

class PersonController extends Controller
{
    public function create()
    {
        return view('person.create');
    }

    public function store(PersonRequest $request, PersonBo $personBo)
    {

        $person = $personBo->create($request->validated());

        return redirect()->route('person.show', $person);
    }
}
