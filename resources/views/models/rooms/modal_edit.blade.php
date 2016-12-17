<!-- Modal -->
<div class="modal fade" id="editRoom" tabindex="-1" role="dialog" aria-labelledby="editRoomModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="editRoomModalLabel">Helyiség módosítása</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core-templates::common.errors')
                          {!! Form::hidden('room_id', null, ['id' => 'room_id']) !!}
                          @include('models.rooms.modal_editfields')
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="updateRoom()" class="btn btn-primary" data-dismiss="modal">Módosítás</button>
        <button type="button" class="nav-link btn btn-warning-outline btn-warning" data-dismiss="modal">Mégsem</button>
      </div>
    </div>
  </div>
</div>
