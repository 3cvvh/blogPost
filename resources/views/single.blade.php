<x-luhur></x-luhur>
<x-navbar></x-navbar>
<div class="flex flex-col min-h-screen bg-gradient-to-br from-blue-50 to-purple-100">
    <main class="flex-grow flex items-stretch">
        <div class="w-full max-w-lg mx-auto h-full flex">
            <div class="bg-white rounded-2xl shadow-2xl p-8 border border-blue-100 flex flex-col w-full">
                <div class="mb-2 flex items-center justify-between">
                    <span class="text-xs text-gray-400 italic"> {{ $data->created_at->diffForHumans() }}</span>
                   <a class="hover:underline" href="/cate_blog/{{ $data->cate->slug }}"><span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-blue-700/10 ring-inset">{{ $data->cate->name }}</span></a>
                </div>
                <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $data['judul'] }}</h1>
               <a class="hover:underline" href="/author/{{ $data->author->email }}"><h2 class="text-base font-semibold text-blue-600 mb-4">{{ $data->author->name }}</h2></a>
                <p class="text-gray-700 leading-relaxed flex-grow">{{ $data['isi'] }}</p>
            </div>
        </div>
    </main>
    <footer class="w-full mt-8">
        <x-handap />
    </footer>
</div>