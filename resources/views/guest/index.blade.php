@extends('layouts.home')
@section('title', 'Home')

@section('guest-content')
    <section id="guest-title">
        <h1>Fashion News</h1>
        <input type="text" name="" value="" placeholder="Search News">
    </section>

    <section id="guest-content">
        <ul class="list-unstyled d-flex">
            <li class="text-capitalize active">all</li>
            <li class="text-capitalize">latest</li>
            <li class="text-capitalize">trending</li>
            <li class="text-capitalize">popular</li>
        </ul>
    </section>

    <section id="guest-news">
        @foreach ($posts as $post)
            <div class="tile">
                <a href=" {{ route('post', ['slug' => $post->slug]) }} ">
                    <h2 class="text-capitalize">{{ $post->title }}</h2>
                    <img src="{{ asset('images/' . $post->cover) }}" alt="{{$post->title}}">
                </a>
            </div>
        @endforeach
    </section>
@endsection
