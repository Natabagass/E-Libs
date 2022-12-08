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
    <div>
        @foreach ($books as $book)
            <div class="ml-[160px] mt-[60px] h-[550px] flex flex-col text-white">
                <h1 class="text-[48px] w-[1000px] font-bold">{{$book->title}}</h1>
                <h4 class="font-light mt-[20px] text-[20px]">By : {{$book->author}}</h4>
                <div class="flex flex-row my-[30px]">
                    <h1 class="text-[20px] font-semibold">Book Details</h1>
                    <h1 class="text-[20px] ml-[250px] font-semibold">Description</h1>
                </div>
                <div class="border-box mb-[210px]">
                    <h1 class="text-[20px] font-semibold">Book ID</h1>
                    <h3 class="mt-3">{{$book->id}}</h3>
                    <h1 class="text-[20px] mt-7 font-semibold">Category ID</h1>
                    <h3 class="mt-3">{{$book->category_id}}</h3>
                    <h1 class="text-[20px] mt-7 mb-7 font-semibold">Book Link</h1>
                    <a class="bg-[#22C55E] p-3 rounded-xl" target="blank" href="{{$book->link}}">Read Book</a>
                    <div class="flex justify-end mr-[150px]">
                        <a href="/genre/{{ $book->category_id }}" class="p-3 text-[16px] flex w-[60px] text-sm font-semibold text-white bg-[#22C55E] rounded-lg border border-green-700 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-400">Back</a>
                    </div>
                </div>
                <h3 class="w-[600px] ml-[365px] mb-[150px] -mt-[550px] font-light">{{$book->description}}</h3>
            </div>
        @endforeach
        <img class="absolute" src="/image/bg-wave.png" alt="">
    </div>
</body>
</html>