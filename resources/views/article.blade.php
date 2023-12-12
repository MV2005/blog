@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <div class="card mx-3 bg-base-100 shadow-xl h-full ">
            @if($article->image->count() === 1)
                <figure><img src="{{$article->image->path}}"/></figure>
            @elseif($article->images->count() > 1)
                <div class="h-96 carousel carousel-vertical rounded-box">
                    @foreach($article->images as $image)
                        <div class="carousel-item h-full">
                            <img src="{{$image->path}}" />
                        </div>
                    @endforeach
                </div>
            @endif




            <div class="card-body">

                <h2 class="card-title">{{ $article->title }}</h2>
                <p>{{ $article->body }}</p>
                <div class="stat-desc"><b>💵Hind: </b>{{ $article->hind }}</div>
                <div class="stat-desc"><b>🌶️Spice: </b>{{ $article->rating }}</div>
                <div class="stat-desc"><b>🍃Vegan: </b>@if($article->vegan > 0) ✔️ @else ❎ @endif</div>
                <div class="stat-desc"><b>🍪Gluteeinivaba: </b>@if($article->glu > 0) ✔️ @else ❎ @endif</div>
                <div class="stat-desc"><b>🍃Taimetoitlasele: </b>@if($article->taim > 0) ✔️ @else ❎ @endif</div>

                <div class="stat">
                    <div class="stat-desc">{{ $article->user->name}}</div>
                    <div class="stat-desc">{{ $article->created_at->diffForHumans() }}</div>
                </div>

                <div class="container mx-auto">
                    <div class="card mx-3 bg-base-100 shadow-xl h-full ">
                        <div class="card-body">
                        <form action="{{route('comments.store', ['article' => $article])}}" method="POST">
                        @csrf

                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Komentaarid</span>
                                </label>
                                <textarea name="body"
                                          class="textarea textarea-bordered @error('body') textarea-error @enderror"
                                          placeholder="Komentaar..."></textarea>
                                @error('body')
                                <span class="label-text-alt text-error">{{$message}}</span>
                                @enderror

                            </div>
                            <input type="submit" class="btn btn-secondary mt-2" value="Komenteeri">
                        </form>
                            </div>
            </div>
        </div>
        <h1>Komentaar:</h1>
        @foreach($article->comments()->latest()->get() as $comment)
        <div class="card mx-3 bg-base-100 shadow-xl h-full ">

            <div class="card-body">
                <p>{{ $comment->body }}</p>
                <div class="stat">
                    <div class="stat-desc">{{ $comment->user->name}}</div>
                    <div class="stat-desc">{{ $comment->created_at->diffForHumans() }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
