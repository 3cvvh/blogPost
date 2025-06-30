<x-luhur>{{ $judul }}</x-luhur>
<x-navbar></x-navbar>
<h1>author: {{ $judul }}</h1>
@foreach ($data as $author => $data )
    <ul>
        <a class="hover:underline" href="/single/{{ $data->slug }}"><li>{{ $data->judul }}</li></a>
    </ul>
@endforeach

