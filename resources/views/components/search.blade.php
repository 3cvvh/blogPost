            <form action="" method="GET" class="max-w-md mx-auto mb-8">
                <div class="flex rounded-lg shadow bg-white overflow-hidden">
                    <input 
                        type="text" 
                        name="search" 
                        value="{{ request('search') }}" 
                        class="w-full px-4 py-2 outline-none text-gray-700"
                        placeholder="Cari judul atau penulis..." autocomplete="off">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 hover:bg-blue-600 transition">Cari</button>
                </div>
            </form>