<?php require_once 'includes/header.php'; ?>
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contacto</h2>
                        <div class="breadcrumb__links">
                            <a href="index">Inicio</a>
                            <span>Contacto</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-widget spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Dirección</h4>
                            <p>Atlanta 188 Colonia Noche Buena, Benito Juárez 03720. <br>Ciudad de México, México.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Teléfonos</h4>
                            <p>México +52 55 8975 7694</p>
                            <p>Miami: +1 (305) 278-3838</p>
                            <p>Puerto Rico: +1 (787) 222-5000 Ext 0</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Ventas</h4>
                            <p>Sr. Jorge Calderón</p>
                            <p>george@cfgpr.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <div id="map" style="height: 550px;" data-aos="fade-up"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <h3>Contáctanos</h3>
                        <div id="contact-form" class="wow fadeIn first">
                        <form class="form-contact" id="FormContacto" data-toggle="validator">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" onfocus="this.placeholder = 'Escribe tu nombre*'" onblur="this.placeholder = 'El nombre es obligatorio*'" placeholder="Nombre completo*" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" onfocus="this.placeholder = 'Escribe tu e-mail*'" onblur="this.placeholder = 'El e-mail es obligatorio*'" placeholder="E-mail*" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" onfocus="this.placeholder = 'Escribe el asunto*'" onblur="this.placeholder = 'El asunto es obligatorio*'" placeholder="Asunto*" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = 'Escribe el mensaje*'" onblur="this.placeholder = 'El mensaje es obligatorio*'" placeholder="Mensaje*" required></textarea>
                                <div class="help-block with-errors text-danger"></div>
                                <div id="msgSubmit" class="h5 text-center hidden"></div>
                                <p class="text-white">*Campos obligatorios</p>
                                <p>Antes de enviarnos alguna idea, favor de verificar nuestro <a href="">Disclaimer</a>.</p>
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
<?php require_once 'includes/footer.php'; ?>