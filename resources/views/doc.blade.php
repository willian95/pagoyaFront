@extends("layouts.main")

@section("content")

@include("partials.header")

<section class="pt10 bg-gray">
  <div class="row">
    <div class="col-md-3">
      <div class="menu-doc pl4">
        <h5 class="titles-doc"><strong>Docs</strong></h5>
        <ul>
          @foreach(App\Models\Category::orderBy("order")->get() as $category)
          <li>
            <a href="{{ url('/doc/category/'.$category->slug)  }}">{{ $category->name }}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-md-9 ">
      <div class="doc-content">

        @if(strpos(url()->current(), "category") > -1)
        
        <?php $hasData = false; ?>
        @foreach(
            App\Models\Doc::whereHas("category", function($q) use($category_slug){
              $q->where("slug", $category_slug);
            })->get() as $doc
          )

          @if(strlen($doc->description) > 0)
          <?php $hasData = true; ?>
          @endif

        @endforeach
          
          @if($hasData == true)
        <div class="row">
          <div class="col-12">
            <a target="_blank" href="{{ url('/doc/download/'.$category_slug) }}"> Descargar </a>
          </div>
        </div>
        @endif

          @foreach(
            App\Models\Doc::whereHas("category", function($q) use($category_slug){
              $q->where("slug", $category_slug);
            })->get() as $doc
          )

            <h3>{{ $doc->title }}</h3>

            {!! $doc->description !!}

          @endforeach

        @else

        <div class="row">
          <div class="col-12">
            @php
              $category_slug = "";

              $category_model = App\Models\Category::where("order", 1)->first();


            @endphp

            @if($category_model)
              @if($category_model->slug)
              <a target="_blank" href="{{ url('/doc/download/'.$category_model->slug) }}"> Descargar </a>
              @endif
            @endif

          </div>
        </div>

          @foreach(
            App\Models\Doc::whereHas("category", function($q){
              $q->where("order", 1);
            })->orderBy('order', "asc")->get() as $doc
          )

            <h3>{{ $doc->title }}</h3>

            {!! $doc->description !!}

          @endforeach



        @endif

      </div>

    </div>


  </div>
</section>




<style>
    .doc-content a{
        color: #3a596e;
    }
    .main-banner_shape{
        display:none!important;
    }
  .txt-blue {
    color: #0e3752 !important;
  }

  .container-menu #menuBtn span {
    background: #0f3d5b;

  }

  .btn-contact {
    display: none !important;
  }

  .slogan {
    display: none;
  }

  .fill-white {
    fill: #0f3d5b;
  }

  .hover-ws:hover p {

    z-index: 1;
    border: 1px solid #1a7cb4;
  }

  .container-menu #menuBtn {

    top: 4%;

  }

  .menu-options {

    left: auto;
    top: auto;
    right: 1rem;
    bottom: 1rem;
  }

  .main-nav .navbar-brand {
    width: 130px;
    margin-left: 5rem;
  }


</style>

@include("partials.footer")
@endsection
