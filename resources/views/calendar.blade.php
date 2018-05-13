@extends('layouts.app')
@section('content')
    {{-- <div class="calendarTitle">

    </div> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.coincalendar.info/wp-content/plugins/eventon-api/eventon.js?ver=1.0.1"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('#eventoncontent').evoCalendar({
            api: 'http://www.coincalendar.info/wp-json/eventon/calendar?event_type=3,1266,1267&number_of_months=1&event_count=100&show_et_ft_img=yes',
            calendar_url: '',
            new_window: true,
            loading_text: 'Loading Calendar...'
            });
        });
    </script>
    <div id="eventoncontent" style="height:100%; width:100%"></div>
@endsection
