<x-luhur>{{ $judul }}</x-luhur>
<body class="bg-gradient-to-br from-green-100 to-blue-100 min-h-screen flex flex-col">
    <x-navbar></x-navbar>
    <div class="flex-1 flex items-center justify-center">
        <div class="bg-white rounded-xl shadow-lg p-10 w-full max-w-md text-center">
            <h1 class="text-2xl font-bold text-green-700 mb-6">Kontak</h1>
            <div class="space-y-3">
                <p class="text-lg text-gray-800 font-semibold">Nama: <span class="font-normal">{{ $nama }}</span></p>
                <p class="text-lg text-gray-800 font-semibold">HP: <span class="font-normal">{{ $hp }}</span></p>
                <p class="text-lg text-gray-800 font-semibold">Alamat: <span class="font-normal">{{ $alamat }}</span></p>
            </div>
        </div>
    </div>
<x-handap></x-handap>