<?php

namespace App\Http\Controllers\System;

use App\Model\Nivel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nivel::where('nombre','LIKE','%'.request('search').'%')->paginate(10);
        return response()->json($data);
    }

    public function nivelDatatablesAll(){
        $data = Nivel::all();
        return datatables()->of($data)->toJson();
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
        if ($request->ajax()) {
            $this->validate($request, ['nombre' => 'required|unique:nivels,nombre']);
            $data = new Nivel();
            $data->nombre = $request->input('nombre');
            $result = $data->save();
            if ($result) {
                return response()->json(['success' => 'true']);
            }else {
                return response()->json(['success' => 'false']);
            }
        }
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
        $data = Nivel::find($id);
        $result = $data->delete();

        if ($result) {
            return response()->json(['success' => 'true']);
        }else {
            return response()->json(['success' => 'false']);
        }
    }
}
