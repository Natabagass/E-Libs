<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Libs</title>
</head>
<body>
@include('layout.headerRead')
<div class="mx-auto mb-10">
    <div class="p-5 rounded shadow-sm">
        <form action="/createAuthor" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-5 font-semibold">
                <label class="text-white">Author name</label>
                <input type="text" name="name"
                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                placeholder="Author name">
                @error('title')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5 font-semibold">
                <label class="text-white">Adress Author</label>
                <input type="text" name="alamat"
                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                placeholder="Address Author">
                @error('title')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5 font-semibold">
                <label class="text-white">Birth Date</label>
                <input type="date" name="tanggal_lahir"
                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                placeholder="Birth date"></input>
                @error('title')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5">
                <button type="submit"
                    class="bg-blue-400 text-white p-2 px-5 rounded shadow-sm focus:outline-none font-bold">Save</button>
            </div>
        </form>
    </div>
    <div class="flex justify-end mr-[150px]">
        <a href="/post" class="p-3 text-[16px] flex w-[60px] text-sm font-semibold text-white bg-[#22C55E] rounded-lg border border-green-700 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-400">Back</a>
    </div>
    <img class="absolute" src="/image/bg-wave.png" alt="">
</div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>

</body>
</html>