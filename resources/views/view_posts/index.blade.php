

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .card_content{
            padding:12px;
        }
    </style>

<div class="py-12">
    <!--For every post in my database!-->
    @forelse($posts as $post)
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="card mb-4 box-shadow">
            <div class="main_card">
                <p class="card_content">{{ $post->user['name'] }} : 
                {{ $post->title }}</p>
                <div class="show_view_button">
                        <a href="/view_posts/{{ $post->id }}" class="btn-outline-secondary">View</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @empty
        <p>No Posts Currently</p>
    @endforelse
</div>
</x-app-layout>
