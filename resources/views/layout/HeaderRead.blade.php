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
    <img class="mt-2 z-10 relative" src="/image/BG Wave atas.png" alt="logo">
        <div class="bg-[#2A3342]">
            <div class="pb-5 z-50 relative -mt-[5px] flex w-full items-center">
                <div class="flex justify-between w-full mx-[150px]">
                    <img class="h-10" src="/image/Logo-Elibs.png" alt="Logo">
                    <ul class="flex flex-row items-center text-[16px]">
                        <a class="mr-14 cursor-pointer text-[#BBC3CF] hover:text-[#dee3eb]" href="/home">Home</a>
                        <a class="mr-14 cursor-pointer text-[#BBC3CF] hover:text-[#dee3eb]" href="/profile">Profile</a>
                        <a class="mr-14 cursor-pointer text-[#BBC3CF] hover:text-[#dee3eb]" href="/genre">Genre</a>
                    </ul>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="border flex border-[#22C55E] hover:bg-[#1baa4f] px-3 py-2 rounded-xl bg-[#22C55E] text-white">Log Out</button>
                </form>
            </div>
        </div>
</body>
</html>