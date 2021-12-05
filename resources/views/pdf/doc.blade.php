<img src="{{ url('/assets/img/logos/logo.svg') }}" alt="">

@if(strpos(url()->current(), "category") > -1)

    @foreach(
    App\Models\Doc::whereHas("category", function($q) use($category_slug){
        $q->where("slug", $category_slug);
    })->get() as $doc
    )

    <h3>{{ $doc->title }}</h3>

    {!! $doc->description !!}

    @endforeach

@else

    @foreach(
    App\Models\Doc::whereHas("category", function($q){
        $q->where("order", 1);
    })->orderBy('order', "asc")->get() as $doc
    )

    <h3>{{ $doc->title }}</h3>

    {!! $doc->description !!}

    @endforeach
    


@endif