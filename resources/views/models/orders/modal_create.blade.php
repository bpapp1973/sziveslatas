<!-- Modal -->
<div class="modal fade" id="createOrders" tabindex="-1" role="dialog" aria-labelledby="createOrdersModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="createOrdersModalLabel">Új megrendelés</h4>
      </div>
      {!! Form::open(['route' => 'orders.store']) !!}
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core-templates::common.errors')
                            {!! Form::hidden('ads_id', $ads->id, ['id' => 'ads_id']) !!}
                            @include('models.orders.modal_fields')
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="row">
          @if($ads->category->parent_id==4)
            <div class="form-group col-md-6">A Megrendelem gombra kattintás után új lapon megnyitjuk a rendezvény weblapját</div>
            <div class="form-group col-md-6">
              {!! Form::submit('Megrendelem', ["onclick" => "window.open('" . $ads->ticket_url . "', '_blank')", 'class' => 'btn btn-primary']) !!}
              <a data-dismiss="modal" class="btn btn-default">Mégsem</a>
            </div>
          @else
            <div class="form-group col-md-6">
              {!! Form::submit('Megrendelem', ['class' => 'btn btn-primary']) !!}
              <a data-dismiss="modal" class="btn btn-default">Mégsem</a>
            </div>
          @endif
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
