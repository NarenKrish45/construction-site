@extends('layouts.app')
@section('title','Contact Us')

@section('content')
<div class="container mx-auto px-6">
    <h1 class="text-3xl font-bold mb-8 text-center">Get in Touch</h1>

    <form action="/contact" method="POST" class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Message</label>
            <textarea name="message" class="w-full border rounded px-3 py-2" rows="5" required></textarea>
        </div>
        <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            Send Message
        </button>
    </form>
</div>
@endsection
