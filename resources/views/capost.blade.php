<x-luhur>{{ $judul }}</x-luhur>
<x-navbar></x-navbar>
<x-search></x-search>
<h1>{{ $judul }}</h1>
@foreach ( $data as $cate => $data )
    <ul>
        <a class="hover:underline" href="/single/{{ $data->slug }}"><li>{{ $data->judul }}</li></a>
    </ul>
@endforeach