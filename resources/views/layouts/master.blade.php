@php($active = Illuminate\Support\Facades\DB::select( Illuminate\Support\Facades\DB::raw("select c.descripcion from configuracions cf left join users u on cf.user_id=u.id left join colors c on cf.color_id=c.id where u.id=".\Illuminate\Support\Facades\Auth::user()->id." and cf.deleted_at is null") ))
@php($logs = Illuminate\Support\Facades\DB::select( Illuminate\Support\Facades\DB::raw("select l.id,l.user_id,r.name as rol,l.login_fecha,l.login_ip,if(p.nombres is null,u.name,concat(p.nombres,' ',p.paterno)) as nombres,p.imagen_perfil,p.direccion,p.email,p.telefono,p.celular from logs l left join users u on l.user_id=u.id left join personals p on u.id=p.user_id left join model_has_roles mr on u.id=mr.model_id left join roles r on mr.role_id=r.id where l.deleted_at is null order by l.login_fecha desc limit 15") ))

<!DOCTYPE html>
<html class="loading" lang="{{ app()->getLocale() }}" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="ATSOFT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{URL::asset('assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets/images/ico/favicon.ico')}}">
    {{--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">--}}
    <link href="{{URL::asset('assets/fonts/googlefont-opensans/googlefont-opensans.css')}}" rel="stylesheet">
    {{--<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css')}}" rel="stylesheet">--}}
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/vendors.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/app.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jquery-toast/dist/jquery.toast.min.css')}}" type="text/css"/>
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
    <!-- END Custom CSS-->
    @stack('styles')
    @yield('styles')
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<!-- fixed-top-->
<nav id="nav-bar-color" class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light {{$active[0]->descripcion ?: ''}} navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="{{url('/')}}"><img class="brand-logo" alt="modern admin logo" src="{{URL::asset('assets/images/logo/logo.png')}}">
                        <h3 class="brand-text">Modern Admin</h3></a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Modern...">
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class=" nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown" aria-expanded="true"><i class="ficon ft-bell"></i></a>
                    </li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class=" nav-item">
                        <a class="nav-link nav-link-label" href="{{ route('logout') }}" data-toggle="dropdown" aria-expanded="true" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ficon ft-power"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="modal" data-target="#large"><i class="ficon ft-settings"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <div class="card" id="card-panel-hide-left">
                <div class="text-center">
                    <div class="card-body">
                        <img src='@if(isset(Auth::user()->personal[0])) {{route('images.show',Auth::user()->personal[0]['imagen_perfil']) ?: route('images.show','perfil.jpg')}} @else {{route('images.show','perfil.jpg')}} @endif' class="rounded-circle  height-150 imagen_perfil_picture" alt="Card image">
                    </div>
                    <div class="card-body d-md-block card-body-top">
                        <h4 class="card-title">@if(isset(Auth::user()->personal[0])) {{Auth::user()->personal[0]['nombres'].' '.Auth::user()->personal[0]['paterno']}} @else {{Auth::user()->name}} @endif</h4>
                        <h6 class="card-subtitle text-muted">@if(isset(Auth::user()->roles[0])){{Auth::user()->roles[0]->name}} @else 'sin rol' @endif</h6>
                    </div>
                </div>
            </div>
            <div class="card panel-show-left panel-show-left-show" id="card-panel-hide-left-show">
                <div class="text-center">
                    <div class="card-body">
                        <img src='@if(isset(Auth::user()->personal[0])) {{route('images.show',Auth::user()->personal[0]['imagen_perfil']) ?: 'perfil.jpg'}} @else {{route('images.show','perfil.jpg')}} @endif' class="rounded-circle  imagen_perfil_picture" alt="Card image" style="height: 45px">
                    </div>
                </div>
            </div>

            <li class="@if(request()->is('home')) open @endif  nav-item"><a href="{{url('home')}}"><i class="ft-grid"></i><span class="menu-title" data-i18n="">Principal</span></a></li>
            <li class="@if(request()->is('calendario')) open @endif  nav-item"><a href="{{url('calendario')}}"><i class="ft-calendar"></i><span class="menu-title" data-i18n="">Calendario</span></a></li>
            <li class="@if(request()->is('filemanager')) open @endif  nav-item"><a href="{{url('filemanager')}}"><i class="ft-folder"></i><span class="menu-title" data-i18n="">Archivos</span></a></li>
            <li class="@if(request()->is('matriculacion')) open @endif  nav-item"><a href="{{url('matriculacion')}}"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Matriculacion</span></a></li>
            <li class="@if(request()->is('calificaciones')) open @endif  nav-item"><a href="{{url('calificaciones')}}"><i class="ft-edit"></i><span class="menu-title" data-i18n="">Calificaciones</span></a></li>
            <li class="@if(request()->is('horarios')) open @endif  nav-item"><a href="{{url('horarios')}}"><i class="ft-clock"></i><span class="menu-title" data-i18n="">Horarios</span></a></li>
            <li class="@if(request()->is('actividades')) open @endif  nav-item"><a href="{{url('actividades')}}"><i class="ft-crosshair"></i><span class="menu-title" data-i18n="">Actividades</span></a></li>
            <li class="@if(request()->is('reportes')) open @endif  nav-item"><a href="{{url('reportes')}}"><i class="ft-printer"></i><span class="menu-title" data-i18n="">Reportes</span></a></li>
            <li class="@if(request()->is('administracion')) open @endif  nav-item"><a href="{{url('administracion')}}"><i class="ft-server"></i><span class="menu-title" data-i18n="">Administracion</span></a></li>
            <li class="@if(request()->is('configuraciones')) open @endif  nav-item"><a href="{{url('configuraciones')}}"><i class="ft-sliders"></i><span class="menu-title" data-i18n="">Configuracion</span></a></li>
        </ul>
    </div>
</div>

<div class="app-content content">
    @yield('content')
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
        <!-- Modal -->
        <div class="modal right fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card-content">
                            {{--<div class="card-body">--}}
                                <ul class="nav nav-tabs nav-linetriangle">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="baseIcon-tab31" data-toggle="tab" aria-controls="tabIcon31"
                                           href="#tabIcon31" aria-expanded="true"><i class="ficon ft-settings"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="baseIcon-tab32" data-toggle="tab" aria-controls="tabIcon32"
                                           href="#tabIcon32" aria-expanded="false"><i class="ficon ft-activity"></i> Actividades</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="tabIcon31" aria-expanded="true"
                                         aria-labelledby="baseIcon-tab31">
                                        <br>
                                        <h4 class="form-section"><i class="ft-sun icon-left"> </i> Temas</h4>
                                        <div class="card-body card-body-color-theme" >
                                            <!--                                                <span class="badge badge badge-success float-right mr-2">New</span>-->
                                            <ul class="list-unstyled config-color" id="card-color-theme">
                                                <li id="1" class="bg-primary"></li>
                                                <li id="2" class="bg-primary bg-darken-2"></li>
                                                <li id="3" class="bg-danger"></li>
                                                <li id="4" class="bg-danger bg-lighten-2"></li>
                                                <li id="5" class="bg-success"></li>
                                                <li id="6" class="bg-success bg-darken-3"></li>
                                                <li id="7" class="bg-warning"></li>
                                                <li id="8" class="bg-warning bg-lighten-2"></li>
                                                <li id="9" class="bg-warning bg-darken-3"></li>
                                                <li id="10" class="bg-info"></li>
                                                <li id="11" class="bg-blue bg-darken-2"></li>
                                                <li id="12" class="bg-red"></li>
                                                <li id="13" class="bg-red bg-darken-2"></li>
                                                <li id="14" class="bg-pink"></li>
                                                <li id="15" class="bg-pink bg-darken-2"></li>
                                                <li id="16" class="bg-purple"></li>
                                                <li id="17" class="bg-purple bg-darken-2"></li>
                                                <li id="18" class="bg-cyan"></li>
                                                <li id="19" class="bg-cyan bg-darken-2"></li>
                                                <li id="20" class="bg-teal"></li>
                                                <li id="21" class="bg-teal bg-darken-2"></li>
                                                <li id="22" class="bg-yellow bg-darken-2"></li>
                                                <li id="23" class="bg-yellow bg-darken-3"></li>
                                                <li id="24" class="bg-yellow bg-darken-4"></li>
                                            </ul>
                                        </div>
                                        </br></br></br></br></br></br></br></br></br></br>
                                        <h4 class="form-section"><i class="ft-sliders icon-left"> </i> Actualizar datos personales</h4>
                                        <div class="card-body card-body-color-theme">
                                            <a href="{{url('configuraciones')}}" class="btn btn-info btn-min-width btn-round btn-glow mr-1 mt-1 btn-block"><i class="ft-sliders icon-left"></i>Ir a configuraciones</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabIcon32" aria-labelledby="baseIcon-tab32">
                                        <h4>Usuarios conectados recientemente</h4>

                                        @foreach($logs as $log)
                                        <div class="media">
                                            <div class="media-left mr-1">
                                                <a>
                                                    <span class="avatar avatar-online">
                                                      <img src="{{route('images.show',$log->imagen_perfil) ?: route('images.show','perfil.jpg')}}" alt="avatar">
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="text-bold-600 mb-0"><a href="#">{{$log->nombres}}</a></br><span>{{$log->rol}}</span></p>
                                                <p>Conectado {{ \FormatTime::LongTimeFilter($log->login_fecha) }}. <br><b>IP: </b>{{$log->login_ip}} <b>P: </b>{{$log->celular}}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            {{--</div>--}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- BEGIN VENDOR JS-->
<script src="{{URL::asset('assets/js/core/libraries/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/vendors/js/ui/popper.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/js/core/libraries/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/vendors/js/ui/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/vendors/js/ui/unison.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/vendors/js/ui/blockUI.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/vendors/js/ui/jquery-sliding-menu.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<script src="{{URL::asset('assets/plugins/jquery-toast/dist/jquery.toast.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jQuery-Form-Validator/jquery.form-validator.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>
<script src="{{URL::asset('assets/plugins/moment/moment-with-locales.js')}}"></script>
<!-- BEGIN MODERN JS-->
<script src="{{URL::asset('assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/js/core/app.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
<script src="{{URL::asset('assets/js/clay.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/js/scripts.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        // $.validate({
        //     lang : 'es',
        //     modules : 'sanitize, date, security, file, html5',
        //     validateOnBlur : true,
        //     showHelpOnFocus : true,
        // });
        // moment.locale('es');
        // $(".select2").select2({
        //     language: "es"
        // });
        llenar_color_navbar();
    });
        $('#card-color-theme li').click(function(){
            var color_id = $(this).attr('id');
            // var class_name = $(this).attr('class');
            var token = $('input[name=_token]').val();
            var route = "{{route('configureColor.update')}}";
            // $('#nav-bar-color').removeClass('bg-');

            // $('#nav-bar-color').addClass(class_name).change();
            // alert(color_id+class_name)
            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',
                datatype: 'json',
                data: {
                    color_id: color_id,
                },
                success: function (data) {
                    if (data.success) {
                        messageSuccess('Correcto','Color cambiado correctamente');
                        // llenar_color_navbar();
                        window.location.reload(true);

                    }
                },
                error: function (data) {
                    if (data.error) {
                        $.each(data.responseJSON.errors, function (index, error) {
                            messageError('Error al procesar',error);
                        });
                    }
                    if (data.status == 422) {
                        console.clear();
                    }
                }
            });
        })

        {{--var llenar_color_navbar = function () {--}}
            {{--$.getJSON("{{route('colorAll.show')}}", function (data) {--}}
                {{--$.each(data, function (index,value) {--}}
                    {{--$('#nav-bar-color').addClass(value.descripcion).change();--}}
                {{--});--}}
            {{--});--}}
        {{--}--}}

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


</script>
@stack('scripts')
@yield('scripts')
</body>
</html>