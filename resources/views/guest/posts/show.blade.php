@extends('layouts.home')
@section('title', $post->title)

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

    <section id="post">
        <div class="head-post">
            <h1 class="text-capitalize">{{ $post->title }}</h1>
            <div>
                <span>{{ $date->format('Y-m-d') }} - </span>
                <i class="fad fa-book-reader"></i>
                {{ $post->readable_time . "min" }}
            </div>
        </div>
        <span class="author">..writed by {{ $post->author }}.</span>
        <p> {{ $post->content }} </p>
    </section>
@endsection
