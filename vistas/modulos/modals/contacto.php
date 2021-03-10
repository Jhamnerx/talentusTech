
<!-- ------- CONTACT FORM ------- -->
<div class="modal fade" id="ContactModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="top:20px">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <!-- Form Title -->
                    <div class="form-heading text-center">
                        <div class="title" style="color: #20408A; font-size: 22px; font-weight: 600;">Solicitar Demo</div>
                        <p class="title-description">Conoce nuestro sistema, para convecerte</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="validationContactFirst">Nombre</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationContactFirst" placeholder="Nombres"  required>
                              <div class="invalid-feedback">
                                Ingresa tu nombre.
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="Empresa">Empresa</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="Empresa" placeholder="Empresa"  required>
                              <div class="invalid-feedback">
                                Ingresa tu Empresa.
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="Correo">Correo Electronico</label>
                            <div class="input-group">
                              <input type="email" class="form-control" id="Correo" placeholder="Ingresa tu correo"  required>
                              <div class="invalid-feedback">
                                Ingresa tu Correo.
                              </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <label for="Mensaje">Mensaje</label>
                            <div class="input-group">
                              <textarea class="form-control" id="Mensaje" placeholder="Cuentanos sobre tu empresa o requisito."  required>
                              </textarea>
                              <div class="invalid-feedback">
                                Ingrese un Mensaje.
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="checkbox" />
                            <label>No soy un robot</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="modern-button modern-red">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>