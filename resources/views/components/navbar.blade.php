<nav class="bg-white shadow mb-8 w-full">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-blue-700">MyBlog</a>
            <div class="flex items-center gap-6">
                <div class="space-x-4">
                    <a href="/" class="font-medium transition px-2 py-1 rounded {{ request()->is('/') ? 'bg-blue-100 text-blue-700 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Home</a>
                    <a href="/post" class="font-medium transition px-2 py-1 rounded {{ request()->is('post') ? 'bg-blue-100 text-blue-700 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Postingan</a>
                    <a href="/cont" class="font-medium transition px-2 py-1 rounded {{ request()->is('cont') ? 'bg-blue-100 text-blue-700 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Kontak</a>
                </div>
                <a href="/login" class="ml-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition font-semibold shadow">Login</a>
            </div>
        </div>
    </nav>