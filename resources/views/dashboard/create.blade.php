@extends('dashboard.main')
@section('container')
<h1 class="text-2xl font-bold mb-6">Create Post</h1>
<form action="/dashboard/blogs" method="POST" enctype="multipart/form-data" class="space-y-6 max-w-lg">
    @csrf
    <input name="author_id" type="hidden" value="{{ auth()->user()->id }}">

    <div>
        <label for="judul" class="block font-semibold mb-1">Judul</label>
        <input type="text" name="judul" value="{{ old('judul') }}" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        @error('judul')
            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="cate_id" class="block font-semibold mb-1">Kategori</label>
        <select name="cate_id" id="cate_id" class="w-full border border-gray-300 rounded px-4 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-400">
            @foreach ($cate as $cate)
                <option value="{{ $cate->id }}">{{ $cate->name }}</option>     
            @endforeach
        </select>
        @error('cate_id')
            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="gambar" class="block font-semibold mb-1">Cover</label>
        <input type="file" name="gambar" onchange="previewimg()" multiple type="file" id="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
          <img src="" class="img-preview img-fluid" alt="">
    </div>
    @error('gambar')
        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
    @enderror

    <div>
        <label for="isi" class="block font-semibold mb-1">Isi</label>
        <textarea name="isi" id="isi" cols="30" rows="10" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('isi') }}</textarea>
        @error('isi')
            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <button type="submit" name="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-200">Kirim</button>
    </div>
</form>
<script>
    function previewimg() {
        const image = document.querySelector('#file');
        const imgpreview = document.querySelector('.img-preview');

        imgpreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgpreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection

