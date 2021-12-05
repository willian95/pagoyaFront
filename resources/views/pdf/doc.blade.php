<img style="width: 150px;" src="{{ public_path().'/assets/img/iso1.png' }}" alt="">
{{ public_path().'/assets/img/logos/logo.svg' }}

@foreach(
    App\Models\Doc::whereHas("category", function($q) use($category_slug){
        $q->where("slug", $category_slug);
    })->get() as $doc
    )

    <h3>{{ $doc->title }}</h3>

    {!! $doc->description !!}

    @endforeach
    