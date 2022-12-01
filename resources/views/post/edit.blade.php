
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
<div class="container mx-auto mt-10 mb-10">
    <div class="bg-white p-5 rounded shadow-sm">
        @foreach ($books as $book)
        <form action="/edit" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-5">
                <label>JUDUL POST</label>
                <input type="text" name="title" value="{{ old('title', $book->title) }}"
                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                placeholder="judul post">
                @error('title')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5">
                <label>KONTEN POST</label>
                <textarea name="author">{{ old('author', $book->author) }}</textarea>
                @error('content')
                    <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-5">
                <button type="submit"
                    class="bg-indigo-500 text-white p-2 rounded shadow-sm focus:outline-none hover:bg-indigo-700">UPDATE POST</button>
            </div>
        </form>
        @endforeach
    </div>
</div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>



</body>
</html>