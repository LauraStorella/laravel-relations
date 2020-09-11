<h1>Lista Album</h1>

<div>
  <ul>
    @foreach ($albums as $album)
  <li>Titolo: {{ $album->title }}
    <a href="{{route('albums.show', $album) }}">Mostra Album</a>
  </li>
    @endforeach
  </ul>
</div>