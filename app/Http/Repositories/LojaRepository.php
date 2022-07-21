<?php

namespace App\Http\Repositories;

use App\Models\Loja;

class LojaRepository
{
    private $loja;

    public function __construct(Loja $loja)
    {
        $this->loja = $loja;
    }

    public function index()
    {
        return response(Loja::with('produtos')->get());
    }

    public function store($request)
    {
        $validate = $request->validate([
            'nome_loja' => 'required|min:3|max:40|string',
            'email' => 'required|unique:lojas|email',
        ]);

        $this->loja->fill($validate);
        $this->loja->save();

        return response($this->loja, 200);
    }

    public function show($id)
    {
        return response($this->loja->where('lojas.id', $id)->with('produtos')->get(), 200);
    }

    public function update($request, $id)
    {
        $validate = $request->validate([
            'nome_loja' => 'required|min:3|max:40|string',
            'email' => 'unique:lojas|email',
        ]);

        $editLoja = $this->loja->find($id);
        $editLoja->fill($validate);
        $editLoja->save();

        return response($editLoja, 200);
    }

    public function destroy($id)
    {
        return response($this->loja->destroy($id), 200);
    }
}
