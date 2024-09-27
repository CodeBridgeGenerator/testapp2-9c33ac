<?php

namespace App\Interfaces;

interface MemoRepositoryInterface 
{
    public function getAllMemos();
    public function getMemoById($memoId);
    public function deleteMemo($memoId);
    public function createMemo(array $memoDetails);
    public function updateMemo($memoId, array $newDetails);
}