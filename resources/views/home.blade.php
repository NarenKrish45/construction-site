@extends('layouts.app')
@section('title','Home')
@section('content')
<div class="container mx-auto px-6">

    <!-- Hero section -->
    <section class="text-center py-16">
        <h1 class="text-4xl md:text-5xl font-bold text-blue-800">We Build Your Dreams</h1>
        <p class="mt-4 text-lg text-gray-600">Trusted construction company for residential, commercial, and industrial projects.</p>
        <a href="/projects" class="mt-6 inline-block bg-blue-700 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-600">
            View Our Projects
        </a>
    </section>

    <!-- Services -->
    <section class="py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">🏠 Residential</h3>
                <p>Custom home building, renovations, and interior design.</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">🏢 Commercial</h3>
                <p>Office buildings, retail spaces, and corporate complexes.</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold mb-2">🏭 Industrial</h3>
                <p>Factories, warehouses, and large-scale infrastructure projects.</p>
            </div>
        </div>
    </section>

</div>
@endsection