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
        <div class="py-5 box-border flex justify-around w-full items-center">
        <img class="h-10" src="/image/Logo-Elibs.png" alt="Logo">
            <div class="flex justify-around">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="border flex border-[#22C55E] hover:bg-[#1baa4f] px-3 py-2 rounded-xl bg-[#22C55E] text-white">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>