<!-- Modal -->
<div class="modal fade" id="editFavourites" tabindex="-1" role="dialog" aria-labelledby="editFavouritesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="editFavouritesModalLabel">Favourites módosítása</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core-templates::common.errors')
                          {!! Form::hidden('favourites_id', null, ['id' => 'favourites_id']) !!}
                          @include('models.favourites.modal_editfields')
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="updateFavourites()" class="btn btn-primary" data-dismiss="modal">Módosítás</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Mégsem</button>
      </div>
    </div>
  </div>
</div>
