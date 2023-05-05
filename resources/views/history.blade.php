@extends('layout.template')
@section('content')
<div class="w-[80%] mx-auto mt-6">
    <a href="/tambah">Tambah</a>
</div> 

    <div class="overflow-x-auto w-[80%] mx-auto mt-6">
        <table class="table-auto w-[1000px] xl:w-full border border-slate-400">
            <thead>
            <tr>
                <th class="border border-slate-300">Nama</th>
                <th class="border border-slate-300">Jumlah</th>
                <th class="border border-slate-300">Harga</th>
                <th class="border border-slate-300">Total Harga</th>
                <th class="border border-slate-300">Tanggal</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="border border-slate-300 text-center">{{ $item->name }}</td>
                        <td class="border border-slate-300 text-center">{{ $item->amount }}</td>
                        <td class="border border-slate-300 text-center">Rp.{{ $item->price }}</td>
                        <td class="border border-slate-300 text-center">Rp.{{ $item->price * $item->amount }}</td>
                        <td class="border border-slate-300 text-center">{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection