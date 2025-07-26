@extends('dashboard.main')
@section('container')
@if (session('berhasil'))
    <h1>{{ session('berhasil') }}</h1>
@endif
@if (session('deleted'))
    <h1>{{ session('deleted') }}</h1>
@endif
@if (session('edited'))
    <h1>{{ session('edited') }}</h1>
@endif
@if (session('sotau'))
    <h1>{{ session('sotau') }}</h1>
@endif
<div class="p-4 sm:p-6">
    <div class="flex justify-between items-center mb-5">
        <h2 class="text-xl font-semibold text-gray-800">My Posts</h2>
        <a href="/dashboard/blogs/create" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 inline-flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Create Post
        </a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left">
            <thead class="text-xs text-white uppercase bg-gray-800">
                <tr>
                    <th scope="col" class="px-4 py-3 w-16 text-center">No</th>
                    <th scope="col" class="px-4 py-3">Judul</th>
                    <th scope="col" class="px-4 py-3">Category</th>
                    <th scope="col" class="px-4 py-3">Isi</th>
                    <th scope="col" class="px-4 py-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $post)
                <tr class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-50' }} border-b hover:bg-gray-100 transition-colors duration-200">
                    <td class="px-4 py-3 text-center">{{ $index + 1 }}</td>
                    <td class="px-4 py-3 font-medium text-gray-900">{{ $post->judul }}</td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">
                            {{ $post->cate->name }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-gray-500">{{ Str::limit($post->isi, 50) }}</td>
                    <td class="px-4 py-3">
                        <div class="flex justify-center space-x-2">
                            <a href="/dashboard/blogs/{{ $post->id }}" class="inline-flex items-center p-1.5 text-sm text-white bg-blue-500 rounded hover:bg-blue-600" title="View">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </a>
                            <a href="/dashboard/blogs/{{ $post->id }}\edit" class="inline-flex items-center p-1.5 text-sm text-white bg-yellow-500 rounded hover:bg-yellow-600" title="Edit">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            <form action="/dashboard/blogs/{{ $post->id }}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="inline-flex items-center p-1.5 text-sm text-white bg-red-500 rounded hover:bg-red-600" 
                                    onclick="return confirm('Are you sure you want to delete this post?')" title="Delete">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection