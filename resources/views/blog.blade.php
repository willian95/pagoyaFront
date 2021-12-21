@extends("layouts.main")

@section("content")

@include("partials.header")
<div class="timeline-wrap" >
  <ul class="timeline timeline--first">

    @foreach(App\Models\Blog::all() as $blog)
    <li class="entry entry--left">
      <div class="link-modal" data-toggle="modal" data-target=".blog-modal-{{ $blog->id }}">

      <div class="entry__content">
      <h2 class="titulo">{{ $blog->title }}</h2>
      <div class="time-icons">
        <img src="{{ url('assets/img/iconos/calendar.png') }}" alt="">
        <p>{{ $blog->created_at->format('d/m/Y') }}</p>
      </div>

        <img src="{{ $blog->image }}" alt="">

      </div>
      </div>

    </li>

    <!-- blog--->
    <div class="modal fade blog-modal-{{ $blog->id }} " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body pt-5 pb-4">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="row">

              <div class="col-md-12">
                <h3 class="title pb-0 pt-0">{{ $blog->title }}</h3>
                <div class="time-icons ml-0">
                  <img src="assets/img/iconos/calendar.png" alt="">
                  <p>{{ $blog->created_at->format('d/m/Y') }}</p>
                </div>
                <img class="img-blog" src="{{ $blog->image }}" alt="">

                <div class="parraf">{!! $blog->description !!}</div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    @endforeach
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
