@extends('layouts.app')

@section('content')

<!-- hero -->
    <div class="hero-bg-image flex flex-col items-center justify-center ">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome To My Blog</h1>
        <a class="px-5 py-4 text-gray-700 bg-gray-100 rounded-lg font-bold uppercase text-xl" href="/">Start Reading</a>
    </div>

    <!-- How to -->
    <div class="container sm:grid grid-cols-2 gap-20 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/240/900/600" alt="image" >
        </div>
        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase ">How to be an export in 2023</h2>
            <p class="font-bold text-gray-600 text-xl pt-2">
                You can find a list of all programmin languages here.
            </p>
            <p class="py-4 text-gray-500 text-sm leading-5">
                Get The same random image every time based on a seed, by adding to the start of the url. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam blanditiis nam, incidunt, recusandae ratione, molestiae omnis et voluptate corrupti atque nostrum fuga provident reiciendis. Dolor eum nihil quia officia amet.
            </p>
            <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
        </div>
    </div>

    <!-- Blog Categories -->
    <div class="text-center p-10 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-2xl py-2">Programming</div>
            <div class="font-bold text-2xl py-2">UX Design</div>
            <div class="font-bold text-2xl py-2">Graphic Design</div>
            <div class="font-bold text-2xl py-2">Front-End</div>
        </div>
    </div>

<!-- Recent Posts  -->
<div>

</div>


@endsection
