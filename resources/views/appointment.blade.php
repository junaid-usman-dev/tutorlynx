<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />

    {{-- Month View --}}
    {{-- https://fullcalendar.io/docs/month-view --}}
    <link href="{{ asset('fullcalendar/packages/core/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('fullcalendar/packages/daygrid/main.css') }}" rel='stylesheet' />

    <script src="{{ asset('fullcalendar/packages/core/main.js') }}" ></script>
    <script src="{{ asset('fullcalendar/packages/daygrid/main.js') }}" ></script>

    {{-- TimeGrid View --}}
    {{-- https://fullcalendar.io/docs/timegrid-view --}}
    <link href="{{ asset('fullcalendar/packages/core/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('fullcalendar/packages/daygrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('fullcalendar/packages/timegrid/main.css') }}" rel='stylesheet' />

    <script src="{{ asset('fullcalendar/packages/core/main.js') }}"></script>
    <script src="{{ asset('fullcalendar/packages/daygrid/main.js') }}"></script>
    <script src="{{ asset('fullcalendar/packages/timegrid/main.js') }}"></script>

    <script>

        //  Month View 
        // document.addEventListener('DOMContentLoaded', function() {
        //     var calendarEl = document.getElementById('calendar');
        //     var calendar = new FullCalendar.Calendar(calendarEl, {
        //         plugins: [ 'dayGrid' ],
        //         defaultView: 'dayGridMonth'
        //     });
        //     calendar.render();
        // });

        //  TimeGrid View
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'timeGrid' ],
                defaultView: 'timeGridWeek'
            });
            calendar.render();
        });

    </script>
  </head>
  <body>

    <div id='calendar' style="width: 70%; height: 600px; margin: 0px auto;"></div>

  </body>
</html>