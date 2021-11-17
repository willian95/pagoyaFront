@extends("layouts.main")

@section("content")

@include("partials.header")
<div class="">
  <div class="row">
    <div class="col-md-1">
    

    </div>
    <div class="col-md-11">
      <div class="container">
        <div class="team">
          <img class="img-team" src="https://images.unsplash.com/photo-1571715268998-d6e79bed5fc9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="">

          <div class="text-center" >
            <p class="somos">Somos la nueva pasarela de pagos en
              Colombia, nuestro principal reto es que a
              través de nuestra experiencia y nuestro
              mejor servicio podamos ayudar al crecimiento
              de nuestros clientes.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="team-cert_content">
    <div class="container">
      <div class="row team-cert">
        <div class="col-md-6 flex-custom align-items-end">
          <img class="img-logo-team" src="assets/img/original.jpeg" alt="">
        </div>
        <div class="col-md-6 flex-custom pr-15">
          <p>Descarga o consulta nuestro

          </p>
          <p class="mb-3"> Certificado PCI Nivel 1!</p>
          <a href="" class="btn-custom">Descargar</a>
        </div>
      </div>
    </div>
  </div>


</div>
<section class="valores container">
  <div class="row">
    <div class="col-md-6">
      <img class="valores-img" src="https://image.freepik.com/foto-gratis/grupo-personas-trabajando-plan-negocios-oficina_1303-15861.jpg" alt="">
    </div>
    <div class="col-md-6 center-justify">
      <div class="valores-header">
        <img src="assets/img/iconos/mision (2).png" alt="">
        <h3>Misión</h3>
      </div>
      <p>En PagoYa nuestra Visión es en dos Visión
        años ser la principal pasarela de
        pagos en Colombia y que nos recuerden
        por la construcción en equipo por ser
        aliados de nuestros clientes que
        garantice un servicio personalizado eficaz y eficiente, apoyando en el
        crecimiento con las soluciones de
        pagos que requieren en su modelo de
        negocio, facilitando los procesos con
        herramientas para el estudio y el
        crecimiento de sus ventas.</p>
    </div>
  </div>
  <div class="row mt-5 pt-5">

    <div class="col-md-6 center-justify">
      <div class="valores-header">
        <img src="assets/img/iconos/idea (2).png" alt="">
        <h3>Visión</h3>
      </div>
      <p>Vincular, procesar y orientar a
        nuestros clientes en las
        soluciones de pago para su
        negocio, con modelos anti
        fraude y certificaciones que
        garanticen una mejor cobertura
        en sus transacciones y
        experiencia de usuario.
      </p>
    </div>
    <div class="col-md-6">
      <img class="valores-img" src="https://img.freepik.com/foto-gratis/manos-sosteniendo-concepto-resolucion-problemas-negocios-rompecabezas_53876-129544.jpg?size=626&ext=jpg" alt="">
    </div>
  </div>

  
</section>

<style>
  .txt-blue{
    color: #0e3752!important;
  }
.container-menu #menuBtn span {
    background: #0f3d5b;

}
.btn-contact{
  display: none!important;
}
.slogan{
  display: none;
}
.fill-white{
  fill:#0f3d5b;
}
.hover-ws:hover p {

z-index: 1;
border: 1px solid #1a7cb4;
}
</style>


@endsection