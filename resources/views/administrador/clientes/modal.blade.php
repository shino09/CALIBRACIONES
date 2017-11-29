<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$cliente->id}}">
    {!!Form::open(['route' => ['cliente.destroy',$cliente->id],'method' => 'DELETE'])!!}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <h4 class="modal-title">Suspender cliente</h4>
                </div>
                <div class="modal-body">
                    <p>En realidad desea suspender a este cliente?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger btn-xs">Confirmar</button>
                </div>
            </div>
        </div>
    {!!Form::close()!!}
</div>