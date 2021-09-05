<?php

namespace App\Repositories;

use App\Nationality;
use App\State;
use App\Lga;

class LocationRepo
{
    public function getStates()
    {
        return State::all();
    }

    public function getAllStates()
    {
        return State::orderBy('name', 'asc')->get();
    }

    public function getAllNationals()
    {
        return Nationality::orderBy('name', 'asc')->get();
    }

    public function getLGAs($state_id)
    {
        return Lga::where('state_id', $state_id)->orderBy('name', 'asc')->get();
    }

}