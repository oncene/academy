@extends('layouts.master')
@section('title','Actividades generales')
@push('styles')
    <link rel="stylesheet" href="{{URL::asset('assets/css/pages/users.css')}}" type="text/css" />

@endpush
@section('styles')
    <style>

    </style>
@endsection
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
                    <div class="card-img-top img-fluid bg-cover height-300" style="background: url('assets/images/carousel/22.jpg') 50%;"></div>
                    <div class="media profil-cover-details w-100">
                        <div class="media-left pl-2 pt-2">
                            <a href="#" class="profile-image">
                                <img src="assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border height-150"
                                     alt="Card image">
                            </a>
                        </div>
                        <div class="media-body pt-3 px-2">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">Jose Diaz</h3>
                                    <h6 class="card-subtitle card-text-font">Administrador</h6>
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
                            </div>
                            <form class="form form-horizontal row-separator" id="form_personal">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user-check"></i> Datos personales</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ci">CI:</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="ci" class="form-control" placeholder="Cedula de identidad"
                                                           name="ci">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nombres">Nombres:</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nombres" class="form-control " placeholder="Nombres"
                                                           name="nombres">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="paterno">Apellido Paterno:</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="paterno" class="form-control " placeholder="Apellido paterno"
                                                           name="paterno">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="materno">Apellido Materno:</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="materno" class="form-control " placeholder="Nick Name"
                                                           name="materno">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="imagen_perfil">Imagen de perfil:</label>
                                                <div class="col-md-9">
                                                    <input type="file" id="imagen_perfil" class="form-control "
                                                           name="imagen_perfil">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="imagen_portada">Imagen de portada:</label>
                                                <div class="col-md-9">
                                                    <input type="file" id="imagen_portada" class="form-control "
                                                           name="imagen_portada">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="fecha_nacimiento">Fecha de nacimiento:</label>
                                                <div class="col-md-9">
                                                    <input type="date" id="fecha_nacimiento" class="form-control "
                                                           name="fecha_nacimiento">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="sexo">Sexo:</label>
                                                <div class="col-md-9">
                                                    <select name="sexo" id="sexo" class="form-control">
                                                        <option value="FASCULINO">MASCULINO</option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row last">
                                                <label class="col-md-3 label-control" for="ocupacion">Ocupacion:</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="ocupacion" class="form-control "
                                                           name="ocupacion">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row last">
                                                <label class="col-md-3 label-control" for="estado_civil">Estado Civil:</label>
                                                <div class="col-md-9">
                                                    <select name="estado_civil" id="estado_civil" class="form-control">
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
                                                    <input class="form-control " type="email" placeholder="email" name="email" id="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="telefono">Telefono:</label>
                                                <div class="col-md-9">
                                                    <input class="form-control " type="url" placeholder="Telefono fijo" name="telefono" id="telefono">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="celular">Celular:</label>
                                                <div class="col-md-9">
                                                    <input class="form-control " type="tel" placeholder="Numero personal" name="celular" id="celular">
                                                </div>
                                            </div>
                                            <div class="form-group row last">
                                                <label class="col-md-3 label-control" for="direccion">Direccion:</label>
                                                <div class="col-md-9">
                                                    <textarea id="userinput8" rows="6" class="form-control " name="direccion" placeholder="Direccion"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="red_facebook">Facebook:</label>
                                                <div class="col-md-9">
                                                    <input class="form-control " type="tel" placeholder="http://facebook.com/" name="red_facebook" id="red_facebook">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="red_twitter">Twitter:</label>
                                                <div class="col-md-9">
                                                    <input class="form-control " type="tel" placeholder="http://twitter.com/" name="red_twitter" id="red_twitter">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="red_instagram">Instagram:</label>
                                                <div class="col-md-9">
                                                    <input class="form-control " type="tel" placeholder="http://instagram.com/" name="red_instagram" id="red_instagram">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="red_google">Google:</label>
                                                <div class="col-md-9">
                                                    <input class="form-control " type="tel" placeholder="http://google.com/" name="red_google" id="red_google">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

