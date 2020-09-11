<h1>Dettaglio Album</h1>

<div>
  <img src="{{ $album->url }}" alt="{{ $album->title }}"> 
  <p><strong>Titolo:</strong> {{ $album->title }}</p>
  <p><strong>Anno:</strong> {{ $album->year }}</p>
</div>

<h2>Elenco brani</h2>
<div>
  @foreach ($album->songs as $song)
    <ul>
      <li>{{ $song->title}} | <strong>Genere:</strong> {{ $song->genre}} </li>
    </ul>
  @endforeach
</div>