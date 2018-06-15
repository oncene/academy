@extends('layouts.master')
@section('title','Actividades generales')
@push('styles')
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-cascader-edit/css/cascade-select-edit.css')}}" type="text/css" />
{{--    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-cascader-edit/css/vendor.min.css')}}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-cascader-edit/css/bootstrap-cascader.min.css')}}" type="text/css" />--}}

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
                            <div id="cascader1" class="form-constrol"></div>
                            <span><code id="result_cascader"></code>.</span>
                            <button type="button" class="btn btn-info btn-min-width btn-round btn-glow mr-1 mt-0 float-right" data-toggle="modal" data-target="#privilegiosModal"><i class="ft-plus icon-left"></i>Adicionar</button>
                            <button type="button" class="btn btn-info btn-min-width btn-round btn-glow mr-1 mt-0 float-right" data-toggle="modal" data-target="#privilegiosModal"><i class="ft-plus icon-left"></i>Adicionar</button>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                {{--contenido--}}
                                <!-- Simple User Cards with Border-->
                                    <section id="simple-user-cards-with-border" class="row mt-2">
                                        {{--<div class="col-12">--}}
                                            {{--<h4 class="text-uppercase">Simple User Cards with Border</h4>--}}
                                            {{--<p>Use color palette border class <code>border-color</code>, <code>border-lighten-*</code>.</p>--}}
                                        {{--</div>--}}
                                        @for($i=0;$i<3;$i++)
                                        <div class="col-xl-3 col-md-6 col-12">
                                            <div class="card border-teal cad-boder border-lighten-2">
                                                <div class="text-center">
                                                    <div class="card-body card-body-image-top">
                                                        <img src="assets/images/user.jpg" class="rounded-circle  height-150"
                                                             alt="Card image">
                                                    </div>
                                                    <div class="card-body">
                                                        <h4 class="card-title">Michelle Howard</h4>
                                                        <h6 class="card-subtitle text-muted">Managing Director</h6>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endfor

                                        @for($i=0;$i<8;$i++)
                                        <div class="col-xl-3 col-md-6 col-12">
                                            <div class="card border-pink card-border border-lighten-2">
                                                <div class="text-center">
                                                    <div class="card-body card-body-image-top">
                                                        <img src="assets/images/user.jpg" class="rounded-circle  height-150"
                                                             alt="Card image">
                                                    </div>
                                                    <div class="card-body">
                                                        <h4 class="card-title">Michelle Howard</h4>
                                                        <h6 class="card-subtitle text-muted">Managing Director</h6>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endfor
                                    </section>
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


@endpush
@section('scripts')

    <script>
        $(document).ready(function() {
            var brut ={};

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


            function pruebaCallback(callback){
                $.getJSON("{{route('pruebajson.show')}}", function (data) {
                    callback(data);
                });
            }

            var mockLazyLoadFn = function () {
                return function (openedItems, callback) {
                    setTimeout(function () {
                        pruebaCallback(function(queHizo){
                            callback(queHizo);
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
        });


    </script>
    @yield('script')
@endsection

