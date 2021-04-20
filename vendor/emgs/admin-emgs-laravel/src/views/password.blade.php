<div class="push-modal">
    <div class="modal fade" id="password-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title form-title" id="exampleModalLabel"> CAMBIAR CONTRASEÑA </h5>
                </div>

                <div class="modal-body">

                    <div class="alert alert-danger password-alert" role="alert">
                        alert message.
                    </div>

                     {!! Form::open(['id' => 'f-change-password']) !!}
                        <div class="form-group">
                            <label for=""> Contraseña actual <span class="required">*</span></label>
                            <input type="password" class="form-control" name="actual_password">
                        </div>

                        <div class="form-group">
                            <label for=""> Nueva contraseña <span class="required">*</span></label>
                            <input type="password" class="form-control" name="new_password">
                        </div>

                        <div class="form-group">
                            <label for=""> Confirmar contraseña <span class="required">*</span></label>
                            <input type="password" class="form-control" name="new_password_confirmation">
                        </div>
                     {!! Form::close() !!}

                </div>
                
                <div class="modal-footer">
                    <button type="button" id="f-password" class="btn btn-success"> Aceptar </button>
                    <button type="button" id="close-modal-pass" class="btn btn-basic" data-dismiss="modal">Cerrar</button>
                    
                </div>
            </div>
        </div>
    </div>
</div>
