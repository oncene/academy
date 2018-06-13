<button type="button" class="btn btn-info btn-min-width btn-round btn-glow mr-1 mt-1 float-right" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="ft-plus icon-left"></i>Adicionar</button>
<h5>Gestion de datos de cursos</h5>
<table class="table table-striped table-bordered table-hover dt-responsive nowrap" id="show_datatable_curso" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
    </tr>
    </tfoot>
    <tbody>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
    </tr>
    </tbody>
</table>

@section('script')
    <script>
        /*********************** datatables ********************/
        var listarExample = function () {
            $('#show_datatable_curso').DataTable({
                destroy: true,
                responsive: true,
                processing: true,
                // deferRender: true,
                select: true,
                fixedColumns:   true,
                pagingType: "full_numbers",
                iDisplayLength: 5,
                aLengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todo"]],
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

    </script>
    @parent
@endsection