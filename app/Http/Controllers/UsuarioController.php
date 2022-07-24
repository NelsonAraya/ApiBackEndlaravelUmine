<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return $usuario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nombres' => 'required|string',
            'apellidop' => 'required',
            'apellidom' => 'required',
            'telefono' => 'required|integer',
            'email' => 'required',
            'colegio' => 'required'
        ]);
        
        
        $usu = new Usuario();
        $usu->id= $request->id;
        $usu->nombres = strtolower( $request->nombres);
        $usu->apellidop = strtolower( $request->apellidop);
        $usu->apellidom = strtolower( $request->apellidom);
        $usu->telefono = strtolower( $request->telefono);
        $usu->email = strtolower( $request->email);
        $usu->colegio_id = $request->colegio;
        
        $run = str_replace('.','',$request->id);
        $run = str_replace('-','',$run);

        $dv = substr($run, -1);
        $id = substr($run, 0, -1);

        $usu->id=$id;
        $usu->dv= $dv;
        $usu->password = Hash::make($id);
        
        $usu->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'nombres' => 'required|string',
            'apellidop' => 'required',
            'apellidom' => 'required',
            'telefono' => 'required|integer',
            'email' => 'required',
            'colegio' => 'required'
        ]);
        
        
        
        $usuario = Usuario::findOrFail($request->id);
        $usuario->nombres = strtolower( $request->nombres);
        $usuario->apellidop = strtolower( $request->apellidop);
        $usuario->apellidom = strtolower( $request->apellidom);
        $usuario->telefono = strtolower( $request->telefono);
        $usuario->email = strtolower( $request->email);
        $usuario->colegio_id = $request->colegio;
        $usuario->save();

        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
    }

    public function login (Request $request){

        $user = Usuario::where('email', $request->email)->first();
 
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                "status" => 401,
                "message" => "Las credenciales no son correctas"
            ]);
        }else{
            $token = $user->createToken($user->email.'_token')->plainTextToken;
            return response()->json([
                "status" => 200,
                "name" => $user->nombres,
                "token" => $token,
                "message" => "iniciado sesión con éxito"
            ]);
        }
    }
    public function logout(){
        auth()->guard('web')->logout();
        //Auth::logout();
        return response()->json([
            "status" => 200,
            "message" => "Cerraste sesión con éxito"
        ]);

    }
}
