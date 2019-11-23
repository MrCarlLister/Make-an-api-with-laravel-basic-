<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{


    /**
     *
     * @param Person $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    /**
     *
     * @return PersonResourceCollection
     */

    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());
    }

    /**
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'first_name'    =>     'required',
            'last_name'     =>     'required',
            'phone'         =>     'required',
            'email'         =>     'required',
            'city'          =>     'required'
        ]);

        //create person
        $person = Person::create($request->all());

        // return person
        return new PersonResource($person);
    }

    /**
     *
     * @param Person $person
     * @param Request $request
     * @return PersonResource
     */

    public function update(Person $person, Request $request): PersonResource
    {
        // dd($request->all());
        // Update person
        $person->update($request->all());

        // Return person
        return new PersonResource($person);
    }

    /**
     *
     * @param Person $person
     * @return void
     */

    public function destroy(Person $person)
    {
        $person->delete();
        return response()->json();
    }
}
