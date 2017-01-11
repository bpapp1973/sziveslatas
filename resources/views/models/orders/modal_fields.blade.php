<!-- Companies Id Field -->
{!! Form::hidden('companies_id', $ads->companies_id, ['id' => 'companies_id']) !!}

<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
	{!! Form::label('company', 'Hirdető', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('company', $ads->company->name, ['class' => 'form-control']) !!}
        @if ($errors->has('company'))
            <span class="help-block">
                <strong>{{ $errors->first('company') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Users Id Field -->
{!! Form::hidden('users_id', Auth::user()->id, ['id' => 'users_id']) !!}

<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	{!! Form::label('username', 'Felhasználó', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('username', Auth::user()->username, ['class' => 'form-control']) !!}
        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Last Name Field -->
<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    {!! Form::label('last_name', 'Vezetéknév', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('last_name', Auth::user()->last_name, ['class' => 'form-control']) !!}
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- First Name Field -->
<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    {!! Form::label('first_name', 'Keresztnév', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('first_name', Auth::user()->first_name, ['class' => 'form-control']) !!}
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Email Field -->
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', Auth::user()->email, ['class' => 'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Phone Field -->
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Telefonszám', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('phone', Auth::user()->phone, ['class' => 'form-control']) !!}
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Ads Id Field -->
{!! Form::hidden('ads_id', $ads->id, ['id' => 'ads_id']) !!}
<div class="form-group{{ $errors->has('ads_title') ? ' has-error' : '' }}">
    {!! Form::label('ads_title', 'Hirdetés', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ads_title', $ads->title, ['class' => 'form-control']) !!}
        @if ($errors->has('ads_title'))
            <span class="help-block">
                <strong>{{ $errors->first('ads_title') }}</strong>
            </span>
        @endif
    </div>
</div>

        <div class="row">

          <div class="col-md-4 col-md-offset-2 demo">
            <h4>Your Date Range Picker</h4>
            <input type="text" id="config-demo" class="form-control">
            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
          </div>

        </div>

      </div>

<!-- Startdate Field -->
<div class="form-group{{ $errors->has('startdate') ? ' has-error' : '' }}">
    {!! Form::label('startdate', 'Startdate', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('startdate', null, ['class' => 'form-control']) !!}
        @if ($errors->has('startdate'))
            <span class="help-block">
                <strong>{{ $errors->first('startdate') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Enddate Field -->
<div class="form-group{{ $errors->has('enddate') ? ' has-error' : '' }}">
    {!! Form::label('enddate', 'Enddate', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('enddate', null, ['class' => 'form-control']) !!}
        @if ($errors->has('enddate'))
            <span class="help-block">
                <strong>{{ $errors->first('enddate') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Menucards Id Field -->
<div class="form-group{{ $errors->has('menucards_id') ? ' has-error' : '' }}">
    {!! Form::label('menucards_id', 'Menü', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('menucards_id', $menucardsArray, null, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('menucards_id'))
            <span class="help-block">
                <strong>{{ $errors->first('menucards_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Rooms Id Field -->
<div class="form-group{{ $errors->has('rooms_id') ? ' has-error' : '' }}">
    {!! Form::label('rooms_id', 'Helyiség', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('rooms_id', $roomsArray, null, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('rooms_id'))
            <span class="help-block">
                <strong>{{ $errors->first('rooms_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Guests Field -->
<div class="form-group{{ $errors->has('guests') ? ' has-error' : '' }}">
    {!! Form::label('guests', 'Vendégek száma', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('guests', null, ['class' => 'form-control']) !!}
        @if ($errors->has('guests'))
            <span class="help-block">
                <strong>{{ $errors->first('guests') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Personnel Field -->
<div class="form-group{{ $errors->has('personnel') ? ' has-error' : '' }}">
    {!! Form::label('personnel', 'Személyzet', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('personnel', null, ['class' => 'form-control']) !!}
        @if ($errors->has('personnel'))
            <span class="help-block">
                <strong>{{ $errors->first('personnel') }}</strong>
            </span>
        @endif
    </div>
</div>

      <style type="text/css">
      .demo { position: relative; }
      .demo i {
        position: absolute; bottom: 10px; right: 24px; top: auto; cursor: pointer;
      }
      </style>

      <script type="text/javascript">

        $('#config-text').keyup(function() {
          eval($(this).val());
        });
        
        $('.configurator input, .configurator select').change(function() {
          updateConfig();
        });

        $('.demo i').click(function() {
          $(this).parent().find('input').click();
        });

        $('#startDate').daterangepicker({
          singleDatePicker: true,
          startDate: moment().subtract(6, 'days')
        });

        $('#endDate').daterangepicker({
          singleDatePicker: true,
          startDate: moment()
        });

        updateConfig();

        function updateConfig() {
          var options = {};

          if ($('#singleDatePicker').is(':checked'))
            options.singleDatePicker = true;
          
          if ($('#showDropdowns').is(':checked'))
            options.showDropdowns = true;

          if ($('#showWeekNumbers').is(':checked'))
            options.showWeekNumbers = true;

          if ($('#showISOWeekNumbers').is(':checked'))
            options.showISOWeekNumbers = true;

          if ($('#timePicker').is(':checked'))
            options.timePicker = true;
          
          if ($('#timePicker24Hour').is(':checked'))
            options.timePicker24Hour = true;

          if ($('#timePickerIncrement').val().length && $('#timePickerIncrement').val() != 1)
            options.timePickerIncrement = parseInt($('#timePickerIncrement').val(), 10);

          if ($('#timePickerSeconds').is(':checked'))
            options.timePickerSeconds = true;
          
          if ($('#autoApply').is(':checked'))
            options.autoApply = true;

          if ($('#dateLimit').is(':checked'))
            options.dateLimit = { days: 7 };

          if ($('#ranges').is(':checked')) {
            options.ranges = {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days': [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            };
          }

          if ($('#locale').is(':checked')) {
            $('#rtl-wrap').show();
            options.locale = {
              direction: $('#rtl').is(':checked') ? 'rtl' : 'ltr',
              format: 'MM/DD/YYYY HH:mm',
              separator: ' - ',
              applyLabel: 'Apply',
              cancelLabel: 'Cancel',
              fromLabel: 'From',
              toLabel: 'To',
              customRangeLabel: 'Custom',
              daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
              monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
              firstDay: 1
            };
          } else {
            $('#rtl-wrap').hide();
          }

          if (!$('#linkedCalendars').is(':checked'))
            options.linkedCalendars = false;

          if (!$('#autoUpdateInput').is(':checked'))
            options.autoUpdateInput = false;

          if (!$('#showCustomRangeLabel').is(':checked'))
            options.showCustomRangeLabel = false;

          if ($('#alwaysShowCalendars').is(':checked'))
            options.alwaysShowCalendars = true;

          if ($('#parentEl').val().length)
            options.parentEl = $('#parentEl').val();

          if ($('#startDate').val().length) 
            options.startDate = $('#startDate').val();

          if ($('#endDate').val().length)
            options.endDate = $('#endDate').val();
          
          if ($('#minDate').val().length)
            options.minDate = $('#minDate').val();

          if ($('#maxDate').val().length)
            options.maxDate = $('#maxDate').val();

          if ($('#opens').val().length && $('#opens').val() != 'right')
            options.opens = $('#opens').val();

          if ($('#drops').val().length && $('#drops').val() != 'down')
            options.drops = $('#drops').val();

          if ($('#buttonClasses').val().length && $('#buttonClasses').val() != 'btn btn-sm')
            options.buttonClasses = $('#buttonClasses').val();

          if ($('#applyClass').val().length && $('#applyClass').val() != 'btn-success')
            options.applyClass = $('#applyClass').val();

          if ($('#cancelClass').val().length && $('#cancelClass').val() != 'btn-default')
            options.cancelClass = $('#cancelClass').val();

          $('#config-text').val("$('#demo').daterangepicker(" + JSON.stringify(options, null, '    ') + ", function(start, end, label) {\n  console.log(\"New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')\");\n});");

          $('#config-demo').daterangepicker(options, function(start, end, label) { console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')'); });
          
        }

      
      </script>
