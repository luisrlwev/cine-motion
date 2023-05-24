<!-- Formulario de contacto -->
<section class="contact spad py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-8">
                <div class="contact__form">
                    <h3>Obtenga una consulta totalmente gratuita</h3>
                    <p>¡Complete el formulario para que podamos programar una llamada sin compromiso y ver cómo podemos ayudarle!</p>
                    <div id="contact-form" class="wow fadeIn first">
                        <form class="form-contact" id="contactForm" data-toggle="validator">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" onfocus="this.placeholder = 'Escribe tu nombre*'" onblur="this.placeholder = 'El nombre es obligatorio*'" placeholder="Nombre completo*" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="empresa" id="empresa" onfocus="this.placeholder = 'Escribe tu empresa'" onblur="this.placeholder = 'La empresa es obligatoria*'" placeholder="Empresa*" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="tel" id="tel" onfocus="this.placeholder = 'Escribe tu teléfono (10 digitos)*'" onblur="this.placeholder = 'El teléfono es obligatorio*'" placeholder="Teléfono (10 digitos)*" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" onfocus="this.placeholder = 'Escribe tu e-mail*'" onblur="this.placeholder = 'El e-mail es obligatorio*'" placeholder="E-mail*" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="presupuesto" id="presupuesto" onfocus="this.placeholder = 'Escribe tu presupuesto*'" onblur="this.placeholder = 'El presupuesto es obligatorio*'" placeholder="Presupuesto*" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = 'Escribe el mensaje*'" onblur="this.placeholder = 'El mensaje es obligatorio*'" placeholder="¿Cómo podemos ayudarle?*" required></textarea>
                                <div class="help-block with-errors text-danger"></div>
                                <div id="msgSubmit" class="h5 text-center hidden"></div>
                                <p class="text-white">*Campos obligatorios</p>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" id="form-submit" class="site-btn">Enviar</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Formulario de contacto -->