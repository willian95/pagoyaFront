<img style="width: 150px;" src="{{ url('/assets/img/logos/logo.svg') }}" alt="">


@foreach(
    App\Models\Doc::whereHas("category", function($q) use($category_slug){
        $q->where("slug", $category_slug);
    })->get() as $doc
    )

    <h3>{{ $doc->title }}</h3>

    {!! $doc->description !!}

    @endforeach
    