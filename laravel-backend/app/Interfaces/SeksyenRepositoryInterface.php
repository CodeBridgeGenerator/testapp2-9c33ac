<?php

namespace App\Interfaces;

interface SeksyenRepositoryInterface 
{
    public function getAllSeksyens();
    public function getSeksyenById($seksyenId);
    public function deleteSeksyen($seksyenId);
    public function createSeksyen(array $seksyenDetails);
    public function updateSeksyen($seksyenId, array $newDetails);
}