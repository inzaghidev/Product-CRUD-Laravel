@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Daftar Produk</h1>
    <a href="{{ route('products.create') }}"
       class="rounded-md bg-blue-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-blue-700 focus:shadow-none active:bg-blue-700 hover:bg-blue-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">Tambah Produk</a>
</div>

@if (session('success'))
<div class="bg-green-200 text-green-700 p-2 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<table class="w-full bg-white shadow rounded">
    <thead>
        <tr class="border-b bg-gray-200">
            <th class="p-3 text-left">Nama</th>
            <th class="p-3 text-left">Harga</th>
            <th class="p-3 text-left">Stok</th>
            <th class="p-3">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($products as $product)
        <tr class="border-b">
            <td class="p-3">{{ $product->name }}</td>
            <td class="p-3">Rp {{ number_format($product->price, 2) }}</td>
            <td class="p-3">{{ $product->stock }}</td>
            <td class="p-3 flex gap-2">
                <a href="{{ route('products.edit', $product) }}"
                   class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>

                <form action="{{ route('products.destroy', $product) }}" method="POST"
                      onsubmit="return confirm('Hapus produk ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-600 text-white px-3 py-1 rounded">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection