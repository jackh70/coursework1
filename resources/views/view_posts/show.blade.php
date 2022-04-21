<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View A Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <b class="post_title">Post</b>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a><b>Creator</b>: {{$posts->user['name'] }}</a>
                    <br>
                    <a><b>Content</b>: {{$posts->content}}</a>  
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <b><a href="{{route('create_comments.create')}}" class="comments_title">Comment</a></b>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @foreach($posts->comments as $comm)
                    <b>{{$comm->user['name']}}</b>
                    <a>: {{$comm->content}}</a>
                    <br>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>