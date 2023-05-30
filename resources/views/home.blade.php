@extends('master')

@section('title', 'Home')
@section('content')
<div class="m-auto">
    <div id="highlight-book" class="flex justify-center py-[1vw]">
        @foreach ($views as $view)
            <a href="/detail/{{ $view->Book->id }}">
                <div class="flex relative items-center gap-10">
                    <img src="{{ $view->Book->image }}" alt="">
                    <div class="">
                        <h1 class="absolute border-b-2 border-b-black w-fit top-[1vw] font-bold">IT REALLY COUNTS</h1>
                        <h1 class="font-bold text-[2vw]">{{ $view->Book->title }}</h1>
                        <p class="font-semibold text-[1.2vw]">{{ $view->Book->description }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div id="highlight-book" class="justify-center">
        <h1 class="border-b-2 border-b-black w-fit mx-[2vw] mb-[2vw] pt-[1vw] font-bold">LATEST BOOK REVIEWS</h1>
        <div class="grid grid-cols-4 gap-6 w-[90%] m-auto pb-[1vw]">
            @foreach ($dates as $dt)
                <a href="/detail/{{ $dt->Book->id }}">
                    <div class="flex flex-col justify-content-center">
                        <img src="{{ $dt->Book->image }}" alt="">
                        <div class="">
                            <h1 class="font-bold">{{ $dt->Book->title }}</h1>
                            <p>{{ $dt->Book->description }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div id="highlight-book" class="justify-center">
        <h1 class="border-b-2 border-b-black w-fit mx-[2vw] mb-[2vw] pt-[1vw] font-bold">Book Series Review</h1>
        <div class="grid grid-cols-3 gap-4 w-[90%] m-auto">
            @foreach ($books as $book)
                <div class="flex flex-col justify-content-center">
                    <img src="{{ $book->image }}" alt="">
                    <div class="bg-gray-200 px-[0.5vw] h-[8vw] relative">
                        <h1>{{ $book->title }}</h1>
                        <a href="/detail/{{ $book->id }}" class="absolute bottom-[0.5vw]">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 m-[1vw] focus:outline-none">Read post</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
