@extends('partials.layout')

@section('content')

    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{route('articles.store')}}" method="POST">
                    @csrf
                    <div class="form-control w-full">
                        <label class="label" >
                            <span class="label-text">Title</span>
                            @error('title')
                            <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </label>
                        <input name="title" type="text" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror "/>

                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Content</span>
                        </label>
                        <textarea name="body" class="textarea textarea-bordered " placeholder="Content here"></textarea>
                    </div>
                    <input type="submit" value="Create" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>


@endsection


