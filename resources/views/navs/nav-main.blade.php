{{-- main site navigation generally used in navbar --}}
<nav>
    @foreach (\Naykel\Navit\Models\Menu::where('name', 'main')->first()->links as $link)
        <a href="{{ url( $link->url) }}">{{ $link->name }}</a>
    @endforeach
</nav>