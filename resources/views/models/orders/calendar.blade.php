@extends('layouts.app')

@section('content')

<div id="page-content-wrapper" style="padding-top: 6em">
	<div class="container">
        <h1 class="pull-left">Megrendeléseim</h1>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

		<div id='calendar'></div>
	</div>
</div>        

<script type="text/javascript">
$(document).ready(function() {
	var eventsArray = {!! json_encode($events); !!};

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
	    header: { center: 'month,agendaWeek,listMonth' }, 
	    googleCalendarApiKey: '{!! env('GOOGLE_CALENDAR_API_KEY') !!}',
	    eventSources: [
	        {
				events: eventsArray
			}
		],
	    views: {
	        month: { // name of view
	            columnFormat: 'dddd'
	            // other view-specific options here
	        }
	    },
	    buttonText: {
	    	listMonth: 'Lista'
	    }
    })

});
</script>

@endsection

