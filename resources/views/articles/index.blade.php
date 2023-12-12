@extends('partials.layout')

@section('content')
<div class="container mx-auto">
    <a class="btn btn-primary" href="{{route('articles.create')}}" method="POST">LISA UUS BURGER</a>
    <a class="btn btn-secondary" href="{{route('articles.deleted')}}" method="POST">KUSTUTA BURGER</a>
    {{$articles->links()}}
    <table class="table">
        <thead>

        <th>Id</th>
        <th>Burgeri nimi</th>
        <th>Hind</th>
        <th>vegan</th>
        <th>taimetoitlased</th>
        <th>gluteenivaba</th>
        <th>spicy</th>
        <th>loodud</th>
        <th>uuendatud</th>
        <th>tegevused</th>

        </thead>
        <tbody>

        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{ $article->hind }}$</td>
                <td>@if($article->vegan > 0) ✔️ @else ❎ @endif</td>
               <td>@if($article->taim > 0) ✔️ @else ❎ @endif</td>
                <td>@if($article->glu > 0) ✔️ @else ❎ @endif</td>
                <td>{{ $article->rating }}</td>
                <td>{{$article->created_at}}</td>
                <td>{{$article->updated_at}}</td>

                <td>
                    <div class="join">
                        <a href="{{route('public.article', ['article' => $article])}}" class="btn btn-info join-item">Vaata</a>
                        <a href="{{route('articles.edit', ['article' => $article])}}" class="btn btn-warning join-item">Muuda</a>
                        <input type="submit" class="btn btn-error join-item" value="Kustuta" form="delete-{{$article->id}}">

                    </div>

                    <form id="delete-{{$article->id}}" action="{{route('articles.destroy', ['article' => $article])}}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection
