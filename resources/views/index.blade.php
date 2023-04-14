@extends('layouts.app')
@section('content')
    <div class="container mx-auto p-4">
        <div class="popular-movies">
            <h2 class="text-lg capitalize font-bold text-amber-200">popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img src="{{ url('imgs/img1.jpg') }}" alt="" class="hover:opacity 0.75 transition ease-in-out duration-150 ">
                    </a>
                    <div class="caption mt-2 hover:text-gray-100 text-lg ">
                        <a href="" class="text-white hover:text-amber-500">Movie name</a>
                        <div class="flext items-center text-blue-100 hover:text-amber-500">
                            <span><i class="fa fa-star text-amber-400 h-6"></i></span>
                            <span class="ml-1">94%</span>
                            <span class="mx-2">|</span>
                            <span>March 2022</span>
                        </div>
                        <div class="text text-blue-100 hover:text-amber-500">
                            Adventure, commendy ,Action
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="{{ url('imgs/img3.jpg') }}" alt="" class="hover:opacity 0.75 transition ease-in-out duration-150 ">
                    </a>
                    <div class="caption mt-2 hover:text-gray-100 text-lg ">
                        <a href="" class="text-white hover:text-amber-500">Movie name</a>
                        <div class="flext items-center text-blue-100 hover:text-amber-500">
                            <span><i class="fa fa-star text-amber-400 h-6"></i></span>
                            <span class="ml-1">94%</span>
                            <span class="mx-2">|</span>
                            <span>March 2022</span>
                        </div>
                        <div class="text text-blue-100 hover:text-amber-500">
                            Adventure, commendy ,Action
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="{{ url('imgs/img3.jpg') }}" alt="" class="hover:opacity 0.75 transition ease-in-out duration-150 ">
                    </a>
                    <div class="caption mt-2 hover:text-gray-100 text-lg ">
                        <a href="" class="text-white hover:text-amber-500">Movie name</a>
                        <div class="flext items-center text-blue-100 hover:text-amber-500">
                            <span><i class="fa fa-star text-amber-400 h-6"></i></span>
                            <span class="ml-1">94%</span>
                            <span class="mx-2">|</span>
                            <span>March 2022</span>
                        </div>
                        <div class="text text-blue-100 hover:text-amber-500">
                            Adventure, commendy ,Action
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="">
                        <img src="{{ url('imgs/img1.jpg') }}" alt="" class="hover:opacity 0.75 transition ease-in-out duration-150 ">
                    </a>
                    <div class="caption mt-2 hover:text-gray-100 text-lg ">
                        <a href="" class="text-white hover:text-amber-500">Movie name</a>
                        <div class="flext items-center text-blue-100 hover:text-amber-500">
                            <span><i class="fa fa-star text-amber-400 h-6"></i></span>
                            <span class="ml-1">94%</span>
                            <span class="mx-2">|</span>
                            <span>March 2022</span>
                        </div>
                        <div class="text text-blue-100 hover:text-amber-500">
                            Adventure, commendy ,Action
                        </div>
                    </div>
                </div>
            </div>
            <div class="gid grid-cols-4">
<div class="mt-8">
    <h2 class="text-lg capitalize font-bold text-amber-200">trending movies and series</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4 gap-8">
        <div class="mt-8">
            <a href="">
                <img src="{{ url('imgs/img1.jpg') }}" alt="" class="hover:opacity .75 transition ease-in-out duration-150 ">
            </a>
            <div class="caption mt-2 hover:text-gray-100 text-lg ">
                <a href="" class="text-white hover:text-amber-500">Movie name</a>
                <div class="flext items-center text-blue-100 hover:text-amber-500">
                    <span><i class="fa fa-star text-amber-400 h-6"></i></span>
                    <span class="ml-1">94%</span>
                    <span class="mx-2">|</span>
                    <span>March 2022</span>
                </div>
                <div class="text text-blue-100 hover:text-amber-500">
                    Adventure, commendy ,Action
                </div>
            </div>
        </div>
        <div class="mt-8">
            <a href="">
                <img src="{{ url('imgs/img3.jpg') }}" alt="" class="hover:opacity .50 transition ease-in-out duration-150 ">
            </a>
            <div class="caption mt-2 hover:text-gray-100 text-lg ">
                <a href="" class="text-white hover:text-amber-500">Movie name</a>
                <div class="flext items-center text-blue-100 hover:text-amber-500">
                    <span><i class="fa fa-star text-amber-400 h-6"></i></span>
                    <span class="ml-1">94%</span>
                    <span class="mx-2">|</span>
                    <span>March 2022</span>
                </div>
                <div class="text text-blue-100 hover:text-amber-500">
                    Adventure, commendy ,Action
                </div>
            </div>
        </div>
        <div class="mt-8">
            <a href="">
                <img src="{{ url('imgs/img3.jpg') }}" alt="" class="hover:opacity .50 transition ease-in-out duration-150 ">
            </a>
            <div class="caption mt-2 hover:text-gray-100 text-lg ">
                <a href="" class="text-white hover:text-amber-500">Movie name</a>
                <div class="flext items-center text-blue-100 hover:text-amber-500">
                    <span><i class="fa fa-star text-amber-400 h-6"></i></span>
                    <span class="ml-1">94%</span>
                    <span class="mx-2">|</span>
                    <span>March 2022</span>
                </div>
                <div class="text text-blue-100 hover:text-amber-500">
                    Adventure, commendy ,Action
                </div>
            </div>
        </div>

        <div class="mt-8">
            <a href="">
                <img src="{{ url('imgs/img1.jpg') }}" alt="" class="hoveopacity .50 transition ease-in-out duration-150 ">
            </a>
            <div class="caption mt-2 hover:text-gray-100 text-lg ">
                <a href="" class="text-white hover:text-amber-500">Movie name</a>
                <div class="flext items-center text-blue-100 hover:text-amber-500">
                    <span><i class="fa fa-star text-amber-400 h-6"></i></span>
                    <span class="ml-1">94%</span>
                    <span class="mx-2">|</span>
                    <span>March 2022</span>
                </div>
                <div class="text text-blue-100 hover:text-amber-500">
                    Adventure, commendy ,Action
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
@endsection
