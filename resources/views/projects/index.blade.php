@extends('layouts.app')
@section('title','Projects')

@section('content')
<div class="container mx-auto px-6">
    <h1 class="text-3xl font-bold mb-8 text-center">Our Projects</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Example static project card -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <img src="https://via.placeholder.com/400x250" alt="Project 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold">Luxury Villa</h2>
                <p class="text-sm text-gray-600">Residential construction in Chennai.</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <img src="https://via.placeholder.com/400x250" alt="Project 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold">Corporate Office</h2>
                <p class="text-sm text-gray-600">Modern commercial office space in Bengaluru.</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <img src="https://via.placeholder.com/400x250" alt="Project 3" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold">Industrial Factory</h2>
                <p class="text-sm text-gray-600">Manufacturing plant in Hyderabad.</p>
            </div>
        </div>

        <div>
            <h1>Hiii Anbu</h1>
        </div>
    </div>
</div>
@endsection