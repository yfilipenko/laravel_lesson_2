@extends('layouts.app')

@section('title', 'Home | Lesson 2')


@section('content')
    <div class="flex min-h-96 my-12 mx-12">
        <x-sidebar />
			
		<main class="mx-10 my-12">
				<div class="flex border-b mb-5 pb-5 justify-between items-center">
					<h2 class="text-xl font-normal">{{ __('All Posts') }}</h2>
					<a href="/dashboard/posts/create" class="bg-red-500 hover:bg-red-500 text-white px-6 py-2 rounded-lg">{{ __('Create') }}</a>
				</div>
				<ul>
                    @foreach($posts as $post)
                        <li class="flex justify-between items-center border	rounded-lg px-5 py-5 mb-5">
                            <div>
                                <h2 class="text-2xl mb-2 text-gray-700"><a class="hover:text-red-600 hover:underline" href="/dashboard/posts/{{$post->id}}">{{$post->title}}</a></h2>
                                <p class="text-gray-500">{{$post->body}}</p>
                            </div>
                            <div class="flex">
                                <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/posts/{{$post->id}}">{{ __('Show') }}</a>
                                <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/dashboard/posts/{{$post->id}}/edit">{{ __('Edit') }}</a>
                                <form method="POST" action="/dashboard/posts/{{$post->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 underline">{{ __('Delete') }}</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
				</ul>
		</main>
	</div>
@endsection