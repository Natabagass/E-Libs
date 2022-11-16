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
    <div class="bg-[#2A3342] fixed w-full top-0 z-50">
        <div class="py-5 flex w-full items-center">
            <div class="flex justify-evenly w-full">
                <img class="h-10" src="/image/Logo-Elibs.png" alt="Logo">
                <ul class="flex flex-row items-center text-[16px] font-Poppins">
                    <a class="mr-14 cursor-pointer text-[#BBC3CF] hover:text-[#dee3eb]" href="/profile">Profile</a>
                    <a class="mr-14 cursor-pointer text-[#BBC3CF] hover:text-[#dee3eb]" href="/genre">Genre</a>
                    <a class="mr-14 cursor-pointer text-[#BBC3CF] hover:text-[#dee3eb]" href="/information">Information</a>
                    <a class="mr-14 cursor-pointer text-[#BBC3CF] hover:text-[#dee3eb]" href="/resources">Resources</a>
                </ul>
                <div>
                    <a class="text-[#BBC3CF] hover:text-[#dee3eb] mr-6 cursor-pointer">Log In</a>
                    <a class="border border-[#22C55E] hover:bg-[#1baa4f] px-3 py-2 rounded-xl bg-[#22C55E] text-white">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>