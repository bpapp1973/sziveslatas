<!-- Modal -->
<div class="modal fade" id="deleteFavourites" tabindex="-1" role="dialog" aria-labelledby="deleteFavouritesModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="deleteFavouritesModalLabel">Leiratkozás</h4>
      </div>
      {!! Form::open(['route' => ['favourites.destroy', $favourite->id], 'method' => 'delete']) !!}
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core-templates::common.errors')
                        Ha már nem szeretnél értesülni a hirdetés további információiról<br/>
                        e-mail-ben, akkor kattints az Leiratkozom gombra.
                        {!! Form::hidden('ads_id', $ads->id, ['id' => 'ads_id']) !!}
                        {!! Form::hidden('users_id', Auth::user()->id, ['id' => 'users_id']) !!}
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="form-group col-sm-12">
          {!! Form::submit('Leiratkozom', ['class' => 'btn btn-primary']) !!}
          <a data-dismiss="modal" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
