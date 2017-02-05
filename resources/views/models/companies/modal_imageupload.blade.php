<div id="imageUpload" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title">Képfeltöltés</h4>
            </div>
            <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(['route'=>'companies.image', 'files'=>true]) !!}

                        {!! Form::hidden('container_type', 'company') !!}
                        {!! Form::hidden('container_id', $companies->id) !!}
                        {!! Form::hidden('form', 'description') !!}
                        {!! Form::hidden('control_id', null, ['id'=>'control_id', 'name'=>'control_id']) !!}
                        {!! Form::hidden('title', $companies->name, ['id'=>'title', 'class' => 'form-control']) !!}
                        {!! Form::hidden('description', null, ['id'=>'description', 'class' => 'form-control']) !!}
<!--
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            {!! Form::label('title', 'Cím', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {!! Form::label('description', 'Leírás', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
-->                       
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            {!! Form::label('image', 'Válassz egy képet', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::file('image', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Feltöltés', ['class' => 'btn btn-primary']) !!}
                            {!! Form::submit('Mégsem', ['data-dismiss'=>'modal', 'class' => 'nav-link btn btn-warning-outline btn-warning']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
