dd($category_slug);
<img src="{{ url('/assets/img/logos/logo.svg') }}" alt="">


    @foreach(
    App\Models\Doc::whereHas("category", function($q){
        $q->where("order", 1);
    })->orderBy('order', "asc")->get() as $doc
    )

    <h3>{{ $doc->title }}</h3>

    {!! $doc->description !!}

    @endforeach
    