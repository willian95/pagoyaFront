@extends("layouts.main")

@section("content")


@include("partials.header")

<section class="banner-content">
  <div class="">

    @if(App\Models\Header::first()->type == 'image')

      <img src="{{ App\Models\Header::first()->image }}" alt="" class="w-100">

    @else

      {{--<video loop muted autoplay fullscreen class="fullscreen-bg__video" poster="https://images.unsplash.com/photo-1571715268998-d6e79bed5fc9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80">
        <source src="https://patriciax.github.io/aidacaceres/assets/img/banner1.mp4" type="video/mp4">
      </video>--}}

      <video loop muted autoplay fullscreen class="fullscreen-bg__video">
      <source src="{{ App\Models\Header::first()->image }}#t=0.1" type="video/mp4">
    </video>

    @endif

    

</section>



<section class="clients">
  <div class="slider">
    <div class="slide-track">
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
      </div>
    </div>
  </div>

</section>

<section class="product">
  <h3 data-aos="fade-up"
     data-aos-duration="3000" class="title mb-5 shape-title">Nuestros productos en acci??n</h3>
  <div class="row mt-5 pt-5">
    <div class="col-md-6 heigth">
      <ul id="app" class="shape-bottom" data-aos="fade-up"
     data-aos-duration="3000">
        <li id="credit-card" data-state="out" >
          <div class="card credit">
            <img src="http://imgfz.com/i/4hwgrxi.png">
          </div>
        </li>
        <li id="birthday-card" data-state="in">
          <div class="card birthday">
            <img src="http://imgfz.com/i/dRENlDk.png">

          </div>
        </li>
        <li id="playing-card" data-state="show">
          <div class="card playing">
            <img src="http://imgfz.com/i/Ca2kR4H.png">

          </div>
        </li>
      </ul>
      <div class="txt-card">
        <p>Aceptamos todas las
          tarjetas! </p>
        <p class="txt-style"> Animate! Sin
          limites!</p>

      </div>

      <div class="" data-aos="fade-right"
     data-aos-offset="300">
        <img src="http://imgfz.com/i/u6pqzyj.png" alt="">
      </div>
    </div>
    <div class="col-md-6"  data-aos="fade-left"   data-aos-duration="3000">
      <img class="gif-2" src="assets/img/test (1).gif" alt="">
    </div>

  </div>
</section>

<section class="actions container" id="soluciones">
  <div class="row">
    <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" >
      <div class="card-item">
        <div class="item-img">
          <img src="assets/img/iconos/pagar.png" alt="">
        </div>
        <h3>BOTON DE PAGOS</h3>
        <p>Soluci??n que tendr??s la opci??n
          de integrar en tu cms con un
          componente de acuerdo al
          lenguaje de programaci??n.</p>
      </div>
    </div>
    <div class="col-md-3"  data-aos="fade-up" data-aos-duration="1500">
      <div class="card-item">
        <div class="item-img blue-bg">
          <img class="card-item-img1" src="assets/img/iconos/link (1).png" alt="">
        </div>
        <h3>LINK DE PAGOS</h3>
        <p>Una URL que tendr??s la opci??n
          de crear y poner en diferentes
          sitios o redes sociales como
          WhatsApp/Instagram/otros y
          recaudar las ventas de uno o varios productos.</p>
      </div>
    </div>
    <div class="col-md-3"  data-aos="fade-up" data-aos-duration="2000">
      <div class="card-item">
        <div class="item-img">
          <img class="card-item-img2" src="assets/img/iconos/api (1).png" alt="">
        </div>
        <h3>INTEGRACI??N
          API REST</h3>
        <p>La integraci??n API Rest, te
          brind?? la opci??n mas practica y
          sencilla desde cualquier
          carrito de compras, con
          personalizaci??n y mayor dominio.</p>
      </div>
    </div>
    <div class="col-md-3"  data-aos="fade-up" data-aos-duration="2500">
      <div class="card-item">
        <div class="item-img blue-bg">
          <img class="card-item-img2" src="assets/img/iconos/mapa-del-sitio.png" alt="">
        </div>
        <h3>MICROSITIOS DE
          RECAUDO</h3>
        <p>Es como un mini sitio con un
          formulario de datos y proceso
          para pagar, se desarrolla en
          base a plantillas y de acuerdo
          a requerimientos de los
          comercios.</p>
      </div>
    </div>
  </div>

</section>


<section class="certificacion">
  <div class="container">
    <div class="row">
      <div class="col-md-6 flex-custom" data-aos="fade-left"   data-aos-duration="3000">
        <p>Certificaci??n

        </p>
        <p> PCI Nivel 1</p>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6" data-aos="fade-left"   data-aos-duration="1500">
            <img src="assets/img/logos/Logo-GM1st-New_50years.png" alt="">
          </div>
          <div class="col-md-6" data-aos="fade-left"   data-aos-duration="2000">
            <img style="  width: 100px;" src="assets/img/original.jpeg" alt="">
          </div>
          <div class="col-md-6" data-aos="fade-left"   data-aos-duration="2500">
            <img style="    width: 100px;" src="assets/img/original.jpeg" alt="">
          </div>
          <div class="col-md-6" data-aos="fade-left"   data-aos-duration="3000">
            <img src="assets/img/logos/Logo-GM1st-New_50years.png" alt="">
          </div>

        </div>
      </div>
    </div>
  </div>

</section>

<section class="tarifas ">
  <h3 data-aos="fade-up"
     data-aos-duration="3000" class="title mb-5 ">Tarifas</h3>

  <div class="row">
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
      <div class="tarifas-item pb-4">
        <div class="trarifas-img">
          <img src="https://image.freepik.com/foto-gratis/chica-joven-gerente-cambiando-cartel-cerrado-abierto-cafeteria-puerta-mirando-afuera-esperando-clientes-despues-cierre_7861-3174.jpg" alt="">

          <img class="vector-tarifas" src="assets/img/Vector.svg" alt="">
        </div>
        <div class="tarifas-content">
        <h3>Peque??as empresas</h3>
        <p>
          Tarifas est??ndar
          <strong> 3.4% + 700 pesos ( +IVA)</strong>
          Aplica para todos los
          medios de pago

          T??rminos y condiciones
        </p>
        </div>

        <div class="text-center">
          <a href="" class="btn-info" data-toggle="modal" data-target=".contact-modal">Cont??ctanos</a>
        </div>
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
      <div class="tarifas-item pb-4">
        <div class="trarifas-img">
          <img src="https://image.freepik.com/foto-gratis/grupo-personas-trabajando-plan-negocios-oficina_1303-15870.jpg" alt="">
          <img class="vector-tarifas" src="assets/img/Vector.svg" alt="">
        </div>
        <div class="tarifas-content">
        <h3>Empresas que facturen m??s
          de 50 millones de pesos
          mensuales</h3>
        <p>

          Tarifas de acuerdo al
          modelo de negocio.
          Cont??ctanos para mayor
          informaci??n.
        </p>
        </div>

        <div class="text-center">
          <a href="" class="btn-info" data-toggle="modal" data-target=".contact-modal">Cont??ctanos</a>
        </div>
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="3000">
      <div class="tarifas-item pb-4">
        <div class="trarifas-img">
          <img src="https://img.freepik.com/foto-gratis/retrato-mujer-trabajadora-servicio-al-cliente_144627-37943.jpg?size=338&ext=jpg" alt="">
          <img class="vector-tarifas" src="assets/img/Vector.svg" alt="">
        </div>

       <div class="tarifas-content">
       <h3>Modelo Gateway</h3>
        <p>
          Modelo en el que el dinero llega directamente
          a la cuenta del comercio,
          en este caso brindamos
          asesor??a y costos de
          acuerdo al modelo de
          negocio.
        </p>
       </div>
        <div class="text-center mt-">
          <a href="" class="btn-info" data-toggle="modal" data-target=".contact-modal">Cont??ctanos</a>
        </div>
      </div>
    </div>
  </div>

</section>

<section class="banco container">
  <div class="row">
    <div class="col-md-4 flex-custom" data-aos="fade-up" data-aos-duration="1000">
      <p class="txt-banco">Tambien contamos
      </p>
      <p class="txt-banco">con PSE</p>
    </div>
    <div class="col-md-4 flex-custom" data-aos="fade-up" data-aos-duration="1200">
      <img class="logo-pse" src="assets/img/logos/logo-pse.png" alt="">
    </div>
    <div class="col-md-4 flex-custom"data-aos="fade-up" data-aos-duration="1500">
      <img class="logo-bcolombia" src="assets/img/logos/boton baancolombia.png" alt="">
    </div>
    <div class="col-md-4 flex-custom" data-aos="fade-up" data-aos-duration="2000">
      <img class="logo-bogota" src="assets/img/logos/Banco_de_Bogot??_logo.svg.png" alt="">
    </div>
    <div class="col-md-4 flex-custom" data-aos="fade-up" data-aos-duration="2500">
      <img class="logo-davi" src="assets/img/logos/Davivienda-Logo.png" alt="">
    </div>
    <div class="col-md-4 flex-custom" data-aos="fade-up" data-aos-duration="3000">
      <img class="logo-bbva" src="assets/img/logos/bbva.png" alt="">
    </div>
  </div>
  <div class="text-center mt-3">
    <a href="" class="btn-banco" data-aos="fade-up" data-aos-duration="3000" data-toggle="modal" data-target=".bancos">Consultar lista completa de Bancos (PSE)</a>
  </div>
</section>

<section class="custom-admin  container">
  <div class="row">
    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="2000">
      <img src="assets/img/admin.png" alt="">
    </div>
    <div class="col-md-6 center-justify" data-aos="fade-up" data-aos-duration="3000">
      <p><strong>Acepta <img class="custom-admin-img" src="assets/img/logos/logo.svg" alt="">
        </strong></p>
      <p><strong>y administra f??cil con
        </strong></p>
      <p><strong> nuestro CMS!</strong></p>

      <div class="mt-4">
        <a data-aos="fade-up" data-aos-duration="3000" href="" class="btn-custom" data-toggle="modal" data-target=".contact-modal">Cont??ctanos</a>
      </div>
    </div>
  </div>
</section>

@include("partials.footer")
@endsection
