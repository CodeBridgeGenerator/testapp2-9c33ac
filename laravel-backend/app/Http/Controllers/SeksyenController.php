<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Seksyen;
use App\Interfaces\SeksyenRepositoryInterface;
use App\Http\Requests\CreateSeksyenRequest;

class SeksyenController extends Controller
{
    private SeksyenRepositoryInterface $userRepository;

    public function __construct(SeksyenRepositoryInterface $userRepository) 
    {
        $this->SeksyenRepository = $userRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->SeksyenRepository->getAllSeksyens()
        ]);
    }

    public function store(CreateSeksyenRequest $request): JsonResponse 
    {
        $user = Seksyen::create($request->validated());
        return response()->json(['message' => 'Seksyen created successfully']);
    }

}
