<x-app-layout>
    {{-- Hero Section  --}}
    @section('hero')
    <div class="w-full text-center py-32">
        <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
            Welcome to <span class="text-yellow-500">&lt;Livewire&gt;</span> <span class="text-gray-900"> News</span>
        </h1>
        <p class="text-gray-500 text-lg mt-1">Best Blog in the universe</p>
        <a wire:navigate class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block" href="{{ route('posts.index') }}">Start
            Reading</a>
    </div>
    @endsection

    {{-- Main Section  --}}
    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featurePosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card :post="$post" />
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="block text-center">
                <x-nav-link class="mt-10 text-lg text-yellow-500 font-semibold" wire:navigate href="{{ route('posts.index') }}">
                    {{ __('More Posts') }}
                </x-nav-link>
            </div>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                <div class="md:col-span-1 col-span-3">
                    <x-posts.post-card :post="$post" />
                </div>
                @endforeach
            </div>
        </div>

        <div class="block text-center">
            <x-nav-link class="mt-10 text-lg text-yellow-500 font-semibold" wire:navigate href="{{ route('posts.index') }}">
                {{ __('More Posts') }}
            </x-nav-link>
        </div>

    </div>
</x-app-layout>