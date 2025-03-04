<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    @can('create-posts')
    <div class="m-4 text-right">
        <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Post</a>
    </div>
    @endcan
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($posts as $post)
                        <div class="mb-4 border-b border-gray-200 p-4">
                            <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                            <p class="text-gray-600">{{ $post->content }}</p>
                            <small>By {{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>