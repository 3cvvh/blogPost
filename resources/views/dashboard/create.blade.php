@extends('dashboard.main')
@section('container')
<h1>create post</h1>
<form action="/dashboard/blogs" method="post">
    @csrf
    <input name="author_id" type="hidden" value="{{ auth()->user()->id }}">
    <label for="judul">judul:</label>
    <input value="{{ old('judul') }}" type="text" name="judul"><br>
    @error('judul')
        <h1>{{ $message }}</h1>
    @enderror
  <select name="cate_id" id="">
    @foreach ( $cate as $cate )
    <option value="{{ $cate->id }}">{{ $cate->name }}</option>     
    @endforeach
  </select><br>
    @error('judul')
        <h1>{{ $message }}</h1>
    @enderror
    <label for="isi">isi:</label><br>
   <textarea name="isi" id="" cols="30" rows="10"   >  
    {{ old('isi') }}  
</textarea><br>
    @error('isi')
        <h1>{{ $message }}</h1>
    @enderror
    <button type="submit" name="submit">kirim</button>
</form>
@endsection