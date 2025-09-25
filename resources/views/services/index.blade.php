@extends('layouts.app')
@section('title','Services')

@section('content')
<div class="container mx-auto px-6">
    <h1 class="text-3xl font-bold mb-8 text-center">What We Offer</h1>
    <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <li class="bg-white p-6 rounded-lg shadow">🏠 Residential Building</li>
        <li class="bg-white p-6 rounded-lg shadow">🏢 Commercial Projects</li>
        <li class="bg-white p-6 rounded-lg shadow">🏭 Industrial Construction</li>
        <li class="bg-white p-6 rounded-lg shadow">🔧 Renovation & Remodeling</li>
        <li class="bg-white p-6 rounded-lg shadow">🎨 Interior Design</li>
        <li class="bg-white p-6 rounded-lg shadow">🌉 Infrastructure Projects</li>
    </ul>
</div>
@endsection
