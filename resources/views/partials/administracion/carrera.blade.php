<button type="button" class="btn btn-info btn-min-width btn-round btn-glow mr-1 mt-1 float-right" data-toggle="modal" data-target="#carreraModal" onclick="initCarrera();"><i class="ft-plus icon-left"></i>Adicionar</button>
{{--data-toggle="tooltip" data-placement="bottom" title="Eliminar"--}}
<h5>Gestion de datos de carreras</h5>
<table class="table table-striped table-bordered table-hover dt-responsive nowrap" id="show_datatable_carrera" style="width:100%">
    <thead>
    <tr>
        <th>Carrera</th>
        <th>Resolucion</th>
        <th>Mension</th>
        <th>Nivel</th>
        <th>Accion</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Carrera</th>
        <th>Resolucion</th>
        <th>Mension</th>
        <th>Nivel</th>
        <th>Accion</th>
    </tr>
    </tfoot>
    <tbody>
    </tbody>
</table>



<!-- Modal privilegios -->
<div class="modal fade text-left" id="carreraModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Form wizard with icon tabs section start -->
                <div class="card-body">
                    <div id="smartwizard">
                        <ul>
                            <li><a href="#step-1"><i class="ft-slack step-icons"></i> <br>Creacion de mension<br /></a></li>
                            <li><a href="#step-2"><i class="ft-unlock step-icons"></i> <br>Creacion de Niveles<br /></a></li>
                            <li><a href="#step-3"><i class="ft-user-check step-icons"></i> <br>Creacion de Semestres<br /></a></li>
                            <li><a href="#step-4"><i class="ft-user-check step-icons"></i> <br>Creacion de Carreras<br /></a></li>
                            <li><a href="#step-5"><i class="ft-user-check step-icons"></i> <br>Asignacion de Carreras<br /></a></li>
                        </ul>

                        <div class="mt-1">
                            <div id="step-1" class="">
                                <div class="col-md-12">
                                    <form id="mension_form">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-slack"></i> Creacion de mensiones de carreras</h4>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right">Ingresar Nombre (*):</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombre del mension" name="nombre" data-validation="required, length, custom" data-sanitize="trim upper" data-validation-length="min4" data-validation-regexp="^([A-Z ]+)$">
                                            </div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-info btn-round btn-glow"><i class="ft-plus"></i> Adicionar </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <table id="table_mension" class="table table-striped table-bordered table-hover dt-responsive nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha de creacion</th>
                                            <th>Accion</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha de creacion</th>
                                            <th>Accion</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div id="step-2" class="">
                                <div class="col-md-12">
                                    <form id="nivel_form">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-slack"></i> Creacion de Niveles academicos</h4>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right">Ingresar Nombre (*):</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombre del nivel" name="nombre" data-validation="required, length, custom" data-sanitize="trim upper" data-validation-length="min4" data-validation-regexp="^([A-Z 0-9]+)$">
                                            </div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-info btn-round btn-glow"><i class="ft-plus"></i> Adicionar </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <table id="table_nivel" class="table table-striped table-bordered table-hover dt-responsive nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha de creacion</th>
                                            <th>Accion</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha de creacion</th>
                                            <th>Accion</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="step-3" class="">
                                <div class="col-md-12">
                                    <form id="semestre_form">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-slack"></i> Creacion de Semestres</h4>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right">Ingresar Nombre (*):</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombre del semestre" name="nombre" data-validation="required, length, custom" data-sanitize="trim upper" data-validation-length="min4" data-validation-regexp="^([A-Z 0-9]+)$">
                                            </div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-info btn-round btn-glow"><i class="ft-plus"></i> Adicionar </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <table id="table_semestres" class="table table-striped table-bordered table-hover dt-responsive nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha de creacion</th>
                                            <th>Accion</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha de creacion</th>
                                            <th>Accion</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="step-4" class="">
                                <div class="col-md-12">
                                    <form id="carrera_form">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-slack"></i> Creacion de Carreras</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Ingresar Nombre (*)</label>
                                                    <input type="text" class="form-control" placeholder="Nombre de la carrera" name="nombre" data-validation="required, length, custom" data-sanitize="trim upper" data-validation-length="min4" data-validation-regexp="^([A-Z ]+)$">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Ingresar Resolucion (*)</label>
                                                    <input type="text" class="form-control" placeholder="Resolucion ministerial de la carrera" name="resolucion" data-validation="required, length, custom" data-validation-length="min4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Seleccione la Mension</label>
                                                    <select class="select2 form-control" id="carrera_form_mension_select2" name="mension_id" data-validation="required" >

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info btn-round btn-glow float-right mt-2"><i class="ft-plus"></i> Adicionar </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <table id="table_carrera_modal" class="table table-striped table-bordered table-hover dt-responsive nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Resolucion miniterial</th>
                                            <th>Fecha de creacion</th>
                                            <th>Mension</th>
                                            <th>Accion</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Resolucion miniterial</th>
                                            <th>Fecha de creacion</th>
                                            <th>Mension</th>
                                            <th>Accion</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="step-5" class="">
                                <div class="col-md-12">
                                    <form id="asignacion_carrera_form">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-user-check"></i> Asignacion de carreras</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Seleccione la Carrera (*)</label>
                                                    <select class="select2 form-control" id="carrera_form_carrera_select2" name="carrera_id" data-validation="required">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Seleccione el nivel (*)</label>
                                                    <select class="select2 form-control" id="carrera_form_nivel_select2" name="nivel_id" data-validation="required">

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label >Seleccione los semestres (*)</label>
                                                    <select class="select2 form-control" id="carrera_form_semestre_select2" name="semestre_id" multiple data-validation="required">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info mt-2 mb-1 mr-0 ml-0 btn-xs btn-round btn-glow float-right" ><i class="ft-plus"></i> Adicionar </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    <table id="table_selestre_carrera_asignacion" class="table table-striped table-bordered table-hover dt-responsive nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Carrera</th>
                                            <th>Mension</th>
                                            <th>Nivel</th>
                                            <th>Semestre</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Carrera</th>
                                            <th>Mension</th>
                                            <th>Nivel</th>
                                            <th>Semestre</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>




                    <!-- Form wizard with icon tabs section end -->
                </div>
            </div>
        </div>
    </div>
</div>


@section('script')
    <script>
        $(document).ready(function() {

        });
        var initCarrera = function () {
            listar_table_mension();
            listar_table_nivel();
            listar_table_semestres();
            listar_table_carrera_modal();
            listar_table_semestre_carrera_asignacion();

            $('#carrera_form_mension_select2').select2({
                dropdownParent: $('#carreraModal'),
                placeholder: "Seleccione la mension de la carrera",
                language: "es",
                ajax:{
                    url: '{{route('mension.index')}}',
                    dataType: 'json',
                    delay: 200,
                    data: function (params) {
                        return {
                            search: params.term ? params.term : '',
                            page: params.page,
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;
                        return {
                            results: data.data,
                            pagination: {
                                more: (params.page * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength: 1,
                templateResult: function (repo) {
                    if(repo.loading) return repo.nombre;
                    var markup = repo.nombre;
                    return markup;
                },
                templateSelection: function (repo) {
                    return repo.nombre;
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });
            $('#carrera_form_nivel_select2').select2({
                dropdownParent: $('#carreraModal'),
                language: "es",
                ajax:{
                    url: '{{route('nivel.index')}}',
                    dataType: 'json',
                    delay: 200,
                    data: function (params) {
                        return {
                            search: params.term ? params.term : '',
                            page: params.page,
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;
                        return {
                            results: data.data,
                            pagination: {
                                more: (params.page * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength: 1,
                templateResult: function (repo) {
                    if(repo.loading) return repo.nombre;
                    var markup = repo.nombre;
                    return markup;
                },
                templateSelection: function (repo) {
                    return repo.nombre;
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });
            $('#carrera_form_carrera_select2').select2({
                dropdownParent: $('#carreraModal'),
                language: "es",
                ajax:{
                    url: '{{route('carrera.index')}}',
                    dataType: 'json',
                    delay: 200,
                    data: function (params) {
                        return {
                            search: params.term ? params.term : '',
                            page: params.page,
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;
                        return {
                            results: data.data,
                            pagination: {
                                more: (params.page * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength: 1,
                templateResult: function (repo) {
                    if(repo.loading) return repo.nombre;
                    var markup = repo.nombre;
                    return markup;
                },
                templateSelection: function (repo) {
                    return repo.nombre;
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });
            $('#carrera_form_semestre_select2').select2({
                dropdownParent: $('#carreraModal'),
                language: "es",
                ajax:{
                    url: '{{route('semestre.index')}}',
                    dataType: 'json',
                    delay: 200,
                    data: function (params) {
                        return {
                            search: params.term ? params.term : '',
                            page: params.page,
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;
                        return {
                            results: data.data,
                            pagination: {
                                more: (params.page * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength: 1,
                templateResult: function (repo) {
                    if(repo.loading) return repo.nombre;
                    var markup = repo.nombre;
                    return markup;
                },
                templateSelection: function (repo) {
                    return repo.nombre;
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });
        }
        /*********************** datatables ********************/
        var listar_table_carreras = function () {
            $('#show_datatable_carrera').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                deferRender: true,
                select: true,
                fixedColumns:   true,
                pagingType: "full_numbers",
                iDisplayLength: 5,
                aLengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todo"]],
                ajax: '{{route('carreraDatatablesAll.show')}}',
                columns: [
                    {data: 'carrera'},
                    {data: 'resolucion'},
                    {data: 'mension'},
                    {data: 'nivel',render:function (data, type, full, meta) {
                            if(full.nivel){
                                var dataArrayReturn = [];
                                var dataAll = full.nivel;
                                var separador = ",";
                                var dataArray = dataAll.split(separador);
                                if(dataArray.length > 1) {
                                    $.each(dataArray, function (index, value) {
                                        dataArrayReturn[index] = '<span class="badge badge-info">' + value + '</span>';
                                    });
                                    return dataArrayReturn.toString();
                                }else {
                                    return '<span class="badge badge-info">'+dataArray+'</span>';
                                }
                            }else{
                                return ' ';
                            }
                        }},
                    {orderable: false, "searchable":false,render:function (data, type, full, meta ) {
                            return '<button type="button" class="btn btn-info btn-glow btn-sm" data-toggle="modal" data-target="#actividad-modal" onclick="editarCarrera('+full.id+');" data-toggle="tooltip" data-original-title="Editar registro" title="Editar"><i class="ft-edit-2"></i></button> ' +
                                '<button type="button" class="btn btn-info btn-glow btn-sm" onclick="eliminarCarrera('+full.id+');" data-toggle="tooltip" data-original-title="Eliminar registro" title="Eliminar"><i class="ft-x"></i></button>';
                        }},
                    ],
                language: {
                    "url": "{{URL::asset('assets/plugins/datatables/Spanish.json')}}",
                },
                dom: "<'row'<'col-sm-6'l>>"+
                "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                columnDefs: [
                    {
                        targets: 0,
                        className: 'noVis'
                    },
                ],
                buttons: [

                    'copy',
                    'csv',
                    {
                        extend: 'excelHtml5',
                    },
                    {
                        extend: 'pdfHtml5',
                        pageSize: 'letter',
                        orientation: 'portrait',
                        title: 'Carreras',
                        messageTop: 'Listado de todas las carreras existentes en la institucion.',
                        exportOptions: {
                            columns: [0,1,2,3 ]
                        },
                    },
                ]
            });
        };

        var listar_table_mension = function () {
            $('#table_mension').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                deferRender: true,
                select: true,
                fixedColumns:   true,
                pagingType: "full_numbers",
                iDisplayLength: 3,
                aLengthMenu: [[3, 5, 10, 25, 50, 100, -1], [3, 5, 10, 25, 50, 100, "Todo"]],
                ajax: '{{route('mensionDatatablesAll.show')}}',
                columns: [
                    {data: 'nombre'},
                    {data: 'created_at'},
                    {orderable: false, "searchable":false,render:function (data, type, full, meta ) {
                            return '<button type="button" class="btn btn-info btn-glow btn-sm" onclick="eliminarMension('+full.id+');" data-toggle="tooltip" data-original-title="Eliminar registro" title="Eliminar"><i class="ft-x"></i></button>';
                        }},
                    ],
                language: {
                    "url": "{{URL::asset('assets/plugins/datatables/Spanish.json')}}",
                },
                dom: "<'row'<'col-sm-6'l>>"+
                "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                columnDefs: [
                    {
                        targets: 0,
                        className: 'noVis'
                    },
                ],
                buttons: [

                    'copy',
                    'csv',
                    {
                        extend: 'excelHtml5',
                    },
                    {
                        extend: 'pdfHtml5',
                        pageSize: 'letter',
                        orientation: 'portrait',
                        title: 'Mensiones de la carrera',
                        messageTop: 'Este es un listado de todos los mensiones de la carrera existentes.',
                        exportOptions: {
                            columns: [0,1,]
                        },
                    },
                ]
            });
        };

        var listar_table_nivel = function () {
            $('#table_nivel').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                deferRender: true,
                select: true,
                fixedColumns:   true,
                pagingType: "full_numbers",
                iDisplayLength: 3,
                aLengthMenu: [[3, 5, 10, 25, 50, 100, -1], [3, 5, 10, 25, 50, 100, "Todo"]],
                ajax: '{{route('nivelDatatablesAll.show')}}',
                columns: [
                    {data: 'nombre'},
                    {data: 'created_at'},
                    {orderable: false, "searchable":false,render:function (data, type, full, meta ) {
                            return '<button type="button" class="btn btn-info btn-glow btn-sm" onclick="eliminarNivel('+full.id+');" data-toggle="tooltip" data-original-title="Eliminar registro" title="Eliminar"><i class="ft-x"></i></button>';
                        }},
                    ],
                language: {
                    "url": "{{URL::asset('assets/plugins/datatables/Spanish.json')}}",
                },
                dom: "<'row'<'col-sm-6'l>>"+
                "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                columnDefs: [
                    {
                        targets: 0,
                        className: 'noVis'
                    },
                ],
                buttons: [

                    'copy',
                    'csv',
                    {
                        extend: 'excelHtml5',
                    },
                    {
                        extend: 'pdfHtml5',
                        pageSize: 'letter',
                        orientation: 'portrait',
                        title: 'Niveles de la carrera',
                        messageTop: 'Este es un listado de todos los niveles academicos de la carrera.',
                        exportOptions: {
                            columns: [0,1,]
                        },
                    },
                ]
            });
        };
        var listar_table_semestres = function () {
            $('#table_semestres').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                deferRender: true,
                select: true,
                fixedColumns:   true,
                pagingType: "full_numbers",
                iDisplayLength: 3,
                aLengthMenu: [[3, 5, 10, 25, 50, 100, -1], [3, 5, 10, 25, 50, 100, "Todo"]],
                ajax: '{{route('semestreDatatablesAll.show')}}',
                columns: [
                    {data: 'nombre'},
                    {data: 'created_at'},
                    {orderable: false, "searchable":false,render:function (data, type, full, meta ) {
                            return '<button type="button" class="btn btn-info btn-glow btn-sm" onclick="eliminarSemestre('+full.id+');" data-toggle="tooltip" data-original-title="Eliminar registro" title="Eliminar"><i class="ft-x"></i></button>';
                        }},
                    ],
                language: {
                    "url": "{{URL::asset('assets/plugins/datatables/Spanish.json')}}",
                },
                dom: "<'row'<'col-sm-6'l>>"+
                "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                columnDefs: [
                    {
                        targets: 0,
                        className: 'noVis'
                    },
                ],
                buttons: [

                    'copy',
                    'csv',
                    {
                        extend: 'excelHtml5',
                    },
                    {
                        extend: 'pdfHtml5',
                        pageSize: 'letter',
                        orientation: 'portrait',
                        title: 'Semestres de la carrera',
                        messageTop: 'Este es un listado de todos los Semestres disponibles para las carreras.',
                        exportOptions: {
                            columns: [0,1,]
                        },
                    },
                ]
            });
        };
        var listar_table_carrera_modal = function () {
            $('#table_carrera_modal').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                deferRender: true,
                select: true,
                fixedColumns:   true,
                pagingType: "full_numbers",
                iDisplayLength: 3,
                aLengthMenu: [[3, 5, 10, 25, 50, 100, -1], [3, 5, 10, 25, 50, 100, "Todo"]],
                ajax: '{{route('carreraModalDatatablesAll.show')}}',
                columns: [
                    {data: 'carrera'},
                    {data: 'resolucion'},
                    {data: 'created_at'},
                    {data: 'mension'},
                    {orderable: false, "searchable":false,render:function (data, type, full, meta ) {
                            return '<button type="button" class="btn btn-info btn-glow btn-sm" onclick="eliminarCarrera('+full.id+');" data-toggle="tooltip" data-original-title="Eliminar registro" title="Eliminar"><i class="ft-x"></i></button>';
                        }},
                    ],
                language: {
                    "url": "{{URL::asset('assets/plugins/datatables/Spanish.json')}}",
                },
                dom: "<'row'<'col-sm-6'l>>"+
                "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                columnDefs: [
                    {
                        targets: 0,
                        className: 'noVis'
                    },
                ],
                buttons: [

                    'copy',
                    'csv',
                    {
                        extend: 'excelHtml5',
                    },
                    {
                        extend: 'pdfHtml5',
                        pageSize: 'letter',
                        orientation: 'portrait',
                        title: 'Listado de carrera',
                        messageTop: 'Este es un listado de todas las carreras con los que cuenta la institucion.',
                        exportOptions: {
                            columns: [0,1,2,3]
                        },
                    },
                ]
            });
        };
        var listar_table_semestre_carrera_asignacion = function () {
            $('#table_selestre_carrera_asignacion').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                deferRender: true,
                select: true,
                fixedColumns:   true,
                pagingType: "full_numbers",
                iDisplayLength: 3,
                aLengthMenu: [[3, 5, 10, 25, 50, 100, -1], [3, 5, 10, 25, 50, 100, "Todo"]],
                ajax: '{{route('semestreCarreraAsignacionDatatablesAll.show')}}',
                columns: [
                    {data: 'carrera'},
                    {data: 'mension'},
                    {data: 'nivel'},
                    {data: 'semestre',render:function (data, type, full, meta) {
                            if(full.semestre){
                                var dataArrayReturn = [];
                                var dataAll = full.semestre;
                                var separador = ",";
                                var dataArray = dataAll.split(separador);
                                if(dataArray.length > 1) {
                                    $.each(dataArray, function (index, value) {
                                        dataArrayReturn[index] = '<span class="badge badge-info">' + value + '</span>';
                                    });
                                    return dataArrayReturn.toString();
                                }else {
                                    return '<span class="badge badge-info">'+dataArray+'</span>';
                                }
                            }else{
                                return ' ';
                            }
                        }},
                    ],
                language: {
                    "url": "{{URL::asset('assets/plugins/datatables/Spanish.json')}}",
                },
                dom: "<'row'<'col-sm-6'l>>"+
                "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                columnDefs: [
                    {
                        targets: 0,
                        className: 'noVis'
                    },
                ],
                buttons: [

                    'copy',
                    'csv',
                    {
                        extend: 'excelHtml5',
                    },
                    {
                        extend: 'pdfHtml5',
                        pageSize: 'letter',
                        orientation: 'portrait',
                        title: 'Listado de carrera',
                        messageTop: 'Este es un listado de todas las carreras con los que cuenta la institucion.',
                        exportOptions: {
                            columns: [0,1,2,3,]
                        },
                    },
                ]
            });
        };



        $("#mension_form").submit(function(e) {
            e.preventDefault();
            if ($(this).isValid()) {
                var route = "{{ route('mension.store') }}";
                var token = $('input[name=_token]').val();
                var $form = $('#mension_form');
                $.ajax({
                    url: route + '?' + $form.serialize(),
                    headers: {'X-CSRF-TOKEN': token},
                    type: "POST",
                    data: new FormData($form[0]),
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        if (data.success) {
                            messageSuccess('Correcto', 'Registro adicionado correctamente');
                            $('#mension_form').trigger("reset");
                            listar_table_mension();
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (index, error) {
                            messageError('Error al registrar', error);
                        });
                        if (data.status == 422) {
                            console.clear();
                        }
                    }
                });
            }
        });

        $("#nivel_form").submit(function(e) {
            e.preventDefault();
            if ($(this).isValid()) {
                var route = "{{ route('nivel.store') }}";
                var token = $('input[name=_token]').val();
                var $form = $('#nivel_form');
                $.ajax({
                    url: route + '?' + $form.serialize(),
                    headers: {'X-CSRF-TOKEN': token},
                    type: "POST",
                    data: new FormData($form[0]),
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        if (data.success) {
                            messageSuccess('Correcto', 'Registro adicionado correctamente');
                            $('#nivel_form').trigger("reset");
                            listar_table_nivel();
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (index, error) {
                            messageError('Error al registrar', error);
                        });
                        if (data.status == 422) {
                            console.clear();
                        }
                    }
                });
            };
        });

        $("#semestre_form").submit(function(e) {
            e.preventDefault();
            if ($(this).isValid()) {
                var route = "{{ route('semestre.store') }}";
                var token = $('input[name=_token]').val();
                var $form = $('#semestre_form');
                $.ajax({
                    url: route + '?' + $form.serialize(),
                    headers: {'X-CSRF-TOKEN': token},
                    type: "POST",
                    data: new FormData($form[0]),
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        if (data.success) {
                            messageSuccess('Correcto', 'Registro adicionado correctamente');
                            $('#semestre_form').trigger("reset");
                            listar_table_semestres();
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (index, error) {
                            messageError('Error al registrar', error);
                        });
                        if (data.status == 422) {
                            console.clear();
                        }
                    }
                });
            };
        });

        $("#carrera_form").submit(function(e) {
            e.preventDefault();
            if ($(this).isValid()) {
                var route = "{{ route('carrera.store') }}";
                var token = $('input[name=_token]').val();
                var $form = $('#carrera_form');
                $.ajax({
                    url: route + '?' + $form.serialize(),
                    headers: {'X-CSRF-TOKEN': token},
                    type: "POST",
                    data: new FormData($form[0]),
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        if (data.success) {
                            messageSuccess('Correcto', 'Registro adicionado correctamente');
                            $('#carrera_form').trigger("reset");
                            listar_table_carrera_modal();
                            listar_table_carreras();
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (index, error) {
                            messageError('Error al registrar', error);
                        });
                        if (data.status == 422) {
                            console.clear();
                        }
                    }
                });
            };
        });

        $("#asignacion_carrera_form").submit(function(e) {
            e.preventDefault();
            if ($(this).isValid()) {
                var carrera_id = $('#carrera_form_carrera_select2').val();
                var nivel_id = $('#carrera_form_nivel_select2').val();
                var semestre_id = JSON.stringify($('#carrera_form_semestre_select2').val());

                // alert(carrera_id+ ' | '+nivel_id+' | '+semestre_id);
                var route = "{{ route('carreraAsignacion.store') }}";
                var token = $('input[name=_token]').val();
                $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN': token},
                    type: "POST",
                    datatype: 'json',
                    data:{
                        carrera_id:carrera_id,nivel_id:nivel_id,semestre_id:semestre_id,
                    },
                    success: function (data) {
                        if (data.success) {
                            messageSuccess('Correcto', 'Registro adicionado correctamente');
                            $('#asignacion_carrera_form').trigger("reset");
                            listar_table_semestre_carrera_asignacion();
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (index, error) {
                            messageError('Error al registrar', error);
                        });
                        // if (data.status == 422) {
                        //     console.clear();
                        // }
                    }
                });
            };
        });

        var eliminarMension = function (id) {
            var route = "{{url('mension')}}/"+id;
            var token = $('input[name=_token]').val();
            $.confirm({
                title: 'Esta seguro de eliminar el registro?',
                content: 'Una vez eliminado del sistema los registros son inacesibles.',
                type: 'info',
                animation: 'scale',
                closeAnimation: 'scale',
                buttons: {
                    confirm: {
                        text: 'OK',
                        btnClass: 'btn btn-blue',
                        keys: [
                            'enter',
                        ],
                        action: function () {
                            $.ajax({
                                url:route,
                                headers: {'X-CSRF-TOKEN':token},
                                type: 'DELETE',
                                dataType : 'json',
                                success: function(data)
                                {
                                    if (data.success == 'true'){
                                        messageWarning('Correcto','Registro eliminado correctamente');
                                        listar_table_mension();
                                    }
                                    if (data.success == 'false'){
                                        messageWarning('Advertencia','El registro no puede eliminarse');
                                    }
                                },
                                error: function (data)
                                {
                                    if (data.error){
                                        messageError('Error','Error al eliminar el registro');
                                    }
                                }
                            });
                        }
                    },
                    cancel: {
                        keys: [
                            'esc',
                        ],
                    }
                }
            });
        };
        var eliminarNivel = function (id) {
            var route = "{{url('nivel')}}/"+id;
            var token = $('input[name=_token]').val();
            $.confirm({
                title: 'Esta seguro de eliminar el registro?',
                content: 'Una vez eliminado del sistema los registros son inacesibles.',
                type: 'info',
                animation: 'scale',
                closeAnimation: 'scale',
                buttons: {
                    confirm: {
                        text: 'OK',
                        btnClass: 'btn btn-blue',
                        keys: [
                            'enter',
                        ],
                        action: function () {
                            $.ajax({
                                url:route,
                                headers: {'X-CSRF-TOKEN':token},
                                type: 'DELETE',
                                dataType : 'json',
                                success: function(data)
                                {
                                    if (data.success == 'true'){
                                        messageWarning('Correcto','Registro eliminado correctamente');
                                        listar_table_nivel();
                                    }
                                    if (data.success == 'false'){
                                        messageWarning('Advertencia','El registro no puede eliminarse');
                                    }
                                },
                                error: function (data)
                                {
                                    if (data.error){
                                        messageError('Error','Error al eliminar el registro');
                                    }
                                }
                            });
                        }
                    },
                    cancel: {
                        keys: [
                            'esc',
                        ],
                    }
                }
            });
        };
        var eliminarCarrera = function (id) {
            var route = "{{url('carrera')}}/"+id;
            var token = $('input[name=_token]').val();
            $.confirm({
                title: 'Esta seguro de eliminar el registro?',
                content: 'Una vez eliminado del sistema los registros son inacesibles.',
                type: 'info',
                animation: 'scale',
                closeAnimation: 'scale',
                buttons: {
                    confirm: {
                        text: 'OK',
                        btnClass: 'btn btn-blue',
                        keys: [
                            'enter',
                        ],
                        action: function () {
                            $.ajax({
                                url:route,
                                headers: {'X-CSRF-TOKEN':token},
                                type: 'DELETE',
                                dataType : 'json',
                                success: function(data)
                                {
                                    if (data.success == 'true'){
                                        messageWarning('Correcto','Registro eliminado correctamente');
                                        listar_table_carreras();
                                        listar_table_carrera_modal();
                                    }
                                    if (data.success == 'false'){
                                        messageWarning('Advertencia','El registro no puede eliminarse');
                                    }
                                },
                                error: function (data)
                                {
                                    if (data.error){
                                        messageError('Error','Error al eliminar el registro');
                                    }
                                }
                            });
                        }
                    },
                    cancel: {
                        keys: [
                            'esc',
                        ],
                    }
                }
            });
        };
        var eliminarSemestre = function (id) {
            var route = "{{url('semestre')}}/"+id;
            var token = $('input[name=_token]').val();
            $.confirm({
                title: 'Esta seguro de eliminar el registro?',
                content: 'Una vez eliminado del sistema los registros son inacesibles.',
                type: 'info',
                animation: 'scale',
                closeAnimation: 'scale',
                buttons: {
                    confirm: {
                        text: 'OK',
                        btnClass: 'btn btn-blue',
                        keys: [
                            'enter',
                        ],
                        action: function () {
                            $.ajax({
                                url:route,
                                headers: {'X-CSRF-TOKEN':token},
                                type: 'DELETE',
                                dataType : 'json',
                                success: function(data)
                                {
                                    if (data.success == 'true'){
                                        messageWarning('Correcto','Registro eliminado correctamente');
                                        listar_table_semestres();
                                    }
                                    if (data.success == 'false'){
                                        messageWarning('Advertencia','El registro no puede eliminarse');
                                    }
                                },
                                error: function (data)
                                {
                                    if (data.error){
                                        messageError('Error','Error al eliminar el registro');
                                    }
                                }
                            });
                        }
                    },
                    cancel: {
                        keys: [
                            'esc',
                        ],
                    }
                }
            });
        };
    </script>
    @parent
@endsection