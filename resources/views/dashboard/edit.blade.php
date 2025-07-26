@extends('dashboard.main')
@section('container')
<h1>create post</h1>
<form action="/dashboard/blogs/{{ $data->id }}" method="post">
    @csrf
    @method('put')
    <input name="author_id" type="hidden" value="{{ auth()->user()->id }}">
    <label for="judul">judul:</label>
    <input value="{{ old('judul',$data->judul) }}" type="text" name="judul"><br>
    @error('judul')
        <h1>{{ $message }}</h1>
    @enderror
  <select name="cate_id" id="">
    @foreach ( $cate as $cate )
    @if ($cate->id == old('cate_id',$data->cate_id) )
        <option value="{{ $cate->id }}" selected>{{ $cate->name }}</option>  
    @else
        <option value="{{ $cate->id }}">{{ $cate->name }}</option>  
    @endif
    @endforeach
  </select><br>
    @error('judul')
        <h1>{{ $message }}</h1>
    @enderror
    <label for="isi">isi:</label><br>
   <textarea name="isi" id="" cols="30" rows="10"   >  
    {{ old('isi',$data->isi) }}  
</textarea><br>
    @error('isi')
        <h1>{{ $message }}</h1>
    @enderror
    <button type="submit" name="submit">kirim</button>
</form>
@endsection