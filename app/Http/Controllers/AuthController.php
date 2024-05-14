<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function login(Request $request)
    {
        try{
            if (Auth::attempt($request->only('email', 'password')))
            {
                return response()->json(
                    [
                        'message' => 'Autorizado!', 
                        'status' => 200, 
                        'token' => $request->user()->createToken('token')->plainTextToken
                    ]
                );
            }
            else
            {
                return response()->json('Não autorizado!', 403);
            }
        }
        catch(\Exception $e)
        {
            return response()->json(['error' => $e->getMessage(), 'status' => 403]);
        }
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Deslogado!', 'status' => 200]);
    }
}
