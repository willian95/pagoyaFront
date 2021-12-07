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
            <input class="form-control" type="text" placeholder="Nombre y apellido" id="register_name" />
            
          </div>
          <p style="color: red; font-size:12px; display: none;" id="error_register_name"></p>
          <div class="form-conetnt">
            <img class="email" src="assets/img/iconos/sms.svg" alt="" />
            <input class="form-control" type="text" placeholder="Email" id="register_email"/>
            
          </div>
          <p style="color: red; font-size:12px; display: none;" id="error_register_email"></p>

          <div class="form-conetnt">
            <img class="phone" src="assets/img/iconos/phonea.svg" alt="" />
            <input class="form-control" type="text " placeholder="+57 (310) 123 4567" id="register_phone"/>
            
          </div>
          <p style="color: red; font-size:12px; display: none;" id="error_register_phone"></p>

          <div class="form-conetnt">
            <img class="cargo" src="assets/img/iconos/user (1).png" alt="" />
            <input class="form-control" type="text" placeholder=" Cargo" id="register_cargo"/>
            
          </div>
          <p style="color: red; font-size:12px; display: none;" id="error_register_cargo"></p>

          <button type="button" class="btn-custom" id="register_button" onclick="register()">Registrarme</button>
          <div id="register_spinner" style="display:none">
              Enviando...
          </div>
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
                    <input class="form-control" type="text" placeholder="Nombre y apellido" id="prospect_name" />
                  </div>
                  <p style="color: red; font-size:12px; display: none; margin-top: 0px" id="error_prospect_name"></p>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-conetnt">
                    <img class="email" src="assets/img/iconos/sms.svg" alt="" />
                    <input class="form-control" type="text" placeholder="Email" id="prospect_email" />
                  </div>
                  <p style="color: red; font-size:12px; display: none; margin-top: 0px" id="error_prospect_email"></p>
                </div>
                <div class="col-md-6 mb-3">

                  <div class="form-conetnt">
                    <img class="phone" src="assets/img/iconos/phonea.svg" alt="" />
                    <input class="form-control" type="text " placeholder="+57 (310) 123 4567" id="prospect_phone" />
                  </div>
                  <p style="color: red; font-size:12px; display: none; margin-top: 0px" id="error_prospect_phone"></p>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-conetnt">
                    <img class="cargo" src="assets/img/iconos/user (1).png" alt="" />
                    <input class="form-control" type="text" placeholder=" Cargo" id="prospect_cargo" />
                  </div>
                  <p style="color: red; font-size:12px; display: none; margin-top: 0px" id="error_prospect_cargo"></p>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-conetnt">
                    <textarea id="prospect_question" class="form-control" name="" id="" cols="30" rows="3" placeholder="Por favor escríbenos tus dudas o como ayudarte mejor una vez te contactemos!"></textarea>

                  </div>
                  <p style="color: red; font-size:12px; display: none; margin-top: 0px" id="error_prospect_question"></p>
                </div>
              </div>
              <div>
                <button class="btn-custom" id="prospect_button" type="button" onclick="registerProspect()">Enviar</button>
                <div id="prospect_spinner" style="display:none">
                    Enviando...
                </div>
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

<script>

  function register(){

    let error = false
    $("#error_register_name").html("")
    $("#error_register_email").html("")
    $("#error_register_phone").html("")
    $("#error_register_cargo").html("")

    $("#error_register_name").css("display", "none")
    $("#error_register_email").css("display", "none")
    $("#error_register_phone").css("display", "none")
    $("#error_register_cargo").css("display", "none")

    let name = $("#register_name").val()
    let email = $("#register_email").val()
    let phone = $("#register_phone").val()
    let cargo = $("#register_cargo").val()

    if(name == ""){
      $("#error_register_name").css("display", "block")
      $("#error_register_name").html("Nombre y apellido es requerido")
      error = true
    }

    if(email == ""){
      $("#error_register_email").css("display", "block")
      $("#error_register_email").html("Email es requerido")
      error = true
    }

    if(phone == ""){
      $("#error_register_phone").css("display", "block")
      $("#error_register_phone").html("Teléfono es requerido")
      error = true
    }

    if(cargo == ""){
      $("#error_register_cargo").css("display", "block")
      $("#error_register_cargo").html("Cargo es requerido")
      error = true
    }

    if(error){

      return

    }

    $("#register_button").css("display", "none")
    $("#register_spinner").css("display", "block")

    $.post("{{ url('/register/user') }}", {
      "email": email,
      "name": name,
      "phone": phone,
      "cargo": cargo,
      "_token": "{{ csrf_token() }}"
    }, function(data) {

      $("#register_button").css("display", "block")
      $("#register_spinner").css("display", "none")

      $("#register_name").val("")
      $("#register_email").val("")
      $("#register_phone").val("")
      $("#register_cargo").val("")

      swal({
          icon: "success",
          text: data.msg
      })

    })

  }


  function registerProspect(){

    let error = false
    $("#error_prospect_name").html("")
    $("#error_prospect_email").html("")
    $("#error_prospect_phone").html("")
    $("#error_prospect_cargo").html("")
    $("#error_prospect_question").html("")

    $("#error_prospect_name").css("display", "none")
    $("#error_prospect_email").css("display", "none")
    $("#error_prospect_phone").css("display", "none")
    $("#error_prospect_cargo").css("display", "none")
    $("#error_prospect_question").css("display", "none")

    let name = $("#prospect_name").val()
    let email = $("#prospect_email").val()
    let phone = $("#prospect_phone").val()
    let cargo = $("#prospect_cargo").val()
    let question = $("#prospect_question").val()

    if(name == ""){
      $("#error_prospect_name").css("display", "block")
      $("#error_prospect_name").html("Nombre y apellido es requerido")
      error = true
    }

    if(email == ""){
      $("#error_prospect_email").css("display", "block")
      $("#error_prospect_email").html("Email es requerido")
      error = true
    }

    if(phone == ""){
      $("#error_prospect_phone").css("display", "block")
      $("#error_prospect_phone").html("Teléfono es requerido")
      error = true
    }

    if(cargo == ""){
      $("#error_prospect_cargo").css("display", "block")
      $("#error_prospect_cargo").html("Cargo es requerido")
      error = true
    }

    if(question == ""){
      $("#error_prospect_question").css("display", "block")
      $("#error_prospect_question").html("Texto es requerido")
      error = true
    }

    if(error){

      return

    }

    $("#prospect_button").css("display", "none")
    $("#prospect_spinner").css("display", "block")

    $.post("{{ url('/prospect/user') }}", {
      "email": email,
      "name": name,
      "phone": phone,
      "cargo": cargo,
      "question": question,
      "_token": "{{ csrf_token() }}"
    }, function(data) {

      $("#prospect_button").css("display", "block")
      $("#prospect_spinner").css("display", "none")

      $("#prospect_name").val("")
      $("#prospect_name").val("")
      $("#prospect_email").val("")
      $("#prospect_phone").val("")
      $("#prospect_cargo").val("")
      $("#prospect_question").val("")

      swal({
          icon: "success",
          text: data.msg
      })

    })

  }

</script>