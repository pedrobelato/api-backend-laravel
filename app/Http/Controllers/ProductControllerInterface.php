<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

interface ProductControllerInterface
{
    public function Gravar(Request $request);
    
    public function Listar();
    
    public function Editar(Request $request, $id);
    
    public function Excluir($id);
}