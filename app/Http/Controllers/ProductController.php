<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Gravar(Request $request)
    {
        try{
            $dados = $request->validate([
                'name' => 'required',
                'description' => 'nullable',
                'price' => 'required|numeric',
                'status' => 'required|in:em estoque,em reposição,em falta',
                'stock_quantity' => 'required|integer',
            ]);
    
            $produto = new Product();
            $produto->name = $dados['name'];
            $produto->description = $dados['description'];
            $produto->price = $dados['price'];
            $produto->status = $dados['status'];
            $produto->stock_quantity = $dados['stock_quantity'];
    
            $produto = Product::create($dados);
            return response()->json(['message' => 'Produto Criado!', 'produto' => $produto], 201);
        }
        catch (\Exception $e){
            return response()->json(['message' => 'Verifique os campos novamente!'], 500);
        }
    }

    public function Listar()
    {
        try{
            $produtos = Product::all(['id', 'name', 'description', 'price']);
            return response()->json($produtos, 200);
        }
        catch (\Exception $e){
            return response()->json(['message' => 'Erro inesperado ao listar!'], 500);
        }
    }

    public function Editar(Request $request, $id)
    {
        try{
            $dados = $request->validate([
                'name' => 'required',
                'description' => 'nullable',
                'price' => 'required|numeric',
                'status' => 'required|in:em estoque,em reposição,em falta',
                'stock_quantity' => 'required|integer',
            ]);

            $produto = Product::findOrFail($id);

            // Se eu não encontrar o produto
            if (!$produto) {
                return response()->json(['message' => 'Produto Inexistente!'], 404);
            }

            $produto->update($dados);
            return response()->json(['message' => 'Produto Atualizado!', 'produto' => $produto], 200);
        }
        catch (\Exception $e){
            return response()->json(['message' => 'Verifique os campos novamente!'], 500);
        }
    }

    public function Excluir($id)
    {
        try {
            $produto = Product::findOrFail($id);

            if (!$produto) {
                return response()->json(['message' => 'Produto Inexistente!'], 404);
            }

            $produto->delete();
            return response()->json(['message' => 'Produto Excluído!'], 200);
        }
        catch (\Exception $e){
            return response()->json(['message' => 'Erro inesperado ao tentar excluir!'], 500);
        }
    }
}