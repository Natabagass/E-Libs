<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Libs</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layout.HeaderRead')
    <div class="bg-[#2A3342]">
        <div class="flex justify-center">
            <div class="flex flex-col w-1/2 mt-[20px]">
            <form class="flex items-center ml-[100px] mb-[50px] justify-center">   
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative -ml-[100px]">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 dark:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="simple-search" class="bg-[#BBC3CF]  w-[370px] placeholder:text-white border border-gray-300 text-white text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5">
                </div>
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-[#22C55E] rounded-lg border border-green-700 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-400">
                    Search
                    <span class="sr-only">Search</span>
                </button>
            </form>
                @foreach ($categories as $category)
                    <div class="bg-[#333F51] mt-5 p-3 flex justify-between rounded-xl">
                        <label class="text-white ml-3 font-bold mt-2">{{$category->name}}</label>
                        <a href="/genre/{{ $category->id }}" class="p-3 text-[16px] flex flex-row text-sm font-semibold text-white bg-[#22C55E] rounded-lg border border-green-700 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-400">Visit <span><img class="w-[25px] text-center ml-3" src="/image/circledUp.png" alt=""></span></a>
                    </div>                
                @endforeach
            </div>
        </div>
    </div>
    <img class="absolute" src="/image/bg-wave.png" alt="">
</body>
</html>