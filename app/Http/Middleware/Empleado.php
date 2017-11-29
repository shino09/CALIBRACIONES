<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;
use App\Cliente;

class Empleado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if($this->auth->user()->empleado()){
            return $next($request);
        }
        else if(!($this->auth->user()->empleado())){
               $clientes = Cliente::orderBy('nombre', 'asc')->paginate(20);
                return view('administrador.clientes.index',compact('clientes'));
        }
    }
}
