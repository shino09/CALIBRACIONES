<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$usuario->id}}">
    {!!Form::open(['route' => ['usuario.destroy',$usuario->id],'method' => 'DELETE'])!!}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <h4 class="modal-title">Activar Usuario</h4>
                </div>
                <div class="modal-body">
                    <p>En realidad desea activar a este usuario?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btn-xs">Confirmar</button>
                </div>
            </div>
        </div>
    {!!Form::close()!!}
</div>