@extends('partials.layout')

@section('content')

    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{route('articles.update', ['article' => $article])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-control w-full">
                        <label class="label" >
                            <span class="label-text">Title</span>
                            @error('title')
                            <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </label>
                        <input name="title" type="text" value="{{$article->title}}" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror "/>

                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Content</span>
                        </label>
                        <textarea name="body" class="textarea textarea-bordered " placeholder="Content here">{{$article->body}}</textarea>
                    </div>
                    <input type="submit" value="Update" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>


@endsection


