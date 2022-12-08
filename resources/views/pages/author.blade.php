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
    @include('layout.headerRead')
    <div class="bg-[#2A3342]">
        <div class="flex justify-center">
            <div class="flex flex-col w-1/2 mt-[20px]">
                @foreach ($authors as $author)
                    <div class="bg-[#333F51] mt-5 p-3 flex justify-between rounded-xl">
                        <label class="text-white ml-3 font-bold mt-2">{{$author->name}}</label>
                        <a href="/author/{{ $author->id }}" class="p-3 text-[16px] flex flex-row text-sm font-semibold text-white bg-[#22C55E] rounded-lg border border-green-700 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-400">Visit <span><img class="w-[25px] text-center ml-3" src="/image/circledUp.png" alt=""></span></a>
                    </div>                
                @endforeach
            </div>
        </div>
        <div class="flex justify-end mr-[150px]">
            <a href="/postAuthor" class="p-3 text-[16px] flex w-[120px] text-sm font-semibold text-white bg-[#f34040] rounded-lg hover:bg-red-700">Edit Author</a>
        </div>
    </div>
    <img class="absolute" src="/image/bg-wave.png" alt="">
</body>
</html>