
@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/Buttons-1.5.1/css/buttons.bootstrap4.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/FixedColumns-3.2.4/css/fixedColumns.dataTables.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/FixedColumns-3.2.4/css/fixedColumns.bootstrap4.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/Select-1.2.5/css/select.dataTables.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/Select-1.2.5/css/select.bootstrap4.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/Responsive-2.2.1/css/responsive.dataTables.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/Responsive-2.2.1/css/responsive.bootstrap4.min.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jquery-confirm/jquery-confirm.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jquery-confirm/jquery-confirm-theme.min.css')}}" type="text/css"/>

{{--    <link rel="stylesheet" href="{{URL::asset('assets/plugins/multi-select/css/multi-select.css')}}" type="text/css"/>--}}

{{--    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/forms/wizard.css')}}" type="text/css"/>--}}
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/css/pickers/daterange/daterangepicker.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/pickers/daterange/daterange.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{URL::asset('assets/vendors/css/forms/listbox/bootstrap-duallistbox.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/forms/dual-listbox.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jquery-toast/dist/jquery.toast.min.css')}}" type="text/css"/>
{{--    <link rel="stylesheet" href="{{URL::asset('assets/vendors/css/forms/selects/selectivity-full.min.css')}}" type="text/css"/>--}}

    <link rel="stylesheet" href="{{URL::asset('assets/plugins/smartwizard/dist/css/smart_wizard.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/css/forms/selects/select2.min.css')}}" type="text/css"/>

    {{--<link rel="stylesheet" href="{{URL::asset('assets/css/plugins/forms/selectivity/selectivity.css')}}" type="text/css"/>--}}
{{--    <link rel="stylesheet" href="{{URL::asset('assets/plugins/selectivity-3.0.6/selectivity-jquery.min.css')}}" type="text/css"/>--}}
{{--    <link rel="stylesheet" href="{{URL::asset('assets/plugins/selectivity-3.0.6/selectivity.min.css')}}" type="text/css"/>--}}
{{--    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/forms/validation/form-validation.css')}}" type="text/css"/>--}}

{{--    <link rel="stylesheet" href="{{URL::asset('assets/plugins/material-bootstrap-wizard/css/material-bootstrap-wizard.css')}}" type="text/css"/>--}}
{{--    <link rel="stylesheet" href="{{URL::asset('assets/plugins/material-bootstrap-wizard/css/material-bootstrap-wizard-demo.css')}}" type="text/css"/>--}}
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
                    <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Gestiona todos</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="nav-vertical">
                                    <ul class="nav nav-tabs nav-left nav-border-left">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" aria-controls="carreras" href="#carreras" aria-expanded="true">CARRERAS</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#materias" aria-expanded="false">MATERIAS</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#docentes" aria-expanded="false">DOCENTES</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#estudiantes" aria-expanded="false">ESTUDIANTES</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#apoderados" aria-expanded="false">APODERADOS</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#horarios" aria-expanded="false">HORARIOS</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#semestre" aria-expanded="false">SEMESTRE</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#evaluacion" aria-expanded="false">EVALUACION</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#encuesta" aria-expanded="false">ENCUESTA</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#publico" aria-expanded="false">PUBLICO</a></li>
                                        @can('administracion.privilegios.listar')
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#privilegios" aria-expanded="false">PRIVILEGIOS</a></li>
                                        @endcan
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usuarios" aria-expanded="false">USUARIOS</a></li>
                                    </ul>
                                    <div class="tab-content px-1">
                                        <div role="tabpanel" class="tab-pane active" id="carreras" >
                                            @include('partials.administracion.carrera')
                                        </div>
                                        <div class="tab-pane" id="materias" >
                                            @include('partials.administracion.materia')
                                        </div>
                                        <div class="tab-pane" id="docentes" >
                                            @include('partials.administracion.docente')
                                        </div>
                                        <div class="tab-pane" id="privilegios" >
                                            @include('partials.administracion.privilegio')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>








@endsection
@push('scripts')
{{--    <script src="{{URL::asset('plugins/bootstrap4-fullscreen-modal/dist/bootstrap4-modal-fullscreen.min.css')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/vendors/js/vendors.min.js')}}"></script> <!-- Jquery Validation Plugin Css -->--}}
{{--    <script src="{{URL::asset('assets/plugins/jquery-validation/jquery.validate.js')}}"></script> <!-- Jquery Validation Plugin Css -->--}}
{{--    <script src="{{URL::asset('plugins/jquery-steps/jquery.steps.js')}}"></script> <!-- JQuery Steps Plugin Js -->--}}
{{--    <script src="{{URL::asset('js/pages/forms/form-wizard.js')}}"></script>--}}

    <script src="{{URL::asset('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/Buttons-1.5.1/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/pdfmake-0.1.32/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/pdfmake-0.1.32/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/JSZip-2.5.0/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/Buttons-1.5.1/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/Buttons-1.5.1/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/Responsive-2.2.1/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/Responsive-2.2.1/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/FixedColumns-3.2.4/js/dataTables.fixedColumns.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatables/Select-1.2.5/js/dataTables.select.min.js')}}"></script>


    <script src="{{URL::asset('assets/plugins/jquery-confirm/jquery-confirm.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/scripts/tooltip/tooltip.js')}}"></script>


    <script src="{{URL::asset('assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
{{--    <script src="{{URL::asset('assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>--}}
    <script src="{{URL::asset('assets/vendors/js/forms/listbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
{{--    <script src="{{URL::asset('assets/vendors/js/forms/select/selectivity-full.min.js')}}"></script>--}}

    <script src="{{URL::asset('assets/plugins/jquery-toast/dist/jquery.toast.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/js/forms/select/select2.full.min.js')}}"></script>

{{--    <script src="{{URL::asset('assets/plugins/material-bootstrap-wizard/js/wizard-jquery.bootstrap.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/material-bootstrap-wizard/js/material-bootstrap-wizard.js')}}"></script>--}}




@endpush
@section('scripts')

<script>
    $(document).ready(function() {
        moment.locale('es');
        $(".select2").select2({
            language: "es"
        });
        listarExample();
        listar_table_privilegios();

    });

    //************** TOAST **********************/
    var messageWarning= function (messageTitle,messageText) {
        $.toast({
            heading: messageTitle,
            text: messageText,
            icon: 'warning',
            loader: true,
            loaderBg: '#fea617',
            bgColor: '#FEC107',
            textColor: 'white',
            position: 'top-right',
            hideAfter: 2500,
        })
    };
    var messageInfo= function (messageTitle,messageText) {
        $.toast({
            heading: messageTitle,
            text: messageText,
            icon: 'info',
            loader: true,
            loaderBg: '#1283EC',
            bgColor: '#03A9F3',
            textColor: 'white',
            position: 'top-right',
            hideAfter: 2500,
        })
    };
    var messageSuccess = function (messageTitle,messageText) {
        $.toast({
            heading: messageTitle,
            text: messageText,
            icon: 'success',
            loader: true,
            loaderBg: '#04d0a8',
            bgColor: '#08DDC1',
            textColor: 'white',
            position: 'top-right',
            hideAfter: 2500,
        })
    };
    var messageError = function (messageTitle,messageText) {
        $.toast({
            heading: messageTitle,
            text: messageText,
            icon: 'error',
            loader: true,
            loaderBg: '#c61b48',
            bgColor: '#FF1356',
            textColor: 'white',
            position: 'top-right',
            hideAfter: 2500,
        })
    };


    //************** multiselect dual **********************/
    // var duallistbox = function () {
    //     alert($('.duallistbox').val());
    // }

    //************** step **********************/
    // $(".icons-tab-steps").steps({
    //     headerTag: "h6",
    //     bodyTag: "fieldset",
    //     transitionEffect: "fade",
    //     titleTemplate: '<span class="step">#index#</span> #title#',
    //     labels: {
    //         finish: 'Close'
    //     },
    //     onFinished: function (event, currentIndex) {
    //         $('#privilegiosModal').modal('hide');
    //         $('#privilegiosModal').find('form').trigger('reset');
    //     }
    // });









    /*********************************************  ***********************************************/




</script>
@yield('script')
@endsection

