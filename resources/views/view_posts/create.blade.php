<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A New Post') }}
        </h2>
    </x-slot>

    <body>
        @if(session('message'))
            <p><b>{{session('message')}}</b></p>
        @endif
        <h1>Form - @yield('title')</h1>
        @if($errors->any())
            <div>
                Errors:
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            @yield('content')
    </div>
</body>


    <form method="POST" action="{{route('view_posts.store')}}">
        @csrf
        <p>Post Title: <input type="text" name="title"
            value="{{old('title')}}"></p>
        <p>Post Body: <input type="text" name="content"
            value="{{old('content')}}"></p>
        <input type="submit" value="Submit">
        </form>

</x-app-layout>