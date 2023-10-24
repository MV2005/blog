@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <div class="card mx-3 bg-base-100 shadow-xl h-full ">
            @if($article->image)
                <figure><img src="{{$article->image}}"/></figure>
            @endif
            <div class="card-body">
                <h2 class="card-title">{{ $article->title }}</h2>
                <p>{{ $article->body }}</p>
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
                                    <span class="label-text">Comment</span>
                                </label>
                                <textarea name="body"
                                          class="textarea textarea-bordered @error('body') textarea-error @enderror"
                                          placeholder="Comment..."></textarea>
                                @error('body')
                                <span class="label-text-alt text-error">{{$message}}</span>
                                @enderror

                            </div>
                            <input type="submit" class="btn btn-secondary mt-2" value="Comment">
                        </form>
                            </div>
            </div>
        </div>
        <h1>Comments:</h1>
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