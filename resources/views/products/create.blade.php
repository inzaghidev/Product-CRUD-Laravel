@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>

<form action="{{ route('products.store') }}" method="POST"
      class="bg-white p-6 rounded shadow space-y-4">

    @csrf

    <div>
        <label class="block mb-1">Nama</label>
        <input type="text" name="name" class="w-full border p-2 rounded" required>
    </div>

    <div>
        <label class="block mb-1">Deskripsi</label>
        <textarea name="description" class="w-full border p-2 rounded"></textarea>
    </div>

    <div>
        <label class="block mb-1">Harga</label>
        <input type="number" step="0.01" name="price" class="w-full border p-2 rounded" required>
    </div>

    <div>
        <label class="block mb-1">Stok</label>
        <input type="number" name="stock" class="w-full border p-2 rounded" required>
    </div>

    <button class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
</form>

@endsection