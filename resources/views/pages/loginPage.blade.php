<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Libs</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F7F8F9]">
    <div>
        @include('layout.headerLogin')
            <div class="flex flex-row mt-[180px] ml-[100px] justify-center">
                <div class="">
                    <img class="absolute ml-[800px] h-[64px] w-[64px] -mt-[80px]" src="/image/logo atas.png" alt="">
                    <h1 class="font-bold text-[40px] w-[450px] mb-5">Reading is essential for those who seek to rise above the ordinary.</h1>
                    <h3>Possible Goal:</h3>
                    <div class='text-[16px] font-cairo flex flex-col mt-5 mb-[100px]'>
                        <div class='flex flex-row'>
                            <img src="/image/Checkbox.png" class='pr-3 pb-3'></img>
                            <p class=''>Explore a new genre</p>
                        </div>
                        <div class='flex flex-row'>
                            <img src="/image/Checkbox.png" class='pr-3 pb-3'></img>
                            <p class=''>Start and finish each e-book that i choose</p> 
                        </div>
                        <div class='flex flex-row mb-20'>
                            <img src="/image/Checkbox.png" class='pr-3'></i>
                            <p class=''>Pick "just right" books</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row ml-[100px] h-[530px] -mt-[50px] justify-center">
                    <div class="flex flex-col border shadow-sm rounded-lg p-10 ">
                        <div class="flex flex-col items-center">
                            <h1 class="text-[30px] font-bold">Join our libraries</h1>
                            <h3 class="text-[#556987] text-[18px] font-medium items-start">Start your free Trial</h3>
                        </div>
                        <form action="/" method="post">
                            @csrf
                            <div class="flex justify-center flex-col w-full px-[50px]">
                                <label class="mt-8 text-[#333F51]">Email</label>
                                <input name="email" type="text" class="w-full rounded-md shadow-md mt-2 p-3 placeholder:-pl-[600px]" placeholder="Enter your email adress">
                                <label class="mt-8 text-[#333F51]">Password</label>
                                <input name="password" type="password" class="w-full rounded-md shadow-md mt-2 p-3 placeholder:-pl-[600px]" placeholder="Enter your password">
                                <button type="submit" class="bg-[#22C55E] px-[150px] p-3 mt-5 rounded-lg w-full text-white hover:bg-[#1eae53]">Get Started</button>
                                <h4 class="text-center mt-3 text-[12px] text-[#8896AB]">OR</h4>
                                <h4 class="text-center mt-5 text-[14px] font-medium">Doesn't have an account? <span class="text-[#22C55E] hover:text-[#1eae53]"><a href="/register">Sign Up</a></span></h4>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>