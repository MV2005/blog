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
                        <input name="title" type="text" placeholder="Burgeri nimi" class="input input-bordered w-full @error('title') input-error @enderror "/>


                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Burgeri  kirjeldus</span>
                        </label>
                        @error('body')
                        <span class="label-text-alt text-error">{{$message}}</span>
                        @enderror
                        <textarea name="body" class="textarea textarea-bordered " placeholder="Burgeri kirjeldus"></textarea>
                    </div>

                    <br>
                    <div class="form-control w-full">
                        <label class="image" >
                            <span class="label-image">Pilt burgerist</span>
                            @error('images.*')
                            <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </label>
                        <input name="images[]" type="file" multiple placeholder="Article image"
                               class="file-input input-bordered w-full @error('images') input-error @enderror  " accept="image/*"/>
                        <br>
                        <div>

                        </div>
                        <br>
                        <h1> Kui spicy </h1>
                        <input name="rating" type="number" placeholder="Sisesta number kui spicy"
                               class="input input-bordered @error('title') input-error @enderror "/>

                        <br>
                        <div class="form-control w-half">
                        <label class="hind" >
                            <span class="label-text">Hind</span>
                        </label>

                        <input name="hind" type="text" placeholder="Burgeri hind"
                               class="input input-bordered  @error('title') input-error @enderror "/>

                    </div>
                    <br>

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Vegan</span>
                            </label>
                            <input type="hidden" name="vegan" value="0"/>
                            <input type="checkbox" class="checkbox" name="vegan"/>
                        </div>
                        </select>
                       <br>

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Taimetoitlasele</span>
                            </label>
                            <input type="hidden" name="taim" value="0"/>
                            <input type="checkbox" class="checkbox" name="taim"/>
                        </div>
                        </select>
                       <br>

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Gluteenivaba</span>
                            </label>
                            <input type="hidden" name="glu" value="0"/>
                            <input type="checkbox" class="checkbox" name="glu"/>
                        </div>

                        </select>
                        <br>
                    </div>
                    <input type="submit" value="ESITA" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection


