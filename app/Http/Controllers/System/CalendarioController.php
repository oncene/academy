<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Calendario;
use DB;
class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.calendario_todo');
    }

    public function getCalendar()
    {
        $data = Calendario::get(['id', 'title', 'start', 'end', 'allDay', 'color']);
        return Response()->json($data);
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
        if ($request->ajax())
        {
            if ($request->end){
                $end = $request->input('end');
            }else{
                $end = null;
            }
            if ($request->allDay){
                $allDay = true;
            }else{
                $allDay = null;
            }
            $calendar_id = DB::table('calendarios')->insertGetId([
                'title' => $request->get('title')
                ,'start' => $request->get('start')
                ,'color' => $request->get('color')
                ,'end' => $end
                ,'allDay' => $allDay
            ]);

            if ($calendar_id) {
                return response()->json(['success' => 'true','id' => $calendar_id]);
            }else {
                return response()->json(['success' => 'false']);
            }
        }else{
            return 'No autorizado';
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
        if ($request->ajax())
        {
            $calendar =  Calendario::Find($id);
            $calendar->title = $request->input('title');
            $calendar->start = $request->input('start');
            if ($request->end){
                $calendar->end = $request->input('end');
            }else{
                $calendar->end = null;
            }
            if ($request->allDay){
                $calendar->allDay = true;
            }else{
                $calendar->allDay = null;
            }
            $calendar->color = $request->input('color');
            $result = $calendar->save();
            if ($result) {
                return response()->json(['success' => 'true']);
            }else {
                return response()->json(['success' => 'false']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->ajax())
        {
            $calendar = Calendario::findOrFail($id);
            $result = $calendar->delete();
            if ($result){
                return response()->json(['success'=>'true']);
            }else {
                return response()->json(['success'=>'false']);
            }
        }else{
            return 'No autorizado';
        }
    }
}
