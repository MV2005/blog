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
        <th>loodud</th>
        <th>uuendatud</th>
        <th>tegevused</th>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->created_at}}</td>
                <td>{{$article->updated_at}}</td>
                <td>
                    <div class="join">
                        <button class="btn btn-info join-item">View</button>
                        <a href="{{route('articles.edit', ['article' => $article])}}" class="btn btn-warning join-item">Edit</a>
                        <input type="submit" class="btn btn-error join-item" value="Delete" form="delete-{{$article->id}}">
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
