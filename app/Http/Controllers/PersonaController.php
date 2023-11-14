<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function MostrarFormularioRegistro(){

        return view('registro'); 
    }

    public function MostrarFormularioLogin(){

        return view('login'); 
    }

    public function MostrarIndexPrincipal(){

        return view('index'); 
    }

    
    public function MostrarIndexPrivada(){

        return view('index-privada'); 
    }

    public function registrarUsuario(Request $request)
    {
        // URL de la API de Autenticación
        $apiAuthURL = 'http://localhost:8001/api/'; 

        
        $datos = [
            'name' => $request->input('nombre'),
            'last_name' => $request->input('apellido'),
            'email' => $request->input('correo'),
            'password' => $request->input('password'),
            'username' => $request->input('username'),
            'ci' => $request->input('cedula'),
            'phone' => $request->input('telefono'),
        ];

       
        $response = Http::post($apiAuthURL, $datos);

        if ($response->status() === 201) {
            
            return redirect('/index')->with('success', 'Usuario registrado con éxito');
        } else {
            return redirect('/registro')->with('error', 'Error en el registro');
        }
    }

    public function LoginUsuario(Request $request)
    {
        // URL de la API de Autenticación
        $apiAuthURL = 'http://localhost:8001/api/'; 

        
        $datos = [
            'email' => $request->input('correo'),
            'password' => $request->input('password'),
        ];

       
        $response = Http::post($apiAuthURL, $datos);

        if ($response->status() === 201) {
            
            return redirect('/index-privada')->with('success', 'Usuario logeado con éxito');
        } else {
            return redirect('/login')->with('error', 'Error en el ingreso');
        }
    }

    
}
