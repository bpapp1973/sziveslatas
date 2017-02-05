<!-- Modal -->
<div class="modal fade" id="ads" tabindex="-1" role="dialog" aria-labelledby="adModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="adModalLabel">Hirdetések</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core-templates::common.errors')

                        <div id="ads_list" class="list-group col-md-10">
                        </div>
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
