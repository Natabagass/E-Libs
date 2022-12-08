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
@extends('layout.app', ['title' => 'Data Posts'])

@include('layout.headerRead')
<div class="container mx-auto mt-10 mb-10">
    <div class="bg-[#2A3342] p-5 rounded shadow-sm">
        <div class="grid grid-cols-8 gap-4 mb-4">
            <div class="col-span-1 mt-2">
                <a href="/createAuthor"
                    class="w-full bg-[#22C55E] hover:bg-green-600 text-white p-3 rounded shadow-sm focus:outline-none ">Add Book</a>
            </div>
            <div class="col-span-7">
                <form action="/postAuthor" method="GET">
                    <input type="text" name="search"
                    class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white"
                    placeholder="Search your author">
                </form>
            </div>
        </div>
        <table class="min-w-full table-auto">
            <thead class="justify-between">
                <tr class="bg-[#333F51] w-full">
                    <th class="px-10 py-2 text-left">
                        <span class="text-white">Nama</span>
                    </th>
                    <th class="px-28 py-2 text-left">
                        <span class="text-white">Alamat</span>
                    </th>
                    <th class="px-10 py-2 text-left">
                        <span class="text-white">Tanggal Lahir</span>
                    </th>
                    <th class="px-10 py-2">
                        <span class="text-white">ACTION</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-[#2a33429c]">
                @forelse($authors as $author)
                    <tr class="bg-[#D9D9D9] border-2 border-gray-200">
                        <td class="px-10 py-2">
                            {{ $author->name }}
                        </td>
                        <td class="px-20 py-2">
                            {{ $author->alamat }}
                        </td>
                        <td class="px-10 py-2">
                            {{ $author->tanggal_lahir }}
                        </td>
                        <td class="px-10 py-2 flex-row flex text-center">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:border-indigo-700 text-xs focus:outline-none mr-2"><a href="/postAuthor/edit/{{ $author->id }}">EDIT</a></button>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/postAuthor/delete/{{ $author->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 ml-3 -mr-[60px] py-2 rounded-lg hover:border-red-700 text-xs focus:outline-none">DELETE</button>
                            </form>
                        </td> 
                    </tr>
                @empty
                    <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                        Data Belum Tersedia!
                    </div>
                @endforelse
            </tbody>
        </table>
        <div class="mt-2">
            {{ $authors->links('vendor.pagination.tailwind') }}
        </div>
    </div>
    <img class="absolute" src="/image/bg-wave.png" alt="">
</div>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>
