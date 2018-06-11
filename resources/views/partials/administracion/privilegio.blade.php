
    <button type="button" class="btn btn-info btn-min-width btn-round btn-glow mr-1 mt-1 float-right" data-toggle="modal" data-target="#privilegiosModal" onclick="privilegioInit();"><i class="ft-plus"></i>Adicionar</button>
    <div class="controls">
        <input type="button" name="email" class="form-control" onclick="pruebatod();">
    </div>
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
                    <section id="icon-tabs">
                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                    <div class="card-header">
                                        <h4 class="card-title">Form wizard with icon tabs</h4>
                                        {{--<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>--}}
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li data-dismiss="modal"><a data-action="close" class="modal-close"><i class="ft-x"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body modal-step-top">
                                            <div class="icons-tab-steps wizard-circle">
                                                <!-- Step 1 -->
                                                <h6><i class="step-icon ft-slack"></i> Roles</h6>
                                                <fieldset>
                                                    <div class="row ">
                                                        <div class="col-md-12">
                                                            <h4 class="form-section"><i class="ft-slack"></i> Creacion de roles</h4>
                                                            <form method="post" id="rol_form" enctype="multipart/form-data">
                                                                <div class="form-group row">
                                                                    <div class="col-md-3">
                                                                        <label class=" label-control float-right" for="projectinput1">Ingresar Nombre:</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" id="projectinput1" class="form-control" placeholder="Nombre del rol" name="name" data-validation="required, length, custom" data-validation-length="min4">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <button type="submit" class="btn btn-info"><i class="ft-plus"></i> Crear </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <br>
                                                        <div class="col-md-12">
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

                                                </fieldset>
                                                <!-- Step 2 -->
                                                <h6><i class="step-icon ft-unlock"></i>Asignar permisos</h6>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <form id="form_rol_permission" method="post">
                                                                <h4 class="form-section"><i class="ft-unlock"></i> Asignacion de permisos a roles</h4>
                                                                <div class="form-group row">
                                                                    <div class="col-md-3">
                                                                        <label class=" label-control float-right" for="projectinput1">Seleccionar Rol:</label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <select class="selectivity" id="rol_select" name="rol_select" data-placeholder="Seleccionar el rol">
                                                                            {{--<optgroup id="rol_select_content" label="Roles">--}}
                                                                            {{--</optgroup>--}}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <select multiple="multiple" size="10" class="duallistbox" id="dualPermisos" name="permission_select">

                                                                    </select>
                                                                    <!-- Dual Listbox end -->
                                                                </div>
                                                                <button type="submit" class="btn btn-outline-info mt-1 mb-1 mr-0 ml-0 btn-xs btn-round btn-glow btn-block" ><i class="ft-plus"></i> Actualizar datos </button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <!-- Step 3-->
                                                <h6><i class="step-icon ft-user-check"></i>Asignar Roles</h6>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <form id="form_user_rol">
                                                                <h4 class="form-section"><i class="ft-user-check"></i> Asignacion de roles a usuarios</h4>
                                                                <div class="form-group row">
                                                                    <div class="col-md-3">
                                                                        <label class=" label-control float-right" for="projectinput1">Ingresar Nombre:</label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <select class="selectivity" id="select_user" data-placeholder="Seleccione un usuario">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <select multiple="multiple" size="10" id="select_dual_roles" class="duallistbox">

                                                                    </select>
                                                                    <!-- Dual Listbox end -->
                                                                </div>
                                                                <button type="submit" class="btn btn-outline-info mt-1 mb-1 mr-0 ml-0 btn-xs btn-round btn-glow btn-block" ><i class="ft-plus"></i> Actualizar datos </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                {{--</form>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Form wizard with icon tabs section end -->
                </div>
            </div>
        </div>
    </div>
    @section('script')
    <script>
        $(document).ready(function() {
            llenardatos();
            // list_data_users_selectivity();

        });

        /********************************************* PRIVILEGIOS ***********************************************/
        var privilegioInit = function () {
            $(".icons-tab-steps").steps({
                headerTag: "h6",
                bodyTag: "fieldset",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    finish: 'Close'
                },
                onFinished: function (event, currentIndex) {
                    $('#privilegiosModal').modal('hide');
                    $('#privilegiosModal').find('form').trigger('reset');
                }
            });

            $('.duallistbox').bootstrapDualListbox({
                preserveSelectionOnMove: 'Movido',
                nonSelectedListLabel: 'Listas disponibles',
                selectedListLabel: 'Listas seleccionados',
                filterPlaceHolder: 'Buscar...',
                filterTextClear: 'Ver todo'
            });

            $('.selectivity').selectivity({
                allowClear: true,
                triggerChange: true,
                placeholder: 'Seleccione un algo',
                searchInputPlaceholder: 'Escriba para buscar...'
            });

            $('#rol_select').selectivity().on('change',function (e) {
                $('#dualPermisos').empty();
                $.getJSON("/getPermissionWhereRol/"+e.value, function (data) {
                    $.each(data, function (index,value) {
                        $('#dualPermisos').append('<option value="'+value.name+'" '+value.selected+'>'+value.name+'</option>');
                        $('#dualPermisos').bootstrapDualListbox('refresh', true);
                    });
                });
            });

            // $('#select_dual_roles').selectivity().on('change',function (e) {
            //     $('#dualPermisos').empty();
            //     $.getJSON("/getRolAll", function (data) {
            //         $.each(data, function (index,value) {
            //             $('#dualPermisos').append('<option value="'+value.name+'" '+value.selected+'>'+value.name+'</option>');
            //             dualListboxPermissions.bootstrapDualListbox('refresh', true);
            //         });
            //     });
            // });
            //

            $('#select_user').selectivity().on('change',function (e) {
                $('#select_dual_roles').empty();
                $.getJSON("/getRoleWhereUser/"+e.value, function (data) {
                    $.each(data, function (index,value) {
                        $('#select_dual_roles').append('<option value="'+value.name+'" '+value.selected+'>'+value.name+'</option>');
                        $('#select_dual_roles').bootstrapDualListbox('refresh', true);
                    });
                });
            });

            listar_table_rol();
        };

        var llenardatos =  function () {
            $.getJSON("/getRolAll", function (data) {
                $.each(data, function (index,value) {
                    $('#rol_select').append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            });
        }

        // var list_data_users_selectivity =  function () {
        //     $.getJSON("/getUserAll", function (data) {
        //         $.each(data, function (index,value) {
        //             $('#select_user').append('<option value="'+value.id+'">'+value.name+'</option>');
        //         });
        //     });
        // }

        // var rolPermissionSubmit = function () {
        //     var roles = $('#rol_select').selectivity('val');
        //     data = $('#dualPermisos').val();
        //     var permissions = $.map( data, function( value, key ) {
        //         return value;
        //     });
        //
        //     console.log(keys);
        // }


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
                ajax: '{{route('getPrivilegio')}}',
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
                iDisplayLength: 5,
                aLengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todo"]],
                ajax: '{{route('getRol')}}',
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
            var route = "{{ url('/rolCreate') }}";
            var token = $('input[name=_token]').val();
            var name = 'Admin';
            // var $form = $('#rol_form');
            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: "POST",
                datatype: 'json',
                // data: new FormData($form[0]),
                data:{name:name},
                success: function (data) {
                    if (data.success) {
                        $('#rol_form').trigger('reset');
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
            var route = "{{route('deleteRol')}}/"+id;
            var token = $('input[name=_token]').val();
            $.confirm({
                title: 'Esta seguro de eliminar!',
                content: 'Eliminar el registro seleccionado.',
                type: 'info',
                // draggable: true,
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
            var role = $('#rol_select').selectivity('val');
            permissions = JSON.stringify($('#dualPermisos').val());
            console.log(permissions);
            // console.log(JSON.stringify(data));
            // var permissions = $.map( data, function( value, key ) {
            //     return value;
            // });
            var route = "{{ route('permissionRolCreate') }}";
            var token = $('input[name=_token]').val();
            // var $form = $('#form_rol_permission');
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
                        $('#form_rol_permission').trigger('reset');
                        messageSuccess('Correcto','Registro adicionado correctamente');
                        // listar_table_rol();
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