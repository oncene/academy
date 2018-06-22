<?php

namespace App\Http\Controllers\System;

use App\Model\Carrera;
use App\Model\CarreraNivel;
use App\Model\CarrnivSemestre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Carrera::where('nombre','LIKE','%'.request('search').'%')->paginate(10);
        return response()->json($data);
    }

    public function carreraDatatablesAll(){
        $data = DB::SELECT(DB::RAW('select c.id,c.nombre as carrera,c.resolucion,m.nombre as mension,group_concat(n.nombre) as nivel from carreras c left join mensions m on c.mension_id=m.id left join carrera_nivels cn on cn.carrera_id=c.id left join nivels n on cn.nivel_id=n.id where c.deleted_at is null and m.deleted_at is null and cn.deleted_at is null group by c.id'));
        return datatables()->of($data)->toJson();
    }
    public function carreraModalDatatablesAll(){
        $data = DB::table('carreras')
            ->select('carreras.id','carreras.nombre as carrera','carreras.resolucion','carreras.created_at','mensions.nombre as mension')
            ->leftJoin('mensions','carreras.mension_id','=','mensions.id')
            ->get();
//        return response()->json($data);
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
            $this->validate($request, ['nombre' => 'required|unique:carreras','resolucion' => 'required|unique:carreras,resolucion']);
            $data = new Carrera();
            $data->nombre = $request->input('nombre');
            $data->resolucion = $request->input('resolucion');
            $data->mension_id = $request->input('mension_id');
            $result = $data->save();
            if ($result) {
                return response()->json(['success' => 'true']);
            }else {
                return response()->json(['success' => 'false']);
            }
        }
    }

    public function carreraAsignacion(Request $request)
    {
        if ($request->ajax()) {
            $this->validate($request, ['carrera_id' => 'required|exists:carreras,id','nivel_id' => 'required|exists:nivels,id','semestre_id' => 'required']);
            $carrera_id = $request->input('carrera_id');
            $nivel_id = $request->input('nivel_id');
            $semestre_array_id = json_decode($request->input('semestre_id'));
            $carrera_nivel_id = CarreraNivel::select('id')->where('carrera_id','=',$carrera_id)->where('nivel_id','=',$nivel_id)->first();
            if($carrera_nivel_id){
                $carrera_semestre_id = CarrnivSemestre::select('id')->where('carrniv_id','=',$carrera_nivel_id->id)->first();
            }else{
                $carrera_semestre_id = null;
            }

            if ($carrera_nivel_id){
//                print_r('existe carrera nivel | ');
                if($carrera_semestre_id){
//                    print_r('existe carr semestre | ');
                    $carrera_nivel_semestre = CarrnivSemestre::find($carrera_semestre_id->id);
                    $carrera_nivel_semestre->Semestre()->sync($semestre_array_id);
                    $result = true;
                }else{
//                    print_r('no existe carr semestre');
                    $dataSet = [];
                    foreach ($semestre_array_id as $semestre_array_ids) {
                        $dataSet[] = [
                            'carrniv_id'  => $carrera_nivel_id->id
                            ,'semestre_id'    => $semestre_array_ids
                            ,'created_at'    => \Carbon\Carbon::now()
                            ,'updated_at'    => \Carbon\Carbon::now()
                        ];
                    }
                    DB::table('carrniv_semestres')->insert($dataSet);
                    $result = true;
                }
            }else{
//                print_r('no existe todo');
                $carr_niv_id = DB::table('carrera_nivels')->insertGetId([
                    'carrera_id' => $carrera_id
                    ,'nivel_id' => $nivel_id
                    ,'created_at' => \Carbon\Carbon::now()
                    ,'updated_at' => \Carbon\Carbon::now()
                    ]);
                $dataSet = [];
                foreach ($semestre_array_id as $semestre_array_ids) {
                    $dataSet[] = [
                        'carrniv_id'  => $carr_niv_id
                        ,'semestre_id'    => $semestre_array_ids
                        ,'created_at' => \Carbon\Carbon::now()
                        ,'updated_at' => \Carbon\Carbon::now()
                    ];
                }
                DB::table('carrniv_semestres')->insert($dataSet);
                $result = true;
            }

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
        $data = Carrera::find($id);
        $result = $data->delete();

        if ($result) {
            return response()->json(['success' => 'true']);
        }else {
            return response()->json(['success' => 'false']);
        }
    }
}
