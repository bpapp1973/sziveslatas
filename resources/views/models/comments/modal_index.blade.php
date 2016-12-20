<!-- Modal -->
<div class="modal fade" id="comments" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="commentModalLabel">Megjegyzések</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core-templates::common.errors')
                        <button type="button" id="newCommentForm" data-id="{!! $ads->id !!}" class="btn btn-primary" data-toggle="modal" data-target="#createComment">Új</button>

                        <table class="table table-responsive" id="comments-table">
                            <thead>
                                <th>Hirdetés</th>
                                <th>Felhasználónév</th>
                                <th>Létrehozva</th>
                                <th colspan="3">Művelet</th>
                            </thead>
                            <tbody id="commentsTableBody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="nav-link btn btn-warning-outline btn-warning" data-dismiss="modal">Bezár</button>
      </div>
    </div>
  </div>
</div>
