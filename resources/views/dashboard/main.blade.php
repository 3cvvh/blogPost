<x-luhur></x-luhur>
<x-navbar></x-navbar>

<div class="flex">
    <x-sidebar></x-sidebar>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <div class="border-b pb-4 mb-4">
            <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
            <h1>welcome {{ auth()->user()->name }}</h1>
        </div>
        
        <div class="container mx-auto">
            @yield('container')
        </div>
    </div>
</div>

<x-handap></x-handap>