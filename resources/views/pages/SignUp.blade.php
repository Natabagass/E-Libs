<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>E-Libs</title>
</head>
<body>
    <div class="flex flex-row">
        <img class="h-screen" src="/image/card.png" alt="">
        <form action="/register" method="POST">
            @csrf
            <div class="flex p-[100px] flex-col">
                <h1 class="font-bold text-[24px]">Register</h1>
                <h4 class="font-normal w-[500px] text-[16px] mt-3">Let's get all you set up so you can verify your personal account and login setting up your profile</h4>
                <hr class="mt-5 w-[700px]">
                <div class="flex flex-row">
                    <div class="flex flex-col mt-5">
                        <label class="text-[#333F51] font-bold">First Name</label>
                        <input type="text" name="first_name" class="w-[300px] border rounded-md shadow-md mt-2 p-3 placeholder:-pl-[600px]" placeholder="Enter your first name">
                        <label class="text-[#333F51] font-bold mt-5">Phone Number</label>
                        <input type="number" name="phone" class="w-[300px] border rounded-md shadow-md mt-2 p-3 placeholder:-pl-[600px]" placeholder="Enter your phone number">
                        <label class="text-[#333F51] font-bold mt-5">Password</label>
                        <input type="password" name="password" class="w-[300px] border rounded-md shadow-md mt-2 p-3 placeholder:-pl-[600px]" placeholder="Enter your password">
                    </div>
                    <div class="flex flex-col mt-5 ml-[100px]">
                        <label class="text-[#333F51] font-bold">Last Name</label>
                        <input type="text" name="last_name" class="w-[300px] border rounded-md shadow-md mt-2 p-3 placeholder:-pl-[600px]" placeholder="Enter your last name">
                        <label class="text-[#333F51] font-bold mt-5">Email</label>
                        <input type="text" name="email" class="w-[300px] border rounded-md shadow-md mt-2 p-3 placeholder:-pl-[600px]" placeholder="Enter your email">
                        <label class="text-[#333F51] font-bold mt-5">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="w-[300px] border rounded-md shadow-md mt-2 p-3 placeholder:-pl-[600px]" placeholder="Enter your password">
                    </div>
                </div>
                <div>
                    <button type="submit" class="bg-[#22C55E] mt-[20px] mb-3 text-white p-3 rounded-lg ">Create Account</button>
                    <h4 class="text-[14px] font-medium">Already have an account? <span class="text-[#22C55E] hover:text-[#1eae53]"><a href="/">Log In</a></span></h4>
                </div>
            </div>
        </form>
    </div>
</body>
</html>