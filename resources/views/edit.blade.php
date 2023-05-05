@extends('layout.template')
@section('content')
<div class="w-[80%] mx-auto mt-6 text-center">
    <h1 class="text-2xl">Edit Barang</h1>
    <form action="/update/{{$id}}" method="post" class="grid grid-rows-4 gap-4 mt-5">
        @csrf
        @foreach ($data as $item)
        <input class="border border-slate-300 mx-auto w-[250px]" value="{{ $item->name }}" type="text" name="name" id="name" placeholder="nama" required>
        <input class="border border-slate-300 mx-auto w-[250px]" value="{{ $item->stock }}" type="number" name="stock" id="stock" placeholder="stok" required>
        <input class="border border-slate-300 mx-auto w-[250px]" value="{{ $item->price }}" type="number" name="price" id="price" placeholder="price" required>
        <button type="submit" class="w-[100px] mx-auto bg-slate-600">Tambah</button>
        @endforeach
    </form>
    <a href="/stok">Back</a>
</div> 
@endsection