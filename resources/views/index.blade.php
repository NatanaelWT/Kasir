@extends('layout.template')
@section('content')
<div class="w-[80%] mx-auto mt-6 text-center">
    <h1 class="text-2xl">Transaksi</h1>
    <form action="/transaction" method="post" class="grid grid-rows-4 gap-4 mt-5">
        @csrf
        <select class="border border-slate-300 mx-auto w-[250px]" name="id" id="id">
            <option value="">-----------Pilih Barang-----------</option>
            @foreach ($data as $item)
                <option value="{{ $item->id }}">{{ $item->name }} - Rp.{{ $item->price }}</option>
            @endforeach
        </select>
        <input class="border border-slate-300 mx-auto w-[250px]" type="number" name="amount" id="amount" placeholder="jumlah" required>
        <button type="submit" class="w-[100px] mx-auto bg-slate-600">Buy</button>
    </form>
</div> 
@endsection