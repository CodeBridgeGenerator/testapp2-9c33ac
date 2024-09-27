<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Memo;
use App\Interfaces\MemoRepositoryInterface;
use App\Http\Requests\CreateMemoRequest;

class MemoController extends Controller
{
    private MemoRepositoryInterface $userRepository;

    public function __construct(MemoRepositoryInterface $userRepository) 
    {
        $this->MemoRepository = $userRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->MemoRepository->getAllMemos()
        ]);
    }

    public function store(CreateMemoRequest $request): JsonResponse 
    {
        $user = Memo::create($request->validated());
        return response()->json(['message' => 'Memo created successfully']);
    }

}
