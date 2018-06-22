<?php

namespace App\Http\Controllers\System;

use App\Model\Semestre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Semestre::where('nombre','LIKE','%'.request('search').'%')->paginate(10);
        return response()->json($data);
    }

    public function semestreDatatablesAll(){
        $data = Semestre::all();
        return datatables()->of($data)->toJson();
    }

    public function semestreCarreraAsignacionDatatablesAll(){
        $data = DB::SELECT(DB::RAW('select c.nombre as carrera,m.nombre as mension,n.nombre as nivel,group_concat(s.nombre) as semestre from carrera_nivels cn left join carrniv_semestres cns on cn.id=cns.carrniv_id left join carreras c on cn.carrera_id=c.id left join nivels n on cn.nivel_id=n.id left join semestres s on cns.semestre_id=s.id left join mensions m on c.mension_id=m.id group by cn.id,cn.carrera_id,cn.nivel_id'));
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
            $this->validate($request, ['nombre' => 'required|unique:semestres,nombre']);
            $data = new Semestre();
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
        $data = Semestre::find($id);
        $result = $data->delete();

        if ($result) {
            return response()->json(['success' => 'true']);
        }else {
            return response()->json(['success' => 'false']);
        }
    }
}
