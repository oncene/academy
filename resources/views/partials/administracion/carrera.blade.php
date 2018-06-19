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
                            <li><a href="#step-2"><i class="ft-unlock step-icons"></i> <br>Creacion de Niveles academicos<br /></a></li>
                            <li><a href="#step-3"><i class="ft-user-check step-icons"></i> <br>Creacion de carreras<br /></a></li>
                        </ul>

                        <div class="mt-1">
                            <div id="step-1" class="">
                                <div class="col-md-12">
                                    <form id="mension_form">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-slack"></i> Creacion de mensiones de carreras</h4>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right">Ingresar Nombre:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombre del mension" name="nombre" data-validation="required, length, custom" data-validation-length="min4">
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
                                                <label class=" label-control float-right">Ingresar Nombre:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Nombre del nivel" name="nombre" data-validation="required, length, custom" data-validation-length="min4">
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
                                    <form id="carrera_form">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-user-check"></i> Creacion de carreras</h4>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right" for="projectinput1">Ingresar el Nombre:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="nombre" id="carrera_form_nombre" placeholder="Ingrese el nombre de la carrera">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right" for="projectinput1">Ingresar la Resolucion:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="resolucion" id="carrera_form_resolucion" placeholder="Ingrese la resolucion">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right" for="projectinput1">Seleccione la mension:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="select2 form-control" id="carrera_form_mension_select2" >

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right" for="projectinput1">Seleccione el nivel:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="select2 form-control" id="carrera_form_nivel_select2">

                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info mt-1 mb-1 mr-0 ml-0 btn-xs btn-round btn-glow float-right" ><i class="ft-plus"></i> Adicionar </button>
                                    </form>
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

            $('#carrera_form_mension_select2').select2({
                dropdownParent: $('#carreraModal'),
                phaceholder:'Seleccione la mension de la carrera',
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
                    {data: 'nivel'},
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



        $("#mension_form").submit(function(e) {
            e.preventDefault();
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
                        messageSuccess('Correcto','Registro adicionado correctamente');
                        listar_table_mension();
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

        $("#nivel_form").submit(function(e) {
            e.preventDefault();
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
                        messageSuccess('Correcto','Registro adicionado correctamente');
                        listar_table_nivel();
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

        $("#carrera_form").submit(function(e) {
            e.preventDefault();
            var nombre = $('#carrera_form_nombre').val();
            var resolucion = $('#carrera_form_resolucion').val();
            var mension_id = $('#carrera_form_mension_select2').val();
            var nivel_id = $('#carrera_form_nivel_select2').val();
            // alert(nombre+' '+resolucion+' '+mension_id+' '+nivel_id);
            var route = "{{ route('carrera.store') }}";
            var token = $('input[name=_token]').val();
            // var $form = $('#carrera_form');
            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: "POST",
                dataType: 'json',
                data:{
                    nombre:nombre,resolucion:resolucion,mension_id:mension_id,nivel_id:nivel_id,
                },
                success: function (data) {
                    if (data.success) {
                        messageSuccess('Correcto','Registro adicionado correctamente');
                        listar_table_carreras();
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