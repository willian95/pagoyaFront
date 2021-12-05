<footer class="container">
  <div class="text-center copy">
    <p class="">Copyright © <?php
                            $fechaActual = date('Y');
                            echo $fechaActual;
                            ?> </p>
    <p data-toggle="modal" data-target=".faq" class="ml-2">| FAQ’S</p>
    <p data-toggle="modal" data-target=".tyc" class="ml-2">| Terminos & Condiciones</p>
  </div>
</footer>


<!-- Modal login-->
<div class="modal fade login" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body pt-5 pb-4">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="header-sesion">
          <h3>CMS Login</h3>
          <img src="assets/img/logos/logo.svg" alt="" />
        </div>
        <form action="" class="form-sesion">
          <div class="form-conetnt">
            <img src="assets/img/iconos/sGroup.svg" alt="" />
            <input class="form-control" type="text" placeholder="Usuario" />
          </div>
          <div class="form-conetnt">
            <img class="padlock" src="assets/img/iconos/padlock.png" alt="" />
            <input class="form-control" type="password" placeholder="Contraseña" />
          </div>
          <button class="btn-custom">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal registro-->
<div class="modal fade regsitro" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body pt-5 pb-4">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="header-sesion">
          <h3>Registrarme en</h3>
          <img src="assets/img/logos/logo.svg" alt="" />
        </div>
        <form action="" class="form-sesion">
          <div class="form-conetnt">
            <img src="assets/img/iconos/sGroup.svg" alt="" />
            <input class="form-control" type="text" placeholder="Nombre y apellido" />
          </div>
          <div class="form-conetnt">
            <img class="email" src="assets/img/iconos/sms.svg" alt="" />
            <input class="form-control" type="text" placeholder="Email" />
          </div>

          <div class="form-conetnt">
            <img class="phone" src="assets/img/iconos/phonea.svg" alt="" />
            <input class="form-control" type="text " placeholder="+57 (310) 123 4567" />
          </div>

          <div class="form-conetnt">
            <img class="cargo" src="assets/img/iconos/user (1).png" alt="" />
            <input class="form-control" type="text" placeholder=" Cargo" />
          </div>

          <button class="btn-custom">Registrarme</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- contacto-->
<div class="modal fade contact-modal " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body pt-5 pb-4">
        <img class="line-sahpe" src="assets/img/shape.png" alt="">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="row">
          <div class="col-md-5">
            <p>En el transcurso de
              una hora estaremos
              en comunicación para
              resolver tu
              solicitud.</p>
          </div>
          <div class="col-md-7">
            <h3 class="title pb-0">¡Contáctanos!</h3>
            <form action="" class="form-sesion">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-conetnt">
                    <img src="assets/img/iconos/sGroup.svg" alt="" />
                    <input class="form-control" type="text" placeholder="Nombre y apellido" />
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-conetnt">
                    <img class="email" src="assets/img/iconos/sms.svg" alt="" />
                    <input class="form-control" type="text" placeholder="Email" />
                  </div>
                </div>
                <div class="col-md-6 mb-3">

                  <div class="form-conetnt">
                    <img class="phone" src="assets/img/iconos/phonea.svg" alt="" />
                    <input class="form-control" type="text " placeholder="+57 (310) 123 4567" />
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-conetnt">
                    <img class="cargo" src="assets/img/iconos/user (1).png" alt="" />
                    <input class="form-control" type="text" placeholder=" Cargo" />
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-conetnt">
                    <textarea class="form-control" name="" id="" cols="30" rows="3" placeholder="Por favor escríbenos tus dudas o como ayudarte mejor una vez te contactemos!"></textarea>

                  </div>
                </div>
              </div>
              <div>
                <button class="btn-custom">Enviar</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- faqg--->
<div class="modal fade faq " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body pt-5 pb-4">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="row">

          <div class="col-md-12">
            <h3 class="title pb-0 pt-0">Lorem ipsum</h3>

            <div class="parraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident alias optio sed, placeat similique tenetur eum nihil dolorem, eos magnam consequatur rem facere delectus porro? Alias velit ipsa ex quis?</div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!--lista de banco---->
<div class="modal fade bancos " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body pt-5 pb-4">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="row">

          <div class="col-md-12">
            <h3 class="title pb-0 pt-0">Lorem ipsum</h3>

            <div class="parraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident alias optio sed, placeat similique tenetur eum nihil dolorem, eos magnam consequatur rem facere delectus porro? Alias velit ipsa ex quis?</div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="modal fade faq " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body pt-5 pb-4">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="row">

          <div class="col-md-12">
            <h3 class="title pb-0 pt-0">Lorem ipsum</h3>

            <div class="parraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident alias optio sed, placeat similique tenetur eum nihil dolorem, eos magnam consequatur rem facere delectus porro? Alias velit ipsa ex quis?</div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>