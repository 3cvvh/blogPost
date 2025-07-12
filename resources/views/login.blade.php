<x-luhur>{{ $judul }}</x-luhur>
<x-navbar></x-navbar>
@if (session('berhasil'))
    <h1>berhasil menambahkan akun</h1>
@endif
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-blue-100 via-blue-200 to-blue-400 dark:from-blue-900 dark:via-blue-800 dark:to-blue-700 py-8">
    <div class="w-full max-w-md bg-white/80 dark:bg-blue-900/70 rounded-2xl shadow-2xl backdrop-blur-md p-8 border border-blue-200 dark:border-blue-800">
        <div class="flex flex-col items-center mb-6">
            <div class="bg-blue-600 text-white rounded-full p-3 shadow-lg mb-2">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </div>
            <h2 class="text-3xl font-extrabold text-blue-700 dark:text-blue-100 mb-1">Selamat Datang</h2>
            <p class="text-blue-500 dark:text-blue-200 text-sm">Silakan login untuk melanjutkan</p>
        </div>
        <form method="POST" action="">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-blue-700 dark:text-blue-200 mb-2 font-semibold">Email</label>
                <input id="email" type="email" name="email" required autofocus class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-blue-900 dark:text-white dark:border-blue-700 transition" placeholder="you@email.com"/>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-blue-700 dark:text-blue-200 mb-2 font-semibold">Password</label>
                <input id="password" type="password" name="password" required class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-blue-900 dark:text-white dark:border-blue-700 transition" placeholder="********"/>
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition shadow-lg">Login</button>
        </form>
        <div class="mt-6 text-center">
            <a href="#" class="text-blue-500 hover:underline text-sm">Lupa password?</a>
        </div>
        <div class="mt-2 text-center">
            <span class="text-sm text-blue-700 dark:text-blue-200">Belum punya akun?</span>
            <a href="/sign" class="text-blue-600 hover:underline font-semibold text-sm ml-1">Registrasi</a>
        </div>
    </div>
</div>

<x-handap></x-handap>