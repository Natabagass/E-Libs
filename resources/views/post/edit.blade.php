
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Libs</title>
</head>
<body>
@extends('layout.app', ['title' => 'Data Posts'])
@include('layout.headerRead')
<div class="container mx-auto mt-5 mb-10">
    <div class="bg-[#2A3342] p-5 rounded shadow-sm">
        <form action="/post/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-5 font-semibold">
                <label class="text-white">Book Title</label>
                <input type="text" value="{{ old('title', $book->title) }}" name="title"
                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                placeholder="Book Title">
                @error('title')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5 font-semibold">
                <label class="text-white">Book Author</label>
                <input type="text" name="author" value="{{ old('author', $book->author) }}"
                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                placeholder="Author Name">
                @error('title')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5 font-semibold">
                <label class="text-white">Book Category ID</label>
                <input type="text" name="category_id" value="{{ old('category_id', $book->category_id) }}"
                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                placeholder="Category ID"></input>
                @error('title')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5 font-semibold">
                <label class="text-white">Book Link</label>
                <input type="textarea" name="link" value="{{ old('link', $book->link) }}"
                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                placeholder="Book Link">
                @error('title')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5 font-semibold">
                <label class="text-white">Description</label>
                <input type="textarea" name="description" value="{{ old('description', $book->description) }}"
                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                placeholder="Book Description"/>
                @error('title')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5">
                <button type="submit"
                    class="bg-blue-400 text-white p-2 rounded shadow-sm focus:outline-none font-bold">Edit Book</button>
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