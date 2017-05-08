<!-- Modal -->
<div class="modal fade" id="rooms" tabindex="-1" role="dialog" aria-labelledby="roomModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="roomModalLabel">Helyiségek</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core-templates::common.errors')
                        <button type="button" id="newRoomForm" data-id="{!! $ads->id !!}" class="btn btn-primary" data-toggle="modal" data-target="#createRoom">Új</button>

                        <table class="table table-responsive" id="rooms-table">
                            <thead>
                                <th>Hirdetés</th>
                                <th>Név</th>
                                <th>Méret</th>
                                <th>Férőhelyek</th>
                                <th>Ár</th>
                                <th colspan="3">Művelet</th>
                            </thead>
                            <tbody id="roomsTableBody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
      </div>
    </div>
  </div>
</div>
