
    <button type="button" class="btn btn-info btn-min-width btn-round btn-glow mr-1 mt-1 float-right" data-toggle="modal" data-target="#privilegiosModal" onclick="privilegioInit();"><i class="ft-plus"></i>Adicionar</button>
    <p>Biscuit i</p>
    <table id="table_privilegios" class="table table-striped table-bordered table-hover dt-responsive nowrap" style="width:100%">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Roles</th>
            <th>Estado</th>
            <th>Acción</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Roles</th>
            <th>Estado</th>
            <th>Acción</th>
        </tr>
        </tfoot>
        <tbody>

        </tbody>
    </table>


    <!-- Modal privilegios -->
    <div class="modal fade text-left" id="privilegiosModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Form wizard with icon tabs section start -->
                    <div class="card-body">
                    <div id="smartwizard">
                        <ul>
                            <li><a href="#step-1"><i class="ft-slack step-icons"></i> <br>Creacion de roles<br /></a></li>
                            <li><a href="#step-2"><i class="ft-unlock step-icons"></i> <br>Asignar permisos a roles<br /></a></li>
                            <li><a href="#step-3"><i class="ft-user-check step-icons"></i> <br>Asignar roles a usuarios<br /></a></li>
                        </ul>

                        <div class="mt-1">
                            <div id="step-1" class="">
                                <div class="col-md-12">
                                    <form id="rol_form">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-slack"></i> Creacion de roles</h4>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right" for="rol_name">Ingresar Nombre:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" id="rol_name" class="form-control" placeholder="Nombre del rol" name="name" data-validation="required, length, custom" data-validation-length="min4">
                                            </div>
                                            <div class="col-md-3">
                                                <button type="submit" id="submit_rol_form" class="btn btn-info"><i class="ft-plus"></i> Crear </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <table id="table_rol" class="table table-striped table-bordered table-hover dt-responsive nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Nombre del guard</th>
                                            <th>Fecha de crecion</th>
                                            <th>Accion</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Nombre del guard</th>
                                            <th>Fecha de crecion</th>
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
                                    <form id="form_rol_permission">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-unlock"></i> Asignacion de permisos a roles</h4>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right" for="projectinput1">Seleccionar Rol:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="select2 form-control" id="rol_select2">

                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <select multiple="multiple" size="10" class="duallistbox" id="dualPermisos" name="permission_select">

                                            </select>
                                            <!-- Dual Listbox end -->
                                        </div>
                                        <button class="btn btn-outline-info mt-1 mb-1 mr-0 ml-0 btn-xs btn-round btn-glow btn-block" ><i class="ft-plus"></i> Actualizar datos </button>

                                    </form>
                                </div>
                            </div>
                            <div id="step-3" class="">
                                <div class="col-md-12">
                                    <form id="form_user_rol">
                                        {{ csrf_field() }}
                                        <h4 class="form-section"><i class="ft-user-check"></i> Asignacion de roles a usuarios</h4>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class=" label-control float-right" for="projectinput1">Ingresar Nombre:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="select2 form-control" id="users_select2">

                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <select multiple="multiple" size="10" id="select_dual_roles" class="duallistbox">

                                            </select>
                                            <!-- Dual Listbox end -->
                                        </div>
                                        <button class="btn btn-outline-info mt-1 mb-1 mr-0 ml-0 btn-xs btn-round btn-glow btn-block" ><i class="ft-plus"></i> Actualizar datos </button>
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
            $('.duallistbox').bootstrapDualListbox({
                preserveSelectionOnMove: 'Movido',
                nonSelectedListLabel: 'Listas disponibles',
                selectedListLabel: 'Listas seleccionados',
                filterPlaceHolder: 'Buscar...',
                filterTextClear: 'Ver todo'
            });

            $('#rol_select2').select2({
                dropdownParent: $('#privilegiosModal'),
                language: "es",
                ajax:{
                    url: '{{route('rolAll.show')}}',
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
                    if(repo.loading) return repo.name;
                    var markup = repo.name;
                    return markup;
                },
                templateSelection: function (repo) {
                    return repo.name;
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });

            $('#users_select2').select2({
                dropdownParent: $('#privilegiosModal'),
                language: "es",
                ajax:{
                    url: '{{route('usersAll.show')}}',
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
                    if(repo.loading) return repo.name;
                    var markup = repo.name;
                    return markup;
                },
                templateSelection: function (repo) {
                    return repo.name;
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });

        });

        var privilegioInit = function () {
            listar_table_rol();
        }

        $('#rol_select2').on('select2:select', function (e) {
            var data_id = e.params.data.id;
            $('#dualPermisos').empty();
            $.getJSON("{{route('permissionWhereRol.show')}}/"+data_id, function (data) {
                $.each(data, function (index,value) {
                    $('#dualPermisos').append('<option value="'+value.name+'" '+value.selected+'>'+value.name+'</option>');
                    $('#dualPermisos').bootstrapDualListbox('refresh', true);
                });
            });
        });

        $('#users_select2').on('select2:select', function (e) {
            var data_id = e.params.data.id;
            $('#select_dual_roles').empty();
            $.getJSON("{{route('roleWhereUser.show')}}/"+data_id, function (data) {
                $.each(data, function (index,value) {
                    $('#select_dual_roles').append('<option value="'+value.name+'" '+value.selected+'>'+value.name+'</option>');
                    $('#select_dual_roles').bootstrapDualListbox('refresh', true);
                });
            });
        });




        $('#smartwizard').smartWizard({
            selected: 0,
            autoAdjustHeight:true,
            theme: 'default',
            transitionEffect:'fade',
            showStepURLhash: false,
            lang: {  // Language variables
                next: 'Siguiente',
                previous: 'Anterior'
            },
            toolbarSettings: {
                toolbarPosition: 'bottom',
                toolbarButtonPosition: 'right',
                toolbarExtraButtons: [
                    $('<button></button>').text('Resetear')
                        .addClass('btn btn-warning')
                        .on('click', function(){ $('#smartwizard').smartWizard("reset"); }),
                    $('<button></button>').text('Cerrar')
                        .addClass('btn btn-danger')
                        .on('click', function(){ $('#privilegiosModal').modal("hide"); })
                ]
            }
        });


        $('#privilegiosModal').on('hidden.bs.modal', function () {
            $('#privilegiosModal #smartwizard #rol_form').find('form').trigger('reset');

        });

        /********************************************* SELECTTIVITY ***********************************************/
        {{--$('.selectivity').selectivity({--}}
            {{--allowClear: false,--}}
            {{--// rerenderSelection: true,--}}
            {{--triggerChange: true,--}}
            {{--placeholder: 'Seleccione un algo',--}}
            {{--searchInputPlaceholder: 'Escriba para buscar...'--}}
        {{--});--}}
        {{--$('#rol_select').selectivity().on('change',function (e) {--}}
            {{--$('#dualPermisos').empty();--}}
            {{--$('#dualPermisos').bootstrapDualListbox('refresh', true);--}}
            {{--$.getJSON("{{route('permissionWhereRol.show')}}/"+e.value, function (data) {--}}
                {{--$.each(data, function (index,value) {--}}
                    {{--$('#dualPermisos').append('<option value="'+value.name+'" '+value.selected+'>'+value.name+'</option>');--}}
                    {{--$('#dualPermisos').bootstrapDualListbox('refresh', true);--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
        {{--var list_data_roles_selectivity =  function () {--}}
            {{--// $('#rol_select').selectivity('clear');--}}
            {{--$.getJSON("{{route('rolAll.show')}}", function (data) {--}}
                {{--$.each(data, function (index,value) {--}}
                    {{--$('#rol_select').append('<option value="'+value.id+'">'+value.name+'</option>');--}}
                {{--});--}}
            {{--});--}}

        {{--};--}}



        var listar_table_privilegios = function () {
            $('#table_privilegios').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                deferRender: true,
                select: true,
                fixedColumns:   true,
                pagingType: "full_numbers",
                iDisplayLength: 5,
                aLengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todo"]],
                ajax: '{{route('userDatatablesPrivilegioAll.show')}}',
                columns: [
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'privilegio',render:function (data, type, full, meta) {
                            if(full.privilegio === 'Administrador'){
                                return '<span class="badge badge-danger">'+full.privilegio+'</span>';
                            }else if (full.privilegio === 'Secretariado'){
                                return '<span class="badge badge-warning">'+full.privilegio+'</span>';
                            }else if(full.privilegio === 'Docente'){
                                return '<span class="badge badge-info">'+full.privilegio+'</span>';
                            }else if(full.privilegio === null){
                                return '<span class="badge badge-default">'+full.privilegio ? full.privilegio : "" +'</span>';
                            }else{
                                return '<span class="badge badge-default">'+full.privilegio+'</span>';
                            }

                        }},
                    {data: 'deleted_at',render:function (data, type, full, meta) {
                            if(full.deleted_at === null){
                                return '<button class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="DESHABILITAR" title="DESHABILITAR" onclick="editarActividad('+full.id+');">HABILITADO</button>'
                            }else{
                                return '<button class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="HABILITAR" title="HABILITAR" onclick="editarActividad('+full.id+');">DESHABILITADO</button>'
                            }
                        }},
                    {orderable: false, "searchable":false,render:function (data, type, full, meta ) {
                            return '<button type="button" class="btn btn-info btn-glow btn-sm" data-toggle="modal" data-target="#actividad-modal" onclick="editarActividad('+full.id+');" data-toggle="tooltip" data-original-title="Editar registro" title="Editar"><i class="ft-edit-2"></i></button> ' +
                                '<button type="button" class="btn btn-info btn-glow btn-sm" onclick="eliminarActividad('+full.id+');" data-toggle="tooltip" data-original-title="Eliminar registro" title="Eliminar"><i class="ft-x"></i></button>';
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
                        title: 'Listado cursos',
                        messageTop: 'este es un listado de cursos imprimido.',
                    },
                    {
                        extend: 'pdfHtml5',
                        pageSize: 'legal',
                        orientation: 'landscape',
                        title: 'Listado cursos',
                        messageTop: 'este es un listado de cursos imprimido.',
                        exportOptions: {
                            columns: [0,1,2,3 ]
                        },
                    },
                ]
            });
        };

        var listar_table_rol = function () {
            $('#table_rol').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                serverSide: true,
                deferRender: true,
                select: true,
                fixedColumns:   true,
                pagingType: "full_numbers",
                iDisplayLength: 3,
                aLengthMenu: [[3, 5, 10, 25, 50, 100, -1], [3, 5, 10, 25, 50, 100, "Todo"]],
                ajax: '{{route('rolDatatablesAll.show')}}',
                columns: [
                    {data: 'name'},
                    {data: 'guard_name'},
                    {data: 'created_at',render:function (data, type, full, meta) {
                            return moment(full.created_at).format('DD MMM YYYY');
                        }},
                    {orderable: false, "searchable":false,render:function (data, type, full, meta ) {
                            return '<button type="button" class="btn btn-info btn-glow btn-sm" onclick="eliminarRol('+full.id+');" data-toggle="tooltip" data-original-title="Eliminar registro" title="Eliminar"><i class="ft-x"></i></button>';
                        }},
                ],
                language: {
                    "url": "{{URL::asset('assets/plugins/datatables/Spanish.json')}}",
                },
                dom: "<'row'<'col-sm-6'l>>"+
                "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                buttons: [
                    'copy',
                    'csv',
                    {
                        extend: 'excelHtml5',
                        title: 'Listado cursos',
                        messageTop: 'este es un listado de cursos imprimido.',
                    },
                    {
                        extend: 'pdfHtml5',
                        pageSize: 'legal',
                        orientation: 'landscape',
                        title: 'Listado cursos',
                        messageTop: 'este es un listado de cursos imprimido.',
                        exportOptions: {
                            columns: [0,1,2, ]
                        },
                    },
                ]
            });
        };


        $("#rol_form").submit(function(e) {
            e.preventDefault();
            var route = "{{ route('rol.store') }}";
            var token = $('input[name=_token]').val();
            var $form = $('#rol_form');
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
                        listar_table_rol();
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

        var eliminarRol = function (id) {
            var route = "{{route('rol.destroy',null)}}/"+id;
            var token = $('input[name=_token]').val();
            $.confirm({
                title: 'Esta seguro de eliminar!',
                content: 'Eliminar el registro seleccionado.',
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
                                    messageSuccess('Correcto','Registro eliminado correctamente');
                                    listar_table_rol();
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


        $("#form_rol_permission").submit(function(e) {
            e.preventDefault();
            var role = $('#rol_select2').val();
            permissions = JSON.stringify($('#dualPermisos').val());
            console.log(permissions);
            // console.log(JSON.stringify(data));
            // var permissions = $.map( data, function( value, key ) {
            //     return value;
            // });
            var route = "{{ route('permissionWhereRolCreate.store') }}";
            var token = $('input[name=_token]').val();
            var $form = $('#form_rol_permission');
            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: "POST",
                datatype: 'json',
                data:{
                    role:role,permissions:permissions,
                },
                success: function (data) {
                    if (data.success) {
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



    </script>
    @parent
@endsection