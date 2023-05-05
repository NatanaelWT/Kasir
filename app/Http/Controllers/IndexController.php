<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stok;
use App\Models\History;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index',[
            'data' => Stok::get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->input();
        Stok::create($data);
        return redirect('/stok');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('stok',[
            'data' => Stok::get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit',[
            'data' => Stok::where('id', $id)->get(),
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price
        ];

        Stok::where('id', $id)->update($data);

        return redirect('/stok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stok::destroy($id);

        return redirect('stok');
    }

    public function transaction(Request $request)
    {
        $id = $request->id;
        $amount = $request->amount;
        $data = stok::where('id', $id)->get();
        $newStock = $data[0]->stock - $amount;
        $newData = [
            'stock' => $newStock
        ];
        $history = [
            'name' => $data[0]->name,
            'amount' => $amount,
            'price' => $data[0]->price
        ];
        if ($newStock>= 0) {
            Stok::where('id', $id)->update($newData);
            History::create($history);
        }else {
            return redirect('error');
        }
        return redirect('');
    }

    public function history()
    {
        return view('history',[
            'data' => History::get()
        ]);
    }
    public function alert(){
        return view('alert');
    }
}
