<?php

namespace App\Repositories;

use App\Interfaces\MemoRepositoryInterface;
use App\Models\Memo;
use App\Http\Resources\MemoResource;

class MemoRepository implements MemoRepositoryInterface 
{
    public function getAllMemos() 
    {
        $memo = Memo::all();
        return MemoResource::collection($memo);
    }

    public function getMemoById($MemoId) 
    {
        $memo = Memo::findOrFail($MemoId);
        return MemoResource::collection($memo);
    }

    public function deleteMemo($MemoId) 
    {
        Memo::destroy($MemoId);
    }

    public function createMemo(array $MemoDetails) 
    {
        return Memo::create($MemoDetails);
    }

    public function updateMemo($MemoId, array $newDetails) 
    {
        $users = Memo::whereId($MemoId)->update($newDetails);
        return MemoResource::collection($memo);
    }

}