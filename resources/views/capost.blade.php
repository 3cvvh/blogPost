<x-luhur>{{ $judul }}</x-luhur>
<x-navbar></x-navbar>
@foreach ( $data as $cate => $data )
    <ul>
        <a class="hover:underline" href="/single/{{ $data->slug }}"><li>{{ $data->judul }}</li></a>
    </ul>
@endforeach