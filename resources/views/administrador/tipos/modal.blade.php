<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$tipo->id}}">
    {!!Form::open(['route' => ['tipo.destroy',$tipo->id],'method' => 'DELETE'])!!}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <h4 class="modal-title">Eliminar tipo</h4>
                </div>
                <div class="modal-body">
                    <p>Confirme si desea eliminar el tipo</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger btn-xs">Confirmar</button>
                </div>
            </div>
        </div>
    {!!Form::close()!!}
</div>