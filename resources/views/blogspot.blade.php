<x-luhur>{{ $judul }}</x-luhur>
<body class="bg-gradient-to-br from-blue-100 to-purple-100 min-h-screen flex flex-col">
<x-navbar></x-navbar>
    <main class="flex-1">
        <div class="container mx-auto py-8">
            <h1 class="text-5xl font-extrabold text-center text-blue-800 mb-10 drop-shadow">{{ $judul }}</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ( $data as $post )
                    <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-shadow border-t-4 border-blue-400 flex flex-col">
                        <h2 class="text-2xl font-bold text-blue-700 mb-2">{{ $post['judul'] }}</h2>
                        <h3 class="text-base text-gray-500 mb-4 italic">By {{ $post['author'] }}</h3>
                        <p class="text-gray-700 leading-relaxed flex-1 mb-4">{{ $post['isi'] }}</p>
                        <div class="mt-auto flex justify-end">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">Baca Selengkapnya</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer class="bg-white shadow mt-12 py-4">
        <div class="container mx-auto text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} MyBlog. All rights reserved.
        </div>
    </footer>
<x-handap></x-handap>