<!-- Modal -->
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="order_detailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="order_detailsModalLabel">Order Details</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core-templates::common.errors')
                        <button type="button" id="newOrder DetailsForm" data-id="{!! $ads->id !!}" class="btn btn-primary" data-toggle="modal" data-target="#createOrder Details">Új</button>

                        <table class="table table-responsive" id="order_details-table">
                            <thead>
                              $FIELD_HEADERS$
                              <th colspan="3">Művelet</th>
                            </thead>
                            <tbody id="order_detailsTableBody">
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
