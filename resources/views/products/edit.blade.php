@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

<form action="{{ route('products.update', $product) }}" method="POST"
      class="bg-white p-6 rounded shadow space-y-4">

    @csrf
    @method('PUT')

    <div>
        <label class="block mb-1">Nama</label>
        <input type="text" name="name" value="{{ $product->name }}" class="w-full border p-2 rounded" required>
    </div>

    <div>
        <label class="block mb-1">Deskripsi</label>
        <textarea name="description" class="w-full border p-2 rounded">{{ $product->description }}</textarea>
    </div>

    <div>
        <label class="block mb-1">Harga</label>
        <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="w-full border p-2 rounded" required>
    </div>

    <div>
        <label class="block mb-1">Stok</label>
        <input type="number" name="stock" value="{{ $product->stock }}" class="w-full border p-2 rounded" required>
    </div>

    <button class="px-4 py-2 bg-green-600 text-white rounded">Update</button>
</form>

@endsection
