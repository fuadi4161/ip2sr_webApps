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

    
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <body>
                    <div style="height: 150%" id="calendar"></div>
                    </body>
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

               events:"{{ route('super.kalendarlist')}}",

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
@endsection