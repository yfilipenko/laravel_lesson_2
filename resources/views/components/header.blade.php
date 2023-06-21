<header class="w-full px-8 text-gray-700 bg-white">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <div class="relative flex flex-col md:flex-row">
            <a href="#" class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">{{__('Lesson 2')}}</span>
            </a>
            <nav class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                <a href="/" class="{{Request::is('/') ? 'text-red-500 underline' : ''}} mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">{{__('Home')}}</a>
                <a href="/blog" class="{{Request::is('blog') ? 'text-red-500 underline' : ''}} mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">{{__('Blog')}}</a>
                <a href="/about" class="{{Request::is('about') ? 'text-red-500 underline' : ''}} mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">{{__('About')}}</a>
                <a href="/contact" class="{{Request::is('contact') ? 'text-red-500 underline' : ''}} mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">{{__('Contact')}}</a>
            </nav>
        </div>

        <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
            @guest
                @if(Route::has('login'))
                    <a href="{{route('login')}}" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-300 ease-in-out hover:text-gray-900">
                       {{__('Login')}}
                    </a>
                @endif
                @if(Route::has('register'))
                     <a href="{{route('register')}}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-red-500 border border-transparent rounded-md shadow-sm hover:bg-red-700 transition duration-300">
                        {{__('Register')}}
                     </a>
                @endif
            @else
                <a href="{{route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit;"  class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-red-500 border border-transparent rounded-md shadow-sm hover:bg-red-700 transition duration-300">
                    {{__('Logout')}}
                </a>
                <form id="logout-form" method="POST" action="{{route('logout')}}">
                    @csrf

                </form>
            @endguest
        </div>
    </div>
</header>
