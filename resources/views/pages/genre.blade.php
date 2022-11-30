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
        <div class="flex justify-center ">
            <div class="flex flex-col w-1/2 mt-[100px]">
                <div class="bg-[#333F51] p-3 flex justify-between rounded-xl">
                    <label class="text-white ml-3 font-bold mt-2">Journal</label>
                    <button class="p-3 text-sm font-medium text-white bg-[#22C55E] rounded-lg border border-green-700 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-400">Visit Journal</button>
                </div>
                <div class="bg-[#333F51] mt-5 p-3 flex justify-between rounded-xl">
                    <label class="text-white ml-3 font-bold mt-2">Journal</label>
                    <button class="p-3 text-sm font-medium text-white bg-[#22C55E] rounded-lg border border-green-700 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-400">Visit Journal</button>
                </div>
            </div>
        </div>
    </div>
    <img class="absolute" src="/image/bg-wave.png" alt="">
</body>
</html>