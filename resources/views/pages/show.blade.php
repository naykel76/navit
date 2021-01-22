{{-- display page passed from request --}}

@extends('gotime::layouts.app')

@section('content')

<article>

    @if($page->show_title)
        <h1 class="title">{{ $page->title }}</h1>
    @endif

    {{-- @isset($page->image_path)
        <img style="float:right;" id="img_output" src="{{ asset('storage/' . $page->image_path)  }}" alt="{{ $page->title }}">
    @endisset --}}

    {!! $page->body !!}

</article>

@endsection