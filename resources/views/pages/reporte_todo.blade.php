@extends('layouts.master')
@section('title','Reportes generales')
@push('styles')
    {{--<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.css')}}" type="text/css" />--}}

@endpush
@section('styles')
    <style>

    </style>
@endsection
@section('content')

    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Light Layout</h3>
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
                            <h4 class="card-title">Gestionar todos los modulos</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                {{--contenido--}}
                                contenido aqui

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>








@endsection
@push('scripts')

{{--    <script src="{{URL::asset('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js')}}"></script>--}}


@endpush
@section('scripts')

    <script>
        $(document).ready(function() {

        });


    </script>
    @yield('script')
@endsection

