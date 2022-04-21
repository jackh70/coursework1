<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A New Post') }}
        </h2>
    </x-slot>
    <style>
        div.wrap {
            position:  absolute;
            top : 200px;
            left: 600px;
            width: 300px;
            height:300px;
            border:1px solid black;
            margin : 0px;
            text-align:center;
        }

        input[type="text"] {
             position: relative;
             display: block;
             margin : 0 auto;
        }

        input[type="file"] {
             position: absolute;
             display: block;
             margin : 0 auto;
             left: 55px;
             bottom: 120px;
        }

        input[type="submit"] {
            position:  absolute;
            background-color: #ADD8E6;
            padding: 16px 32px;
            left: 90px;
            bottom: 40px;
        }
        

    </style>

    <body>
        @if(session('message'))
            <p><b>{{session('message')}}</b></p>
        @endif
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
        <div class='wrap'>
        <p>Post Title: <input type="text" name="title" class="block mt-1 w-half"
            value="{{old('title')}}"></p>
        <p>Post Body: <input type="text" name="content"
            value="{{old('content')}}"></p>
        <input type="file" value="file">
        <input type="submit" value="Submit">
            </div>
        </form>

</x-app-layout>