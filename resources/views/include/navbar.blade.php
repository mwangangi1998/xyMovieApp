<div class="bg-gray-900 text-white font-sans ">
    <div>
        <nav class="border-b border-gray-400 ">
            <div class="container mx-auto flex justify-between px-6 py-4">
                <ul class="flex flex-col md:flex-row items-center ">
                    <li class=" md:ml-8 mt-3 md:mt-0">
                        <a href="/" class="font-bold text-amber-400">{{ config('app.name') }}</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0 ">
                        <a href="{{ url('movies') }}">Movies</a>
                    </li>
                    <li class="md:ml-6  mt-3 md:mt-0">
                        <a href="{{ url('tvshows') }}">Tv shows</a>
                    </li>
                    <li class="md:ml-6  mt-3 md:mt-0">
                        <a href="{{ url('actors') }}">Actors</a>
                    </li>

               {{--  --}}
            <li class=" ">
                <div class="flex items-center flex-col md:flex-row  ">
                    <div class="relative md:ml-64 mt-3 md:mt-0">

                        <input type="text"
                            class="text-white w-56 text-center bg-gray-500 fous:outline-none focus:shadow-outline rounded-full px-2 py-1 "
                            placeholder=" search" name="" id="">
                        <div class="top-0 absolute p-2 px-4">
                            <i class="fa fa-search  "></i>
                        </div>

                    </div>
                    <div class="md:ml-4 mt-3 md:mt-o">
                        <a href="">
                            <img src="{{ url('imgs/img1.jpg') }}" alt="" class="w-8 h-8 rounded-full">
                        </a>
                    </div>
            </li>
                </div>
            </ul>
            </div>
        </nav>
    </div>
</div>
