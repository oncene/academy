@extends('layouts.master')
@section('title','Configuracion del perfil')
@push('styles')
    <link rel="stylesheet" href="{{URL::asset('assets/css/pages/users.css')}}" type="text/css" />

@endpush

@section('content')

    <div class="content-wrapper">
        {{--<div class="content-header row">--}}
            {{--<div class="content-header-left col-md-6 col-12 mb-2">--}}
                {{--<h3 class="content-header-title">Light Layout</h3>--}}
                {{--<div class="row breadcrumbs-top">--}}
                    {{--<div class="breadcrumb-wrapper col-12">--}}
                        {{--<ol class="breadcrumb">--}}
                            {{--<li class="breadcrumb-item"><a href="index.html">Home</a>--}}
                            {{--</li>--}}
                            {{--<li class="breadcrumb-item"><a href="#">Starters Kit</a>--}}
                            {{--</li>--}}
                            {{--<li class="breadcrumb-item active">Light Layout--}}
                            {{--</li>--}}
                        {{--</ol>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="content-header-right col-md-6 col-12">--}}
                {{--<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">--}}
                    {{--<button type="button" class="btn btn-info round  dropdown-menu-right box-shadow-2 px-2"  onclick="window.location.reload(true);"><i class="ft-refresh-ccw icon-left"></i> Reload</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="content-body">
        <div id="user-profile">
            <section class="row">

            <div class="col-xl-12 col-lg-12">

                <div class="card profile-with-cover">
                    <div class="card-img-top img-fluid bg-cover height-300" id="imagen_portada_picture"  style="background: url('@if(isset(Auth::user()->personal[0])) {{route('images.show',Auth::user()->personal[0]['imagen_portada']) ?: 'portada.jpg'}} @else {{route('images.show','portada.jpg')}} @endif') 50%;"></div>
                    <div class="media profil-cover-details w-100">
                        <div class="media-left pl-2 pt-2">
                            <a href="#" class="profile-image">
                                <img id="imagen_perfil_picture" src='@if(isset(Auth::user()->personal[0])) {{route('images.show',Auth::user()->personal[0]['imagen_perfil']) ?: 'perfil.jpg'}} @else {{route('images.show','perfil.jpg')}} @endif' class="rounded-circle img-border height-150 imagen_perfil_picture" alt="Card image">
                            </a>
                        </div>
                        <div class="media-body pt-3 px-2">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">@if(isset(Auth::user()->personal[0])) {{Auth::user()->personal[0]['nombres'].' '.Auth::user()->personal[0]['paterno']}} @else {{Auth::user()->name}} @endif</h3>
                                    <h6 class="card-subtitle card-text-font">@if(isset(Auth::user()->roles[0])){{Auth::user()->roles[0]->name}} @else 'sin rol' @endif</h6>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-content collapse show mt-4">
                        <div class="card-body mt-2">
                            <div class="card-text">
                                <p>Add <code>.row-separator</code> to form tag to add border bottom
                                    to a form-group. In this example 2-column <code>.form-horizontal</code>                        is used with primary color bordered form controls to show
                                    the row separator functionality.</p>
                                {{--<p>{{Auth::user()->personal[0]['id']}}</p>--}}
                            </div>
                            <form class="form form-horizontal" id="form_personal"   enctype="multipart/form-data">
                                {{csrf_field()}}
{{--                                @foreach ($personals as $personal)--}}
                                    {{--@if ($loop->first)--}}

                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user-check"></i> Datos personales</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="ci">CI:</label>
                                                    <div class="col-md-5">
                                                        <input type="text" id="ci" class="form-control" placeholder="Cedula de identidad" name="ci" value="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        {{--<input type="text" id="expedido" class="form-control" placeholder="Expedido" name="expedido" value="">--}}
                                                        <select name="expedido" id="expedido" class="form-control" value="">
                                                            <option value="">Expedido en...</option>
                                                            <option value="LP">LA PAZ</option>
                                                            <option value="ST">SANTA CRUZ</option>
                                                            <option value="BE">BENI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nombres">Nombres:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nombres" class="form-control " placeholder="Nombres" name="nombres" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="paterno">Apellido Paterno:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="paterno" class="form-control " placeholder="Apellido paterno" name="paterno" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="materno">Apellido Materno:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="materno" class="form-control " placeholder="Nick Name" name="materno" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="fecha_nacimiento">Fecha de nacimiento:</label>
                                                    <div class="col-md-9">
                                                        <input type="date" id="fecha_nacimiento" class="form-control " name="fecha_nacimiento" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="sexo">Sexo:</label>
                                                    <div class="col-md-9">
                                                        <select name="sexo" id="sexo" class="form-control" value="">
                                                            <option value="FASCULINO">MASCULINO</option>
                                                            <option value="FEMENINO">FEMENINO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="imagen_perfil">Imagen de perfil:</label>
                                                    <div class="col-md-9">
                                                        <input type="file" id="imagen_perfil" class="form-control " name="imagen_perfil">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="imagen_portada">Imagen de portada:</label>
                                                    <div class="col-md-9">
                                                        <input type="file" id="imagen_portada" class="form-control " name="imagen_portada">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row last">
                                                    <label class="col-md-3 label-control" for="ocupacion">Ocupacion:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="ocupacion" class="form-control " name="ocupacion" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row last">
                                                    <label class="col-md-3 label-control" for="estado_civil">Estado Civil:</label>
                                                    <div class="col-md-9">
                                                        <select name="estado_civil" id="estado_civil" class="form-control" value="">
                                                            <option value="CASADO">CASADO</option>
                                                            <option value="SOLTERO">SOLTERO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="form-section"><i class="ft-message-square"></i> Informacion de contacto</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="email">Email:</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " type="email" placeholder="email" name="email" id="email" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="telefono">Telefono:</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " type="tel" placeholder="Telefono fijo" name="telefono" id="telefono" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="celular">Celular:</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " type="tel" placeholder="Numero personal" name="celular" id="celular" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row last">
                                                    <label class="col-md-3 label-control" for="direccion">Direccion:</label>
                                                    <div class="col-md-9">
                                                        <textarea id="direccion" rows="6" class="form-control " name="direccion" placeholder="Direccion" value=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="red_facebook">Facebook:</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " type="url" placeholder="http://facebook.com/" name="red_facebook" id="red_facebook" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="red_twitter">Twitter:</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " type="url" placeholder="http://twitter.com/" name="red_twitter" id="red_twitter" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="red_instagram">Instagram:</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " type="url" placeholder="http://instagram.com/" name="red_instagram" id="red_instagram" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="red_google">Google:</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " type="url" placeholder="http://google.com/" name="red_google" id="red_google" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--@endif--}}
                                {{--@endforeach--}}
                                <div class="form-actions right">
                                    <button type="button" class="btn btn-danger mr-1">
                                        <i class="ft-x icon-left"></i> Cancelar
                                    </button>
                                    <button type="submit" class="btn btn-info">
                                        <i class="ft-check icon-left"></i> Guardar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>


            </div>
        </section>

        </div>
        </div>
    </div>








@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            llenar_datos_personal();
        });
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

        var llenar_datos_personal = function () {
            $.getJSON("{{route('personalAll.show')}}",function (data) {
                $.each(data, function (index,value) {
                    if(value.ci||value.nombres){
                        $('#ci').attr('disabled','true');
                        $('#expedido').attr('disabled','true');
                        $('#nombres').attr('disabled','true');
                        $('#paterno').attr('disabled','true');
                        $('#materno').attr('disabled','true');
                        $('#fecha_nacimiento').attr('disabled','true');
                        $('#sexo').attr('disabled','true');
                    }
                    $('#ci').val(value.ci);
                    $('#expedido').val(value.expedido);
                    $('#nombres').val(value.nombres);
                    $('#paterno').val(value.paterno);
                    $('#materno').val(value.materno);
                    $('#fecha_nacimiento').val(value.fecha_nacimiento);
                    $('#sexo').val(value.sexo);
                    $('#ocupacion').val(value.ocupacion);
                    $('#estado_civil').val(value.estado_civil);
                    $('#email').val(value.email);
                    $('#telefono').val(value.telefono);
                    $('#celular').val(value.celular);
                    $('#direccion').val(value.direccion);
                    $('#email').val(value.email);
                    $('#red_facebook').val(value.red_facebook);
                    $('#red_twitter').val(value.red_twitter);
                    $('#red_instagram').val(value.red_instagram);
                    $('#red_google').val(value.red_google);
                });
            });
        };

            $("#form_personal").submit(function(e) {
                e.preventDefault();
                var route = "{{ route('configuracionUpdate.update','') }}";
                var token = $('input[name=_token]').val();
                var $form = $('#form_personal');
                $.ajax({
                    url: route + '?' + $form.serialize(),
                    headers: {'X-CSRF-TOKEN': token},
                    type: "POST",
                    data: new FormData($form[0]),
                    datatype: 'json',
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        if (data.success) {
                            if(data.imagen_perfil_path){
                                $('.imagen_perfil_picture').attr('src','{{url('images')}}/'+data.imagen_perfil_path+'?'+ new Date().getTime());
                            }
                            if(data.imagen_portada_path){
                                $('#imagen_portada_picture').attr('style',"background: url({{url('images')}}/"+data.imagen_portada_path+"?"+ new Date().getTime()+")");
                            }
                            $('#form_personal-modal').find('form').trigger('reset');
                            llenar_datos_personal();
                            messageSuccess('Correcto','Registro adicionado correctamente');
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (index, error) {
                            messageError('Error al registrar',error);
                        });
                        if(data.status == 422){
                            console.clear();
                        }
                    }
                });
            });
        // });


    </script>

@endsection

