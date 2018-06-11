
@extends('layouts.master')
@section('title','Calendario SOA')
@push('styles')
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/calendars/fullcalendar.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jquery-confirm/jquery-confirm.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jquery-confirm/jquery-confirm-theme.min.css')}}" type="text/css"/>
@endpush
@section('content')

    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Full Calendar Advance</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Full Calendar
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                    <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2"
                            id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item"
                                                                                                                                               href="component-buttons-extended.html">Buttons</a></div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Full calendar advance example section start -->
            <section id="advance-examples">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">External Dragging</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    {{--<p class="card-text">Add </p>--}}
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div id='open-events'>
                                                <hr>
                                                <h4>Eventos</h4>
                                                <div class="calendar-event-button" id="calendar-events">
                                                    <div class="calendar-events"  style="background-color:#03a9f3;">Primer parcial</div>
                                                    <div class="calendar-events"  style="background-color:#00c292;">Segundo parcial</div>
                                                    <div class="calendar-events"  style="background-color:#fb9678;">Tercer parcial</div>
                                                    <div class="calendar-events"  style="background-color:#fec107;">Final</div>
                                                    <div class="checkbox">
                                                        <input type='checkbox' id='drop-remove' checked/>
                                                        <label for='drop-remove'>Remover eventos al soltar</label>
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="box box-solid">
                                                    <h3 class="box-title">Crear evento</h3>
                                                    <div class="box-body">
                                                        <div class="btn-group " id="fc-color-group" style="width: 100%; margin-bottom: 10px;">
                                                            <ul class="fc-color-picker" id="color-chooser">
                                                                <li><a href="#" style="background-color:#03a9f3;"></a></li>
                                                                <li><a href="#" style="background-color:#00c292;"></a></li>
                                                                <li><a href="#" style="background-color:#fb9678;"></a></li>
                                                                <li><a href="#" style="background-color:#fec107;"></a></li>
                                                                <li><a href="#" style="background-color:rgb(83, 217, 199);"></a></li>
                                                                <li><a href="#" style="background-color:rgb(126, 159, 206);"></a></li>
                                                                <li><a href="#" style="background-color:#81C784;"></a></li>
                                                                <li><a href="#" style="background-color:rgb(229, 144, 139);"></a></li>
                                                                <li><a href="#" style="background-color:rgb(246, 56, 100);"></a></li>
                                                                <li><a href="#" style="background-color:rgb(252, 3, 184);"></a></li>
                                                                <li><a href="#" style="background-color:rgb(174, 110, 126);"></a></li>
                                                                <li><a href="#" style="background-color:#906878"></a></li>
                                                                <li><a href="#" style="background-color:#6C757D"></a></li>
                                                                <li><a href="#" style="background-color:#6F4EB3"></a></li>
                                                                <li><a href="#" style="background-color:#537F95"></a></li>
                                                                <li><a href="#" style="background-color:#076B86"></a></li>
                                                                <li><a href="#" style="background-color:#DD7F2D"></a></li>
                                                                <li><a href="#" style="background-color:#FF643A"></a></li>
                                                                <li><a href="#" style="background-color:#DE4B28"></a></li>
                                                                <li><a href="#" style="background-color:#F15769"></a></li>
                                                                <li><a href="#" style="background-color:#454D58"></a></li>
                                                                <li><a href="#" style="background-color:#333333"></a></li>
                                                            </ul>
                                                        </div>

                                                        <!-- /btn-group -->
                                                        <div class="fc-button-padding">
                                                            <div class="form-group">
                                                                <input id="new-event" type="text" class="form-control full-width" placeholder="Titulo de evento">
                                                            </div>
                                                            <div class="form-group">
                                                                <button id="add-new-event" type="button" class="btn btn-primary full-width btn-round btn-xs">Agregar</button>
                                                            </div>
                                                            <br/><br/>
                                                        </div>
                                                        {{--<form  id="form-calendario"> action="{{route('examen.store')}}" method="post"--}}
                                                            {{--{{csrf_field()}}--}}
                                                        {{--</form>--}}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div id='calendar'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- // Full calendar advance example section end -->
        </div>
    </div>

    <!-- Default Size -->
    <div class="modal fade" id="my-event-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <div class="demo-google-material-icon"> <i class="material-icons">clear</i></div>
            </a>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="largeModalLabel">Crear evento</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group label-floating">
                        <label class="control-label">Título del evento</label>
                        <textarea class="form-control" placeholder="Ingrese un titulo al evento" type="text" id="new-event-modal"></textarea>
                    </div>
                    <div  class="btn-group " id="fc-color-group">
                        <ul class="fc-color-picker" id="color-chooser-modal">
                            <li><a href="#" style="background-color:#03a9f3;"></a></li>
                            <li><a href="#" style="background-color:#00c292;"></a></li>
                            <li><a href="#" style="background-color:#fb9678;"></a></li>
                            <li><a href="#" style="background-color:#fec107;"></a></li>
                            <li><a href="#" style="background-color:rgb(83, 217, 199);"></a></li>
                            <li><a href="#" style="background-color:rgb(126, 159, 206);"></a></li>
                            <li><a href="#" style="background-color:#81C784;"></a></li>
                            <li><a href="#" style="background-color:rgb(229, 144, 139);"></a></li>
                            <li><a href="#" style="background-color:rgb(246, 56, 100);"></a></li>
                            <li><a href="#" style="background-color:rgb(252, 3, 184);"></a></li>
                            <li><a href="#" style="background-color:rgb(174, 110, 126);"></a></li>
                            <li><a href="#" style="background-color:#906878"></a></li>
                            <li><a href="#" style="background-color:#6C757D"></a></li>
                            <li><a href="#" style="background-color:#6F4EB3"></a></li>
                            <li><a href="#" style="background-color:#537F95"></a></li>
                            <li><a href="#" style="background-color:#076B86"></a></li>
                            <li><a href="#" style="background-color:#DD7F2D"></a></li>
                            <li><a href="#" style="background-color:#FF643A"></a></li>
                            <li><a href="#" style="background-color:#DE4B28"></a></li>
                            <li><a href="#" style="background-color:#F15769"></a></li>
                            <li><a href="#" style="background-color:#454D58"></a></li>
                            <li><a href="#" style="background-color:#333333"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                    <button type="button" class="btn btn-primary btn-md btn-round waves-effect" id="add-new-event-modal" style="width: 250px">Crear evento</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="{{URL::asset('assets/plugins/fullcalendar/lib/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fullcalendar/lib/moment.min.js')}}"></script>
    <script src='{{URL::asset('assets/plugins/fullcalendar/fullcalendar.js')}}'></script>
    <script src="{{URL::asset('assets/plugins/fullcalendar/locale-all.js')}}"></script>
{{--    <script src="{{URL::asset('assets/js/scripts/extensions/fullcalendar.js')}}"></script>--}}
{{----}}
    {{--<script src="{{URL::asset('bundles/fullcalendarscripts.bundle.js')}}"></script>--}}
    {{--<script src="{{URL::asset('js/pages/calendar/calendar.js')}}"></script>--}}

    <script src="{{URL::asset('assets/plugins/jquery-confirm/jquery-confirm.min.js')}}"></script>

@endpush

@section('scripts')
    <script>
        $(document).ready(function() {
            function ini_events(ele) {
                ele.each(function () {
                    var eventObject = {
                        title: $.trim($(this).text())
                    };
                    $(this).data('eventObject', eventObject);
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true,
                        revertDuration: 0
                    });
                });
            }

            $('#calendar-events div.calendar-events').each(function() {
                    var eventObject = {
                        title: $.trim($(this).text())
                    };
                    $(this).data('eventObject', eventObject);
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true,
                        revertDuration: 0
                    });
                });


            ini_events($('#calendar-events div.calendar-events'));
            var date = new Date();
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
            var startm;
            var endm;
            var allDaym;

            $('#calendar').fullCalendar({
                defaultView: 'month',
                locale: 'es',
                // minTime: '08:00:00',
                // maxTime: '18:00:00',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'listYear,month,agendaWeek,agendaDay'
                },
                buttonText: {
                    year: 'Agenda anual',
                    today: 'hoy',
                    month: 'mes',
                    week: 'semana',
                    day: 'dia'
                },

                events: {url: "/calendario/calendar"},

                editable: true,
                droppable: true,
                selectable: true,
                // eventLimit: true,
                drop: function (date, allDay) {
                    var originalEventObject = $(this).data('eventObject');
                    var copiedEventObject = $.extend({}, originalEventObject);
                    allDay = true;
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;
                    copiedEventObject.backgroundColor = $(this).css("background-color");
                    if ($('#drop-remove').is(':checked')) {
                        $(this).remove();
                    }
                    //Guardamos el evento creado en base de datos
                    var title = copiedEventObject.title;
                    var start = copiedEventObject.start.format("YYYY-MM-DD HH:mm");
                    var back = copiedEventObject.backgroundColor;
                    var allDay = copiedEventObject.allDay;

                    crsfToken = document.getElementsByName("_token")[0].value;
                    $.ajax({
                        url: "{{route('calendario.store')}}",
                        data: 'title=' + title + '&start=' + start + '&allDay=' + allDay + '&color=' + back,
                        type: "POST",
                        headers: {
                            "X-CSRF-TOKEN": crsfToken
                        },
                        success: function (events) {
                            // console.log('Evento creado');
                            $('#calendar').fullCalendar('refetchEvents');
                        },
                        error: function (json) {
                            console.log("Error al crear evento");
                        }
                    });
                },

                eventResize: function (event) {
                    var start = event.start.format("YYYY-MM-DD HH:mm");
                    var back = event.color;
                    if (event.end) {
                        var end = event.end.format("YYYY-MM-DD HH:mm");
                    } else {
                        var end = "";
                    }
                    if (event.allDay) {
                        var allDay = event.allDay;
                    } else {
                        var allDay = "";
                    }
                    crsfToken = document.getElementsByName("_token")[0].value;
                    $.ajax({
                        url: "{{url('/calendario')}}/" + event.id,
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&color=' + back + '&allDay=' + allDay,
                        type: "PATCH",
                        headers: {
                            "X-CSRF-TOKEN": crsfToken
                        },
                        success: function (json) {
                            console.log("Updated Successfully");
                        },
                        error: function (json) {
                            console.log("Error al actualizar evento");
                        }
                    });
                },
                eventDrop: function (event, delta) {
                    var start = event.start.format("YYYY-MM-DD HH:mm");
                    if (event.end) {
                        var end = event.end.format("YYYY-MM-DD HH:mm");
                    } else {
                        var end = "";
                    }
                    var back = event.color;

                    if (event.allDay) {
                        var allDay = event.allDay;
                    } else {
                        var allDay = "";
                    }
                    crsfToken = document.getElementsByName("_token")[0].value;

                    $.ajax({
                        url: "{{url('/calendario')}}/" + event.id,
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&color=' + back + '&allDay=' + allDay,
                        type: "PUT",
                        headers: {
                            "X-CSRF-TOKEN": crsfToken
                        },
                        success: function (json) {
                            console.log("Updated Successfully eventdrop");
                        },
                        error: function (json) {
                            console.log("Error al actualizar eventdrop");
                        }
                    });
                },
                eventClick: function (event, jsEvent, view) {
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
                                        url: "{{url('/calendario')}}/" + event.id,
                                        headers: {'X-CSRF-TOKEN': token},
                                        type: 'DELETE',
                                        dataType: 'json',
                                        success: function (data) {
                                            if (data.success == 'true') {
                                                $('#calendar').fullCalendar('removeEvents', event._id);
                                                // registro_eliminado();
                                            }
                                            if (data.success == 'false') {
                                                // registro_fallido();
                                            }
                                        },
                                        error: function (data) {
                                            if (data.error) {
                                                // registro_fallido();
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
                },

                eventMouseover: function (event, jsEvent, view) {
                    var start = (event.start.format("HH:mm"));
                    var back = event.color;
                    if (event.end) {
                        var end = event.end.format("HH:mm");
                    } else {
                        var end = "No definido";
                    }
                    if (event.allDay) {
                        var allDay = "Si";
                    } else {
                        var allDay = "No";
                    }
                    var tooltip = '<div class="tooltipevent" style="width:150px;height:auto;color:white;background:' + back + ';position:absolute;z-index:10001; border-radius:3px;padding-left:10px;padding-right:10px;padding-bottom:10px;padding-top:10px;">' + '<center><img src="{{URL::asset('assets/css/icons/alarm-clock.png')}}" style="width: 60px"></center>' + '<center><b>' + event.title + '</b></center>' + 'Todo el día: ' + allDay + '<br>' + 'Inicio: ' + start + '<br>' + 'Fin: ' + end + '</div>';

                    $("body").append(tooltip);
                    $(this).mouseover(function (e) {
                        $(this).css('z-index', 10000);
                        $('.tooltipevent').fadeIn('500');
                        $('.tooltipevent').fadeTo('10', 1.9);
                    }).mousemove(function (e) {
                        $('.tooltipevent').css('top', e.pageY + 10);
                        $('.tooltipevent').css('left', e.pageX + 20);
                    });
                },

                eventMouseout: function (calEvent, jsEvent) {
                    $(this).css('z-index', 8);
                    $('.tooltipevent').remove();
                },

                dayClick: function (date, jsEvent, view) {
                    if (view.name === "month") {
                        $('#calendar').fullCalendar('gotoDate', date);
                        $('#calendar').fullCalendar('changeView', 'agendaDay');
                    }
                },


                select: function (start, end, allDay) {

                    if (allDay) {

                        $('#my-event-modal').modal('show');
                        startm = start.format("YYYY-MM-DD HH:mm");
                        endm = end.format("YYYY-MM-DD HH:mm");
                        allDaym = allDay;
                    }
                    $('#calendar').fullCalendar('unselect');
                },
            });


            $('#add-new-event-modal').click(function () {
                var title = $('#new-event-modal').val();
                var color = $('#add-new-event-modal').css("background-color");
                console.log(title);
                console.log(color);
                if (title !== null && title.length != 0) {
                    var token = $('input[name=_token]').val();
                    console.log(startm+' '+endm)
                    $.ajax({
                        url: "{{route('calendario.store')}}",
                        headers: {'X-CSRF-TOKEN':token},
                        data: 'title='+ title+'&start='+ startm +'&end='+ endm+'&allDay='+ allDaym+'&color='+ color,
                        type: "POST",
                        dataType : 'json',
                        success: function(data) {
                            if (data.success){
                                $('#my-event-modal').find('form').trigger('reset');
                                $('#new-event-modal').val('');
                                $('#my-event-modal').modal('hide');
                                $('#calendar').fullCalendar('refetchEvents');
                                // registro_creado();
                            }
                        }
                    });

                }else{
                    alert('ingrese el titulo');
                }
            });

            var currColor = "#3c8dbc"; //Red by default
            //Color chooser button
            var colorChooser = $("#color-chooser-btn");
            $("#color-chooser > li > a").click(function (e) {
                e.preventDefault();
                currColor = $(this).css("background-color");
                $("#add-new-event").css("cssText", $("#add-new-event").attr("style") + ";background-color: "+currColor+" !important;border-color: "+currColor+" !important;");
                // $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
            });

            /*btn color modal*/
            var currColorModal = "#3c8dbc"; //Red by default
            $("#color-chooser-modal > li > a").click(function (e) {
                e.preventDefault();
                currColorModal = $(this).css("background-color");
                $("#add-new-event-modal").css("cssText", $("#add-new-event-modal").attr("style") + ";background-color: "+currColorModal+" !important;border-color: "+currColorModal+" !important;");
                // $('#add-new-event-modal').css({"background-color": currColorModal, "border-color": currColorModal});
            });

            $("#add-new-event").click(function (e) {
                e.preventDefault();
                //Get value and make sure it is not null
                var val = $("#new-event").val();
                if (val.length == 0) {
                    return;
                }

                //Create events
                var event = $("<div />");
                event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("calendar-events");
                event.html(val);
                $('#calendar-events').prepend(event);

                //Add draggable funtionality
                ini_events(event);

                //Remove event from text input
                $("#new-event").val("");
            });

        });

    </script>
@endsection