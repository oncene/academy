<?php

namespace App\Http\Controllers\System;

use App\Model\Mension;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mension::where('nombre','LIKE','%'.request('search').'%')->paginate(10);
        return response()->json($data);
    }

    public function mensionDatatablesAll(){
        $data = Mension::all();
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
            $this->validate($request, ['nombre' => 'required|unique:mensions,nombre']);
            $data = new Mension();
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
        $data = Mension::find($id);
        $result = $data->delete();

        if ($result) {
            return response()->json(['success' => 'true']);
        }else {
            return response()->json(['success' => 'false']);
        }
    }
}
