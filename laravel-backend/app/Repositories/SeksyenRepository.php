<?php

namespace App\Repositories;

use App\Interfaces\SeksyenRepositoryInterface;
use App\Models\Seksyen;
use App\Http\Resources\SeksyenResource;

class SeksyenRepository implements SeksyenRepositoryInterface 
{
    public function getAllSeksyens() 
    {
        $seksyen = Seksyen::all();
        return SeksyenResource::collection($seksyen);
    }

    public function getSeksyenById($SeksyenId) 
    {
        $seksyen = Seksyen::findOrFail($SeksyenId);
        return SeksyenResource::collection($seksyen);
    }

    public function deleteSeksyen($SeksyenId) 
    {
        Seksyen::destroy($SeksyenId);
    }

    public function createSeksyen(array $SeksyenDetails) 
    {
        return Seksyen::create($SeksyenDetails);
    }

    public function updateSeksyen($SeksyenId, array $newDetails) 
    {
        $users = Seksyen::whereId($SeksyenId)->update($newDetails);
        return SeksyenResource::collection($seksyen);
    }

}