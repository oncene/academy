@extends('layouts.master')
@section('title','Actividades generales')
@push('styles')
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-cascader/css/vendor.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-cascader/css/bootstrap-cascader.min.css')}}" type="text/css" />

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
                            <div id="cascader1"></div>
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
                                                    <div class="card-body">
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
                                                    <div class="card-body">
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
    <script src="{{URL::asset('assets/plugins/bootstrap-cascader/js/vendor.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-cascader/js/bootstrap-cascader.js')}}"></script>


@endpush
@section('scripts')

    <script>
        $(document).ready(function() {
            var localData =[
                {c: 'zhao', n: '赵', d: [{c: 'jia', n: '甲'}, {c: 'yi', n: '已'}, {c: 'bing', n: '丙'}]},
            ]
            $('#cascader1').bsCascader({
                openOnHover: true,
                splitChar: ' / ',
                loadData: function (openedItems, callback) {
                    callback(localData);
                }
            }).on('bs.cascader.change', function (e, oldValue, newValue) {
                $('#result_cascader').text(JSON.stringify(newValue));
            });
        });


    </script>
    @yield('script')
@endsection

