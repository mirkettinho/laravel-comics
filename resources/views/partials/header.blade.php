@php
    $navbar = config("navbar-link");
    @dump($navbar)
@endphp


<header class="container">
    <div class="logo">
	    <img src="img/dc-logo.png" alt="Logo DC">
    </div>

    <nav>
        <ul>
        @foreach ($navbar as $key => $item)
            <li>
                <a href="{{route($key)}}">{{$item}}</a>
            </li>

        @endforeach
        </ul>
    </nav>
</header>
