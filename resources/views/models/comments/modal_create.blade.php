<!-- Modal -->
<div class="modal fade" id="createComment" tabindex="-1" role="dialog" aria-labelledby="createCommentModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="createCommentModalLabel">Új hozzászólás</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core-templates::common.errors')
                            {!! Form::hidden('ads_id', $ads->id, ['id' => 'ads_id']) !!}
                            @include('models.comments.modal_fields')
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="addComment()" class="btn btn-primary" data-dismiss="modal">Hozzáadás</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Mégsem</button>
      </div>
    </div>
  </div>
</div>
