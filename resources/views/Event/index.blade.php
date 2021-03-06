 @extends('layouts.app')

 @section('breadcrumb')
 <div class="breadcrumb">
         <h1>Event</h1>
         <ul>
             <li><a href="">Apps</a></li>
             <li>Event</li>
         </ul>
     </div>
 <div class="separator-breadcrumb border-top"></div>
 @endsection
 
 @section('content')
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <div class="row">
     <div class="col-md-3 mb-3">
         <div class="card">
             <div class="card-body">
                 <ul class="list-group">
                     <a href="#">
                        <li class="list-group-item text-white mb-2 bg-primary" data-toggle="modal" data-target=".events">
                         Tambah Event
                        </li>
                    </a>
                 </ul>
             </div>
         </div>
 
     </div>
     <div class="col-md">
         <div class="card">
             <div class="card-body">
                 <body>
                 <div style="height: 150%" id="calendar"></div>
                 </body>
             </div>
         </div>
     </div>
 </div>

    
    <div class="modal fade events" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    @role('super-admin')
                    <form  method="post" action="{{ route('super.event-add')}}">
                    @endrole
                    @role('admin')
                    <form  method="post" action="{{ route('admin.event-add')}}">
                    @endrole
                        @csrf
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="ul-form__label" for="inputEmail1">Judul Event:</label>
                                        <input class="form-control" type="text" name="title" placeholder="Masukkan Judul Event" required="required"/><small class="ul-form__text form-text">
                                            Please enter title event
                                        </small>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="ul-form__label" for="inputEmail1">Deskripsi Event:</label>
                                        <input class="form-control" type="text" name="deskripsi" placeholder="Masukkan deskripsi Event" required="required"/><small class="ul-form__text form-text">
                                            Please enter description event
                                        </small>
                                    </div>
                                </div>
                                <div class="custom-separator"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="ul-form__label">Mulai Event:</label>
                                        <div class="input-right-icon">
                                            <input class="form-control tanggal" type="text" name="start" value="2021-01-05 00:00:00"  required="required" /><span class="span-right-input-icon"></span>
                                        </div><small class="ul-form__text form-text">
                                            Format 2021-01-05 00:00:00
                                        </small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="ul-form__label">Selesai Event:</label>
                                        <div class="input-right-icon">
                                            <input class="form-control" type="text" name="end" value="2021-01-05 00:00:00" required="required" /><span class="span-right-input-icon"></span>
                                        </div><small class="ul-form__text form-text">
                                            Format 2021-01-05 00:00:00
                                        </small>
                                    </div>
                                </div>
                                <div class="custom-separator"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="ul-form__label">Background Event:</label>
                                        <div class="input-right-icon">
                                            <input class="form-control" type="color" name="color"  required="required" /><span class="span-right-input-icon"></span>
                                        </div><small class="ul-form__text form-text">
                                            Please enter color
                                        </small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="ul-form__label">Warna text Event:</label>
                                        <div class="input-right-icon">
                                            <input class="form-control" type="color" name="textColor" placeholder="Enter your postcode" required="required"/><span class="span-right-input-icon"></span>
                                        </div><small class="ul-form__text form-text">
                                            Please enter color
                                        </small>
                                    </div>
                                </div>
                                <div class="custom-separator"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="ul-form__label" for="inputEmail5">Type Event:</label>
                                        <div class="ul-form__radio-inline">
                                            <label class="ul-radio__position radio radio-primary form-check-inline">
                                                <input type="radio" name="allDay" value="1" /><span class="ul-form__radio-font">All Day</span><span class="checkmark"></span>
                                            </label>
                                            <label class="ul-radio__position radio radio-primary">
                                                <input type="radio" name="allDay" value="0" /><span class="ul-form__radio-font">Partial</span><span class="checkmark"></span>
                                            </label>
                                        </div><small class="ul-form__text form-text">
                                            Please select type event
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="mc-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button class="btn btn-primary m-1 footer-delete-right" type="submit">save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <script>
		@if(Session::has('success'))

			iziToast.success({
				title: 'OK',
				message: '{{ session('success') }}',
				position: 'topRight',
				transitionIn: 'fadeInUp',
			});
		@endif	
    </script>
    
    <script>
		@if(Session::has('error'))

			iziToast.success({
				title: 'OK',
				message: '{{ session('error') }}',
				position: 'topRight',
				transitionIn: 'fadeInUp',
			});
		@endif	
	</script>
 
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/iziToast.min.css')}}">
<link rel="stylesheet" href="{{ asset('/css/iziToast.css')}}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ asset('fullCalendar/fullcalendar.css')}}" />
{{-- <link rel="stylesheet" href="{{ asset('fullCalendar/main.css')}}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('/theme/css/plugins/calendar/fullcalendar.min.css')}}" /> --}}
@endsection

@section('js')

    <script src="{{ asset('/js/iziToast.js')}}"></script>
    <script src="{{ asset('/js/iziToast.min.js')}}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" --}}
{{--crossorigin="anonymous"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
    <script src="{{ asset('fullCalendar/fullcalendar.js')}}"></script>
    {{-- <script src="{{ asset('fullCalendar/main.js')}}"></script> --}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    @role('super-admin')
    <script>
        $(document).ready(function() {

// page is now ready, initialize the calendar...
            function convert(str) {
                const d = new Date(str);
                let month = '' + (d.getMonth() + 1);
                let day = '' + d.getDate();
                let year = d.getFullYear();
                if (month.length < 2) month = '0' + month;
                if (day.length < 2) day = '0' + day;
                let hour =''+d.getUTCHours();
                let minutes =''+d.getUTCMinutes();
                let seconds =''+d.getUTCSeconds();
                if(hour.length < 2) hour='0'+hour;
                if(minutes.length < 2) minutes='0'+ minutes;
                if(seconds.length < 2) seconds='0'+ seconds;
                return [year,month,day].join('-')+' '+[hour,minutes,seconds].join(':');

            };

            var calendar = $('#calendar').fullCalendar({
            // put your options and callbacks here
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'year,month,basicWeek,basicDay'

                },
                timezone: 'local',
                height: "650",
                selectable: true,
                dragabble: true,
                defaultView: 'month',
                yearColumns: 3,

                events:"{{ route('super.eventlist')}}",

                select: function(start, end, allDay) {
                    $('#start').val(convert(start));
                    $('#end').val(convert(end));
                    $('#dialog').dialog({
                        title:'Add Event',
                        width: 650,
                        height:700,
                        modal:true,
                        show:{effect:'clip',duration:350},
                        hide:{effect:'clip',duration:250}
                    });
                },
            })
        });
    </script>
    @endrole
    @role('admin')
    <script>
        $(document).ready(function() {

// page is now ready, initialize the calendar...
            function convert(str) {
                const d = new Date(str);
                let month = '' + (d.getMonth() + 1);
                let day = '' + d.getDate();
                let year = d.getFullYear();
                if (month.length < 2) month = '0' + month;
                if (day.length < 2) day = '0' + day;
                let hour =''+d.getUTCHours();
                let minutes =''+d.getUTCMinutes();
                let seconds =''+d.getUTCSeconds();
                if(hour.length < 2) hour='0'+hour;
                if(minutes.length < 2) minutes='0'+ minutes;
                if(seconds.length < 2) seconds='0'+ seconds;
                return [year,month,day].join('-')+' '+[hour,minutes,seconds].join(':');

            };

            var calendar = $('#calendar').fullCalendar({
            // put your options and callbacks here
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'year,month,basicWeek,basicDay'

                },
                timezone: 'local',
                height: "650",
                selectable: true,
                dragabble: true,
                defaultView: 'month',
                yearColumns: 3,

                events:"{{ route('admin.eventlist')}}",

                select: function(start, end, allDay) {
                    $('#start').val(convert(start));
                    $('#end').val(convert(end));
                    $('#dialog').dialog({
                        title:'Add Event',
                        width: 650,
                        height:700,
                        modal:true,
                        show:{effect:'clip',duration:350},
                        hide:{effect:'clip',duration:250}
                    });
                },
            })
        });
    </script>
    @endrole  

    


    {{-- <script>
        $(document).ready(function() {

            function convert(str) {
                const d = new Date(str);
                let month = '' + (d.getMonth() + 1);
                let day = '' + d.getDate();
                let year = d.getFullYear();
                if (month.length < 2) month = '0' + month;
                if (day.length < 2) day = '0' + day;
                let hour =''+d.getUTCHours();
                let minutes =''+d.getUTCMinutes();
                let seconds =''+d.getUTCSeconds();
                if(hour.length < 2) hour='0'+hour;
                if(minutes.length < 2) minutes='0'+ minutes;
                if(seconds.length < 2) seconds='0'+ seconds;
                return [year,month,day].join('-')+' '+[hour,minutes,seconds].join(':');

            };

            var calendar = $('#calendar').fullCalendar({
                // put your options and callbacks here
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'year,month,basicWeek,basicDay'

                },
                timezone: 'local',
                height: "650",
                selectable: true,
                dragabble: true,
                defaultView: 'year',
                yearColumns: 3,

                durationEditable: true,
                bootstrap: false,

                events:"{{ route('super.eventlist')}}",

                select: function(start, end, allDay) {
                    $('#start').val(convert(start));
                    $('#end').val(convert(end));
                    $('#dialog').dialog({
                        title:'Add Event',
                        width: 650,
                        height:700,
                        modal:true,
                        show:{effect:'clip',duration:350},
                        hide:{effect:'clip',duration:250}
                    });
                },
            })
        });
    </script> --}}
@endsection