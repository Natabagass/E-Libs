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
        <div class="grid grid-cols-2 w-full grid-flow-row cursor-pointer px-[140px] flex-row">
        @foreach ($books as $book)
            <a href="/book/{{$book->id}}" class="w-full p-5 mt-[20px] mb-[50px]">
                <div class="px-7 h-[400px] py-[50px] flex font-semibold text-[25px] flex-col rounded-2xl bg-[#D9D9D9]">
                    <h1 class="text-[#2a33429c] w-[500px]">{{$book->title}}</h1>
                    <h3 class="text-[#2a33429c] mt-[50px] w-[300px]">By : <span class="underline">{{$book->author}}</span></h3>
                </div>
            </a>
        @endforeach
        </div>
        <div class="flex justify-end mr-[150px]">
            <a href="/author" class="p-3 text-[16px] flex w-[60px] text-sm font-semibold text-white bg-[#22C55E] rounded-lg border border-green-700 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-400">Back</a>
        </div>
        <img class="absolute" src="/image/bg-wave.png" alt="">
    </div>
</body>
</html>