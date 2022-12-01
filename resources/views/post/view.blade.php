@extends('layout.app', ['title' => 'Data Posts'])

@include('layout.headerRead')
<div class="container mx-auto mt-10 mb-10">
    <div class="bg-[#2A3342] p-5 rounded shadow-sm">
        <div class="grid grid-cols-8 gap-4 mb-4">
            <div class="col-span-1 mt-2">
                <a href=""
                    class="w-full bg-[#22C55E] hover:bg-green-600 text-white p-3 rounded shadow-sm focus:outline-none ">Add Book</a>
            </div>
            <div class="col-span-7">
                <form action="/post" method="GET">
                    <input type="text" name="search"
                    class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white"
                    placeholder="Input your book">
                </form>
            </div>
        </div>
        <table class="min-w-full table-auto">
            <thead class="justify-between">
                <tr class="bg-[#333F51] w-full">
                    <th class="px-10 py-2">
                        <span class="text-white">TITLE</span>
                    </th>
                    <th class="px-10 py-2 text-left">
                        <span class="text-white">AUTHOR</span>
                    </th>
                    <th class="px-10 py-2 text-left">
                        <span class="text-white">LINK</span>
                    </th>
                    <th class="px-10 py-2">
                        <span class="text-white">ACTION</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-[#2a33429c]">
                @forelse($books as $book)
                    <tr class="bg-[#D9D9D9] border-2 border-gray-200">

                        <td class="px-10 py-2">
                            {{ $book->title }}
                        </td>
                        <td class="px-10 py-2">
                            {{ $book->author }}
                        </td>
                        <td class="px-10 py-2">
                            <a class="p-2 px-5 bg-yellow-500 hover:bg-green-600 rounded-md text-xs text-white" href=" {{ $book->link }}">LINK</a>
                        </td>
                        <td class="px-10 py-2 text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:border-indigo-700 text-xs focus:outline-none mr-2"><a href="">EDIT</a></button>
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:border-red-700 text-xs focus:outline-none">DELETE</button>
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
            {{ $books->links('vendor.pagination.tailwind') }}
        </div>
    </div>
    <img class="absolute" src="/image/bg-wave.png" alt="">
</div>
