@extends('layouts.app')

@section('title', $post->title.' | Lesson 2')


@section('content')
    <section class="px-2 py-32 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <h2 class="text-xl font-normal border-b mb-5 pb-5">{{$post->title}}</h2>
            <p><strong>{{ __('Author:') }} {{$post->author}}</strong></p>
            <p><strong>{{ __('Tags:') }} {{$post->tag}}</strong></p>
            <p class="mb-8">{{$post->body}}</p>
        </div>
    </section>
@endsection