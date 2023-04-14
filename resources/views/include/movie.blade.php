@extends('layouts.app')
@section('content')
    <div class="movies-info border-b border-gray-100 ">
        <div class="container mx-auto px-4 py-12 flex">
            <img src="{{ url('imgs/img2.jpg') }}" alt="avator" class="w-96">

            <div class="ml-24">
                <h2 class="font-semibold text-2xl text-blue-100">lengend (2021)</h2>
                <div class="flext items-center text-blue-100 hover:text-amber-500">
                    <span><i class="fa fa-star text-amber-400 h-6"></i></span>
                    <span class="ml-1">94%</span>
                    <span class="mx-2">|</span>
                    <span>March 2022</span>

                </div>
                <div class="text text-blue-100 hover:text-amber-500">
                    Adventure, commendy ,Action
                </div>
                <p class="text-gray-200 mt-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolorem explicabo id. Error possimus
                    incidunt est, dolor ex ab similique quibusdam, blanditiis omnis sed fuga quos, odio molestias corrupti
                    quia illo excepturi. Ipsam reprehenderit hic molestias modi cum molestiae numquam doloribus facere
                    corrupti iure. Distinctio exercitationem obcaecati amet consequuntur modi.
                </p>
                <div class="mt-10">
                    <h3 class="text-blue-300 font-semi-bold">Featured cast</h3>
                    <div class="flex ml-4">
                        <div>
                            <div class="text text-gray-100">
                                Bong Joon-ho
                            </div>
                            <div class="text-sm text-gray-100">Screenplay,Director,story</div>
                        </div>
                        <div class="ml-8">
                            <div class="text text-gray-100">Han jin-won</div>
                            <div class="text-sm text-gray-100">screenplay</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button
                        class="flex items-center bg-orange-500 rounded  px-5 py-3 hover:bg-sky-900 transition ease-in-out duration-150">
                        <i class="fa fa-play"><span class="px-2 text text-gray-100 font-semibold text-xl">play
                                trailer</span></i>
                    </button>
                </div>
            </div>
        </div>

    </div>
@endsection
