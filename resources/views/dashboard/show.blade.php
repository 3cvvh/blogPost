@extends('dashboard.main')
@section('container')
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $data->judul }}</h2>
            @if (isset($data->gambar))
                <img src="{{ asset('storage/' . $data->gambar) }}" alt="">
            @else
                <img src="https://ui-avatars.com/api/?name={{ $data->judul }}"
            @endif
            
            <div class="flex space-x-4 mb-6">
                <a href="/dashboard/blogs" class="inline-flex items-center px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Back to blogs
                </a>
                <a href="/dashboard/blogs/{{ $data->slug }}/edit" class="inline-flex items-center px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    Edit
                </a>
                <form action="/dashboard/blogs/{{ $data->slug }}" method="post" class="inline">
                    @method('delete')
                    @csrf
                    <button type="button" onclick="confirmDelete(this)" class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        Delete
                    </button>
                </form>
            </div>

            <div class="flex items-center space-x-4 text-sm text-gray-600 mb-6">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                    {{ $data->cate->name }}
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    {{ $data->author->name }}
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    {{ $data->created_at->diffForHumans() }}
                </div>
            </div>

            <article class="prose prose-lg max-w-none">
                {!! $data->isi !!}
            </article>
        </div>
    </div>
</div>

<script>
function confirmDelete(button) {
    if (confirm('Are you sure you want to delete this post?')) {
        button.closest('form').submit();
    }
}

// Add smooth scroll to top
document.addEventListener('DOMContentLoaded', function() {
    const scrollButton = document.createElement('button');
    scrollButton.innerHTML = '↑';
    scrollButton.className = 'fixed bottom-8 right-8 bg-gray-800 text-white w-10 h-10 rounded-full opacity-0 transition-opacity duration-200 hover:bg-gray-700 focus:outline-none';
    document.body.appendChild(scrollButton);

    window.addEventListener('scroll', () => {
        scrollButton.style.opacity = window.scrollY > 300 ? '1' : '0';
    });

    scrollButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
</script>
@endsection