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
        <h1 class="text-[36px] pt-[20px] justify-center font-bold flex text-white">PROFILE</h1>
        <form action="{{ route( 'pages.profile.update') }}" method="POST">
            @method('patch')
            @csrf
            <div class="flex flex-row justify-center">
                <div class="flex flex-col">
                    <label class="text-white mt-[45px] font-bold">First Name</label>
                    <label class="text-white mt-[45px] font-bold">Last Name</label>
                    <label class="text-white font-bold mt-[50px]">Phone Number</label>
                </div>
                <div class="flex flex-col mx-[100px]">
                    <input type="text" name="first_name" class="border rounded-md mt-8 p-2" value="{{ old('first_name', $user->first_name) }}">
                    <input type="text" name="last_name" class="w-[300px] border rounded-md shadow-md mt-8 p-2" value="{{ old('last_name', $user->last_name) }}">
                    <input type="number" name="phone" class="w-[300px] border rounded-md shadow-md mt-8 p-2" value="{{ old('phone', $user->phone) }}">
                    <button class="p-3 m-[50px] my-[50px] mb-[20px] text-sm font-medium text-white bg-[#22C55E] rounded-lg border border-green-700 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-400">Update Profile</button>
                </div>
            </div>
        </form>
    </div>
    <img class="absolute" src="/image/bg-wave.png" alt="">
    @include('sweetalert::alert')
</body>
</html>