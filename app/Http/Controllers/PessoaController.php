<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePessoaRequest;
use App\Http\Requests\UpdatePessoaRequest;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param   Illuminate\Http\Request         $request
     * @return  \Illuminate\Http\JsonResponse
     */
    public function index(Request $request) : JsonResponse
    {
        $query = Pessoa::orderBy('name', 'ASC');

        if ($request->name) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->age) {
            $query->where('age', $request->age);
        }

        if ($request->sex) {
            $query->where('sex', $request->sex);
        }

        if ($request->description) {
            $query->where('description', 'like', '%' . $request->description . '%');
        }

        // $query->paginate(50);
        $pessoas = $query->get();

        return response()->json([
            'status' => true,
            'pessoas' => $pessoas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePessoaRequest $request)
    {
        $pessoa = Pessoa::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Pessoa adicionada com sucesso!",
            'pessoa' => $pessoa
        ], 200);
    }

    /**
     * Display the specified resource.
     * 
     * @param   \App\Models\Pessoa              $pessoa
     * @return  \Illuminate\Http\JsonResponse
     */
    public function show(Pessoa $pessoa) : JsonResponse
    {
        return response()->json([
            'status' => true,
            'pessoa' => $pessoa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePessoaRequest $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }
}
