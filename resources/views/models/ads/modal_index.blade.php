<!-- Modal -->
<div class="modal fade" id="ads" tabindex="-1" role="dialog" aria-labelledby="adModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="adModalLabel">Hirdetések</h4>
        @include('core-templates::common.errors')
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon" aria-hidden="true"><i class="glyphicon glyphicon-search"></i></span>
                                {!! Form::text('txtSearch', null, ['id'=>'txtSearch','placeholder' => 'Keresés','class' => 'form-control']) !!}
                            </div>
                        </div>
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
<script type="text/javascript">
</script>