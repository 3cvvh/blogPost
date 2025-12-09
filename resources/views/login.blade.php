@extends('layouts.main')
@section('content')

@if ($errors->any())
@dd(session()->all())
@foreach ($errors->all() as $error )
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 max-w-md mx-auto" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ $error }}</span>
    </div>
@endforeach
@elseif (session()->has('loginError'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 max-w-md mx-auto" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ session('loginError') }}</span>
    </div>
@endif
<form action="{{ route('login.attempt') }}" method="post">
    @csrf
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 to-purple-100">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-extrabold text-center text-blue-800 mb-6 drop-shadow">Login</h2>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">username</label>
                <input type="text" id="email" name="username" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg shadow hover:bg-blue-600 transition">Login</button>
        </div>
    </div>
</form>
<div>tidak punya akun? <a href="{{ route('sign') }}">register</a></div>
@endsection
