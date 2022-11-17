<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>E-Libs</title>
</head>
<body>
    @include('layout.header')
    <div class="bg-[#2A3342] pt-24 pb-[100px]">
            <form class="flex items-center justify-center">   
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
        <div class="pt-20 flex px-[250px] text-white font-Poppins">
            <div class="flex font-bold flex-col w-1/2">
                <h1 class="text-[60px]">E-libs</h1>
                <h4 class="text-[30px]">ELECTRONIC LIBRARIES</h4>
                <h6 class="mt-16 mb-[150px] font-medium text-[15px] text-[#BBC3CF]">"The more that you read, the more thinks you will know.<br/> The more that you learn, the more place<br/> that you'll go"</h6>
                <div class="font-medium cursor-pointer">
                    <a class="mr-5 p-3 rounded-lg bg-[#22C55E] hover:bg-[#1baa4f]">Request a Demo</a>
                    <a class="bg-[#404F65] hover:bg-[#a1a7b1] p-3 rounded-lg" href="/login">Sign Up</a>
                </div>
            </div>
            <div class="flex flex-row justify-end">
                <img class="h-32 -ml-[450px] -mt-[50px] absolute z-10" src="/image/Frame 14.png" alt="logo">
                <img class="h-[464px] w-[554px]" src="/image/Image Container.png" alt="">
                <img class="absolute h-[90px] mt-[400px] ml-[30px] w-[148px]" src="/image/dekor bawah.png" alt="dekor bawah">
            </div>
        </div>
    </div>
    <img class="" src="/image/bg-wave.png" alt="">
</body>
</html>