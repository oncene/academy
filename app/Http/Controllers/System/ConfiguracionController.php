<?php

namespace App\Http\Controllers\System;

use App\Model\Color;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Model\Configuracion;
use App\Model\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function perfilImagenAll($filename){
        $file = Storage::disk('images')->get($filename);
        return Response($file,200);
    }

    public function personalAll(){
        $users = Auth::user()->id;
        $personals = Personal::where('user_id','=',$users)->get();
        return response()->json($personals);
    }

    public function colorAll(){
        $user_id = Auth::user()->id;
        $data = DB::SELECT(DB::RAW('select c.descripcion from configuracions cf left join users u on cf.user_id=u.id left join colors c on cf.color_id=c.id where u.id='.$user_id.' and cf.deleted_at is null'));
        return response()->json($data);
    }

    public function configureColor(Request $request){
        if ($request->ajax()) {
            if (isset(Auth::user()->configuracion[0])){
                $conf_id = Auth::user()->configuracion[0]['id'];
                $data = Configuracion::findOrFail($conf_id);
            }else{
                $data = new Configuracion();
            }
            $data->user_id=Auth::user()->id;
            $data->color_id = $request->get('color_id');
            $result = $data->save();
            if ($result) {
                return response()->json(['success' => 'true']);
            }else {
                return response()->json(['success' => 'false']);
            }
        }
    }

    public function index()
    {
//        if(isset(Auth::user()->personal[0])){
//          print_r('existe'.Auth::user()->personal);
//        }else{
//            print_r('nno '.Auth::user()->personal);
//        };
//    die();
        return view('pages.configuracion_todo');
//        return view('pages.configuracion_todo',compact('personals'));

//        if ($data){
//            $disabled = 'disabled';
//        }else{
//            $disabled = '';
//        }
//        return view('pages.configuracion_todo',compact('data')->addColumn('disabled',function ($data){
//            if ($data){
//                return 'disabled';
//            }else{
//                return '';
//            }
//        }));

//        return view('pages.configuracion_todo')->with('personal',$data)->addColumn('disabled',function ($data){
//            if ($data){
//                return 'disabled';
//            }else{
//                return '';
//            }
//        })->make(true);
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


    public function configuracionUpdate(Request $request)
    {
        if ($request->ajax()) {
            if (isset(Auth::user()->personal[0])) {
                $userPersonal = Auth::user()->personal[0]['id'];
                $data = Personal::find($userPersonal);
            } else {
                $data = new Personal();
                $data->user_id = Auth::user()->id;
                $data->ci = $request->input('ci');
                $data->expedido = $request->input('expedido');
                $data->nombres = $request->input('nombres');
                $data->paterno = $request->input('paterno');
                $data->materno = $request->input('materno');
                $data->fecha_nacimiento = $request->input('fecha_nacimiento');
                $data->sexo = $request->input('sexo');
                $data->historial_academico = $request->input('historial_academico');
            }
            $imagen_perfil = $request->file('imagen_perfil');
            $imagen_portada = $request->file('imagen_portada');
            if ($imagen_perfil) {
                $this->validate($request, [
                    'imagen_perfil' => 'image|mimes:jpeg,bmp,png|max:5120',
                ], [
                    'imagen_perfil.image' => 'El archivo no tiene un formato valido de una imagen. ',
                    'imagen_perfil.max' => 'La imagen debe tener como maximo 5 MegaBytes. ',
                    'imagen_perfil.mimes' => 'El archivo debe tener formato tipo imagen, jpg, jpeg, png. ',
                ]);

                $random = str_random(20);
                $extension = $imagen_perfil->getClientOriginalExtension();
                $imagen_perfil_path = 'perfil_' . $random . '.' . $extension;
                $image_fit = Image::make($imagen_perfil)->fit(240,240)->encode();
                Storage::disk('images')->put($imagen_perfil_path, $image_fit);
//                Storage::disk('images')->put($imagen_perfil_path, \File::get($imagen_perfil));
//                $image_fit = Image::make(Storage::disk('images')->get($imagen_perfil_path))->fit(240,240)->encode();
//                Storage::disk('images')->put($imagen_perfil_path, $image_fit);
                $data->imagen_perfil = $imagen_perfil_path;
            }else{
                $imagen_perfil_path = null;
            }
            if ($imagen_portada) {
                $this->validate($request, [
                    'imagen_portada' => 'image|mimes:jpeg,bmp,png|max:10240',
                ], [
                    'imagen_portada.image' => 'El archivo no tiene un formato valido de una imagen. ',
                    'imagen_portada.max' => 'La imagen debe tener como maximo 10 MegaBytes. ',
                    'imagen_portada.mimes' => 'El archivo debe tener formato tipo imagen, jpg, jpeg, png. ',
                ]);

                $random = str_random(20);
                $extension = $imagen_portada->getClientOriginalExtension();
                $imagen_portada_path = 'portada_' . $random . '.' . $extension;
                $image_fit = Image::make($imagen_portada)->fit(800,600)->encode();
                Storage::disk('images')->put($imagen_portada_path, $image_fit);
                $data->imagen_portada = $imagen_portada_path;
            }else{
                $imagen_portada_path = null;
            }


            $data->estado_civil = $request->input('estado_civil');
            $data->direccion = $request->input('direccion');
            $data->ocupacion = $request->input('ocupacion');
            $data->email = $request->input('email');
            $data->telefono = $request->input('telefono');
            $data->celular = $request->input('celular');
            $data->red_facebook = $request->input('red_facebook');
            $data->red_twitter = $request->input('red_twitter');
            $data->red_instagram = $request->input('red_instagram');
            $data->red_google = $request->input('red_google');
            $result = $data->save();
            if ($result) {
                return response()->json(['success' => 'true','imagen_portada_path'=>$imagen_portada_path,'imagen_perfil_path'=>$imagen_perfil_path]);
            } else {
                return response()->json(['success' => 'false']);
            }
        };
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
