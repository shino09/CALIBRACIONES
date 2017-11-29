<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\F37;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Perdidacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request) {
            $query = trim($request->get('searchText'));
            $f37s = F37::select('numero', 'cliente_id', 'fecha_solicitud', 'estado', 'created_at')
                ->where('cliente_id', 'LIKE', '%' . $query . '%')
                ->orwhere('created_at', 'LIKE', '%' . $query . '%')
                ->orderBy('numero', 'asc')
                ->paginate(25);
            return view('administrador.perdidas.index',["f37s"=>$f37s,"searchText"=>$query]);
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
