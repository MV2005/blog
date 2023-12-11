@extends('partials.layout')

@section('content')

    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-control w-full">
                        <label class="label" >
                            <span class="label-text">Burgeri nimi</span>
                            @error('title')
                            <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </label>
                        <input name="title" type="text" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror "/>


                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Burgeri sisu</span>
                        </label>
                        @error('body')
                        <span class="label-text-alt text-error">{{$message}}</span>
                        @enderror
                        <textarea name="body" class="textarea textarea-bordered " placeholder="Content here"></textarea>
                    </div>

                    <br>
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
                        <input name="rating" type="number" placeholder="Article Title" class="input input-bordered @error('title') input-error @enderror "/>

                        <br>
                        <div class="form-control w-half">
                        <label class="hind" >
                            <span class="label-text">Hind</span>
                        </label>

                        <input name="hind" type="text" placeholder="Article Title" class="input input-bordered  @error('title') input-error @enderror "/>


                    </div>
                    <br>
                        <h1>Vegan</h1>
                        <input name="vegan" type="text" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror "/>

                        </select>
                    <br>
                        <h1>Taimetoitlasele</h1>
                        <input name="taim" type="text" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror "/>

                        </select>
                    <br>
                        <h1>gluteenivaba</h1>
                        <input name="glu" type="text" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror "/>

                        </select>
                        <br>
                    </div>
                    <input type="submit" value="Create" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection


