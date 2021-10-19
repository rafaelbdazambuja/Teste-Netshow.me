<header class="header float-left w-100" >
    <div class="mt-5 mb-4" >
        <span class="text-primary title" >{{$title}}</span>
        <div class="float-right right-buttons" >
            @isset($right_button)
                @foreach ($right_button as $button)
                    <a href="{{$button['route']}}" class="btn btn-primary px-4">{{$button['title']}}</a>
                @endforeach
            @endisset
            <a href="{{ route('home') }}" class="btn btn-outline-primary px-4">Início</a>
        </div>
    </div>
</header>
@include('partials._messages')