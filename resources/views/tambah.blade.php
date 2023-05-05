@extends('layout.template')
@section('content')
<div class="w-[80%] mx-auto mt-6 text-center">
    <h1 class="text-2xl">Tambah Barang</h1>
    <form action="/add" method="post" class="grid grid-rows-4 gap-4 mt-5">
        @csrf
        <input class="border border-slate-300 mx-auto w-[250px]" type="text" name="name" id="name" placeholder="nama" required>
        <input class="border border-slate-300 mx-auto w-[250px]" type="number" name="stock" id="stock" placeholder="stok" required>
        <input class="border border-slate-300 mx-auto w-[250px]" type="number" name="price" id="price" placeholder="price" required>
        <button type="submit" class="w-[100px] mx-auto bg-slate-600">Tambah</button>
    </form>
    <a href="/stok">Back</a>
</div> 
@endsection