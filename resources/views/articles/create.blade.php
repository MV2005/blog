@extends('partials.layout')

@section('content')

    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
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
                        @error('body')
                        <span class="label-text-alt text-error">{{$message}}</span>
                        @enderror
                        <textarea name="body" class="textarea textarea-bordered " placeholder="Content here"></textarea>
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Tags</span>
                            </label>
                            <select multiple class="select select-bordered" name="tags[]">
                                @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach

                            </select>
                        @error('tags.*')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="image" >
                            <span class="label-image">Image</span>
                            @error('images.*')
                            <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </label>
                        <input name="images[]" type="file" multiple placeholder="Article image" class="file-input input-bordered w-full @error('images') input-error @enderror  " accept="image/*"/>
                        <br>
                        <div>
                           
                        </div>
                        <br>
                        <h1> Kui spicy </h1>
                        <input name="rating-4" type="text" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror "/>

                          
                        <div class="form-control w-full">
                        <label class="hind" >
                            <span class="label-text">Hind</span>
                        </label>

                        <input name="hind" type="text" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror "/>

                        
                    </div>
                        
                        <br>
                        <select class="select select-bordered w-full max-w-xs">
                        <option disabled selected>Kas on vegan</option>
                        <option>Vegan</option>
                        <option>Pole vegan</option>

                    </select>
                    </div>
                    <input type="submit" value="Create" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection


