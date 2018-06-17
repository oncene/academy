@extends('layouts.master')
@section('title','Actividades generales')
@push('styles')
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-cascader-edit/css/cascade-select-edit.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jplist-table/css/jplist.demo-pages.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jplist-table/css/jplist.core.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jplist-table/css/jplist.textbox-filter.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jplist-table/css/jplist.pagination-bundle.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jplist-table/css/jplist.history-bundle.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jplist-table/css/jplist.filter-toggle-bundle.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jplist-table/css/jplist.list-grid-view.min.css')}}" type="text/css" />
    {{--<link rel="stylesheet" href="{{URL::asset('assets/plugins/jplist-table/css/jplist.core.min.css')}}" type="text/css" />--}}


@endpush
@section('styles')
    <style>

    </style>
@endsection
@section('content')

    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Matriculacion</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Starters Kit</a>
                            </li>
                            <li class="breadcrumb-item active">Light Layout
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-info round  dropdown-menu-right box-shadow-2 px-2"  onclick="window.location.reload(true);"><i class="ft-refresh-ccw icon-left"></i> Reload</button>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <h4 class="card-title float-left text-uppercase">Lista de estudiantes matriculados</h4></br>
                            <span>Para personalizar el listado de los estudiantes matriculados <code>Seleccione en la gestion</code>.</span>
                            {{--<div id="cascader1" class="form-constrol"></div>--}}
                            <span><code id="result_cascader"></code>.</span>
                            <button type="button" class="btn btn-info btn-min-width btn-round btn-glow mr-1 mt-0 float-right" data-toggle="modal" data-target="#privilegiosModal"><i class="ft-plus icon-left"></i>Adicionar</button>
                            <button type="button" class="btn btn-info btn-min-width btn-round btn-glow mr-1 mt-0 float-right" data-toggle="modal" data-target="#privilegiosModal"><i class="ft-plus icon-left"></i>Adicionar</button>
                        </div>
                        <div class="card-content">
                            <div class="card-body jplist-margin-top">
                                {{--contenido--}}
                                <!-- Simple User Cards with Border-->
                                    {{--<section id="simple-user-cards-with-border" class="row mt-2">--}}
                                        {{--<div class="col-12">--}}
                                            {{--<h4 class="text-uppercase">Simple User Cards with Border</h4>--}}
                                            {{--<p>Use color palette border class <code>border-color</code>, <code>border-lighten-*</code>.</p>--}}
                                        {{--</div>--}}

                                        <!-- demo -->
                                            <div id="demo" class="box jplist" >

                                                <!-- ios button: show/hide panel -->
                                                <div class="jplist-ios-button">
                                                    <i class="fa fa-sort"></i>
                                                    Desplegar para ver el menu de opciones
                                                </div>

                                                <!-- panel -->
                                                <div class="jplist-panel box panel-top">

                                                    <div id="cascader1" type="button" class="cascader-col-md-6"></div>
                                                    <!-- back button button -->
                                                    <button
                                                            type="button"
                                                            data-control-type="back-button"
                                                            data-control-name="back-button"
                                                            data-control-action="back-button">
                                                        <i class="fa fa-arrow-left"></i> Regresar
                                                    </button>

                                                    <!-- reset button -->
                                                    <button
                                                            type="button"
                                                            class="jplist-reset-btn"
                                                            data-control-type="reset"
                                                            data-control-name="reset"
                                                            data-control-action="reset">
                                                        Reset &nbsp;<i class="fa fa-share"></i>
                                                    </button>

                                                    <!-- items per page dropdown -->
                                                    <div
                                                            class="jplist-drop-down"
                                                            data-control-type="items-per-page-drop-down"
                                                            data-control-name="paging"
                                                            data-control-action="paging">

                                                        <ul>
                                                            <li><span data-number="3"> 3 por página </span></li>
                                                            <li><span data-number="5"> 5 por página </span></li>
                                                            <li><span data-number="10" data-default="true"> 10 por página </span></li>
                                                            <li><span data-number="all"> Ver Todo </span></li>
                                                        </ul>
                                                    </div>

                                                    <!-- sort dropdown -->
                                                    <div
                                                            class="jplist-drop-down"
                                                            data-control-type="sort-drop-down"
                                                            data-control-name="sort"
                                                            data-control-action="sort"
                                                            data-datetime-format="{month}/{day}/{year}"> <!-- {year}, {month}, {day}, {hour}, {min}, {sec} -->

                                                        <ul>
                                                            <li><span data-path="default">Ordenar por</span></li>
                                                            <li><span data-path=".title" data-order="asc" data-type="text">Título A-Z</span></li>
                                                            <li><span data-path=".title" data-order="desc" data-type="text">Título Z-A</span></li>
                                                            <li><span data-path=".desc" data-order="asc" data-type="text">Descripción A-Z</span></li>
                                                            <li><span data-path=".desc" data-order="desc" data-type="text">Descripción Z-A</span></li>
                                                            {{--<li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>--}}
                                                            {{--<li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>--}}
                                                            <li><span data-path=".date" data-order="asc" data-type="datetime">Fecha asc</span></li>
                                                            <li><span data-path=".date" data-order="desc" data-type="datetime">Fecha desc</span></li>
                                                        </ul>
                                                    </div>

                                                    <!-- filter by title -->
                                                    <div class="text-filter-box">

                                                        <i class="ft-search  jplist-icon"></i>

                                                        <!--[if lt IE 10]>
                                                        <div class="jplist-label">Buscar por Título:</div>
                                                        <![endif]-->

                                                        <input
                                                                data-path=".title"
                                                                type="text"
                                                                value=""
                                                                placeholder="Buscar por Título"
                                                                data-control-type="textbox"
                                                                data-control-name="title-filter"
                                                                data-control-action="filter"
                                                        />
                                                    </div>

                                                    <!-- filter by description -->
                                                    <div class="text-filter-box">

                                                        <i class="ft-search  jplist-icon"></i>

                                                        <!--[if lt IE 10]>
                                                        <div class="jplist-label">Buscar por Descripción:</div>
                                                        <![endif]-->

                                                        <input
                                                                data-path=".desc"
                                                                type="text"
                                                                value=""
                                                                placeholder="Buscar por Descripción"
                                                                data-control-type="textbox"
                                                                data-control-name="desc-filter"
                                                                data-control-action="filter"
                                                        />
                                                    </div>

                                                    <!-- views -->
                                                    <div
                                                            class="jplist-views"
                                                            data-control-type="views"
                                                            data-control-name="views"
                                                            data-control-action="views"
                                                            data-default="jplist-grid-view">

                                                        <button type="button" class="jplist-view jplist-list-view" data-type="jplist-list-view"></button>
                                                        <button type="button" class="jplist-view jplist-grid-view" data-type="jplist-grid-view"></button>
                                                        <button type="button" class="jplist-view jplist-thumbs-view" data-type="jplist-thumbs-view"></button>
                                                    </div>

                                                    <!-- pagination results -->
                                                    <div
                                                            class="jplist-label"
                                                            data-type="Página {current} de {pages}"
                                                            data-control-type="pagination-info"
                                                            data-control-name="paging"
                                                            data-control-action="paging">
                                                    </div>

                                                    <!-- pagination control -->
                                                    <div
                                                            class="jplist-pagination"
                                                            data-control-type="pagination"
                                                            data-control-name="paging"
                                                            data-control-action="paging">
                                                    </div>

                                                </div>

                                                <!-- data -->
                                                <div class="list box text-shadow" id="jplist-content-data">


                                                    <div class="list-item box">
                                                        <div class="img">
                                                            <img src="{{URL::asset('assets/plugins/jplist-table/img/thumbs/calendar-1.jpg')}}" alt="" title=""/>
                                                        </div>
                                                        <div class="block">
                                                            <p class="date">05/08/2003</p>
                                                            <p class="title">Calendar</p>
                                                            <p class="desc">A calendar is a system of organizing days for social, religious, commercial, or administrative purposes. This is done by giving names to periods of time, typically days, weeks, months, and years. The name given to each day is known as a date. Periods in a calendar (such as years and months) are usually, though not necessarily, synchronized with the cycle of the sun or the moon.</p>
                                                            <p class="theme">
                                                                <span class="other">Other</span>
                                                                <span class="group1">Group 1</span>
                                                            </p>
                                                            <p class="like">18 Likes</p>
                                                        </div>
                                                    </div>




                                                </div>

                                                <div class="box jplist-no-results text-shadow align-center">
                                                    <p>No se han encontrado resultados</p>
                                                </div>

                                            </div>

                                        {{--@for($i=0;$i<3;$i++)--}}
                                        {{--<div class="col-xl-3 col-md-6 col-12">--}}
                                            {{--<div class="card border-teal cad-boder border-lighten-2">--}}
                                                {{--<div class="text-center">--}}
                                                    {{--<div class="card-body card-body-image-top">--}}
                                                        {{--<img src="assets/images/user.jpg" class="rounded-circle  height-150"--}}
                                                             {{--alt="Card image">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="card-body">--}}
                                                        {{--<h4 class="card-title">Michelle Howard</h4>--}}
                                                        {{--<h6 class="card-subtitle text-muted">Managing Director</h6>--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--@endfor--}}

                                        {{--@for($i=0;$i<8;$i++)--}}
                                        {{--<div class="col-xl-3 col-md-6 col-12">--}}
                                            {{--<div class="card border-pink card-border border-lighten-2">--}}
                                                {{--<div class="text-center">--}}
                                                    {{--<div class="card-body card-body-image-top">--}}
                                                        {{--<img src="assets/images/user.jpg" class="rounded-circle  height-150"--}}
                                                             {{--alt="Card image">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="card-body">--}}
                                                        {{--<h4 class="card-title">Michelle Howard</h4>--}}
                                                        {{--<h6 class="card-subtitle text-muted">Managing Director</h6>--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--@endfor--}}

                                    {{--</section>--}}
                                    <!-- Simple User Cards with Border-->

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>








@endsection
@push('scripts')
    <script src="{{URL::asset('assets/plugins/bootstrap-cascader-edit/js/vendor.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-cascader-edit/js/bootstrap-cascader.js')}}"></script>

{{--    <script src="{{URL::asset('assets/plugins/jplist-table/js/require.js')}}"></script>--}}
    <script src="{{URL::asset('assets/plugins/jplist-table/js/jplist.core.min.js')}}"></script>
{{--    <script src="{{URL::asset('assets/plugins/jplist-table/js/jplist.core-ajax.min.js')}}"></script>--}}
    <script src="{{URL::asset('assets/plugins/jplist-table/js/jplist.sort-bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jplist-table/js/jplist.pagination-bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jplist-table/js/jplist.textbox-filter.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jplist-table/js/jplist.pagination-bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jplist-table/js/jplist.history-bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jplist-table/js/jplist.filter-toggle-bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jplist-table/js/jplist.list-grid-view.min.js')}}"></script>


@endpush
@section('scripts')

    <script>
        $(document).ready(function() {
            $('#demo').jplist({
                itemsBox: '.list',
                itemPath: '.list-item',
                panelPath: '.jplist-panel'
            });

        });

            {{--function pruebaCallback(callback){--}}
                {{--$.getJSON("{{route('pruebajson.show')}}", function (data) {--}}
                    {{--callback(data);--}}
                {{--});--}}
            {{--}--}}

            var mockLazyLoadFn = function () {
                return function (openedItems, callback) {
                    setTimeout(function () {
                        $.getJSON("{{route('pruebajson.show')}}", function (data) {
                            callback(data);
                        });
                    }, 500);
                }
            };

            $('#cascader1').bsCascader({
                openOnHover: true,
                splitChar: ' / ',
                loadData: mockLazyLoadFn(),
            }).on('bs.cascader.change', function (e, oldValue, newValue) {
                console.log(newValue);
                var dataArrayCascade = [];
                $('#result_cascader').text(JSON.stringify(newValue));
                $.each(newValue,function (index,value) {
                    dataArrayCascade[index]=value.code
                });
                nuevaCadena = dataArrayCascade.toString().replace(',', '/');
                console.log(nuevaCadena);
            });



    </script>
    <script>
        /************Pruebas*********************/
        {{--$.getJSON("{{route('getdataprueba')}}", function (data) {--}}
        {{--// var dataArrayListData = $.map(data, function (value, key) {--}}
        {{--//      return '{c: "' + value.ye + '",n: "' + value.ye + '"}';--}}
        {{--//  });--}}
        {{--var dataArrayListData = [];--}}
        {{--$.each(data,function (index,value) {--}}
        {{--dataArrayListData[index]={c: ""+value.ye+"",n: ""+value.ye+"" };--}}
        {{--});--}}
        {{--// ListData = '[' + dataArrayListData.toString() + ']';--}}
        {{--console.log(dataArrayListData);--}}
        {{--// console.log(JSON.parse(JSON.stringify(dataArrayListData)));--}}
        {{--});--}}

        {{--function getData() {--}}
        {{--return $.ajax({--}}
        {{--url : "{{route('pruebajson.show')}}",--}}
        {{--type: 'GET'--}}
        {{--});--}}
        {{--}--}}
        {{--function handleData(data /* , textStatus, jqXHR */ ) {--}}
        {{--console.log(data);--}}
        {{--}--}}
        {{--getData().done(handleData);--}}

        // var arreglo = [
        //     {dato: 'asdasd'},
        //     {dato:'234234'}
        // ];
        //
        // var nuevoArreglo = arreglo.map(function(o) {
        //     return Object.keys(o).reduce(function(array, key) {
        //         return array.concat([key, o[key]]);
        //     }, []);
        // });
        //
        // console.log(nuevoArreglo);


        // var usesss = new Object();
        // var localData =[
        //     {c: 'EM', n: 'Estudiantes matriculados',
        //         d: [{c: '2018',n: '2018'},{'c': '2018','n': '2018'},{'c': '2018','n': '2018'}],
        //     },
        //     {c: 'ENM', n: 'Estudiantes no matriculados', d: [{c: '2016', 'n': '2016'}, {c: '2017', n: '2017'}, {c: '2018', n: '2018'}, {c: '2019', n: '2019'}]},
        // ];
        // pruebaCallback(function(queHizo){
        // console.log((JSON.stringify(queHizo).substr(1).slice(0,-1)));
        // localData.splice(2,0,queHizo);
        // localData.push(JSON.parse('['+JSON.stringify(queHizo).substr(1).slice(0,-1)+']'));
        // console.log($.parseJSON(JSON.stringify(queHizo).substr(1).slice(0,-1)));
        // console.log(JSON.stringify(eval('('+queHizo+')')));
        // $.each(queHizo, function( index, value ) {
        //     usesss[index]=value;
        // });
        // usesss.push(queHizo);
        //     return queHizo;
        // });
        {{--localData.push({[{{c: 'hola',n:'hola'},{c: 'hola',n:'hola'}}]});--}}
        /************Pruebas fin*********************/


    </script>
    @yield('script')
@endsection

