<li><a href="/">Avaleht</a></li>

@auth
<li>
    <details>
        <summary>
            Admin
        </summary>
    <ul class="p-2 z-20 bg-base-100">
        <li><a href="{{route('articles.index')}}">Lisa burgereid</a></li>
    </ul>
    </details>
</li>
@endauth
