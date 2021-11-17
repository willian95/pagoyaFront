@extends("layouts.main")

@section("content")

@include("partials.header")
<div class="timeline-wrap" >
  <ul class="timeline timeline--first">
  
    <li class="entry entry--left">
      <div class="link-modal" data-toggle="modal" data-target=".blog-modal">

      <div class="entry__content">
      <h2 class="titulo">Titulo del articulo</h2>
      <div class="time-icons">
        <img src="assets/img/iconos/calendar.png" alt="">
        <p>27/1/0/2021</p>
      </div>
        <img src="https://images.unsplash.com/photo-1571715268998-d6e79bed5fc9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="">
  
      </div>
      </div>
     
    </li>
    <li class="entry entry--right">
    <div class="link-modal" data-toggle="modal" data-target=".blog-modal">
      <div class="entry__content">
      <h2  class="titulo">Titulo del articulo</h2>
      <div class="time-icons">
        <img src="assets/img/iconos/calendar.png" alt="">
        <p>27/1/0/2021</p>
      </div>
      <img src="https://images.unsplash.com/photo-1571715268998-d6e79bed5fc9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="">

       
      </div>
      </div>
    </li>
    <li class="entry entry--left">
    <div class="link-modal" data-toggle="modal" data-target=".blog-modal">
      <div class="entry__content">
      <h2  class="titulo">Titulo del articulo</h2>
      <div class="time-icons">
        <img src="assets/img/iconos/calendar.png" alt="">
        <p>27/1/0/2021</p>
      </div>
      <img src="https://images.unsplash.com/photo-1571715268998-d6e79bed5fc9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="">

     
      </div>
      </div>
    </li>
  </ul>
</div>

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

@include("partials.footer")
@endsection