<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Money;
use Carbon\Carbon;

class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $result = Money::query();
        if ($request->filled('search')) {
            $search = Carbon::parse($request->search)->format('y-m-d');
            $money = $result->whereDate('waktu', '=', $search);
        }
        $money = $result->orderBy('waktu', 'DESC')->paginate(5);
        $data = $result->whereMonth('created_at', '=', '12')->get();
        $total = 0;
        foreach ($data as $key => $value) {
            if ($value->operator == '+') {
                $total += $value->jumlah;
            } else {
                $total -= $value->jumlah;
            }
        }
        return view('laraMoney.index', compact('money', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laraMoney.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jumlah' => 'required',
            'operator' => 'required|string',
            'keterangan' => 'min:3|max:150|nullable',
            'waktu' => 'required',
        ]);
        $detail = $request->operator == 'pemasukkan' ? '+' : '-';
        $time = $request->waktu ? Carbon::parse($request->waktu)->format('y-m-d h:i:s') : '';
        $money = Money::create([
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan, 
            'operator' => $detail,
            'waktu' => $time,
        ]);
        return redirect()->route('home.finance')->with('success', 'Data catatan finance berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $money = Money::find($id);
        return view('laraMoney.edit', compact('money'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jumlah' => 'required',
            'operator' => 'required',
            'keterangan' => 'nullable',
            'waktu' => 'required',
        ]);
        $detail = $request->operator == 'pemasukkan' ? '+' : '-';
        $time = $request->waktu ? Carbon::parse($request->waktu)->format('y-m-d h:i:s') : '';
        $money = Money::find($id)->Update([
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan, 
            'operator' => $detail,
            'waktu' => $time,
        ]);
        return redirect()->route('home.finance')->with('success', 'Data catatan finance berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete(Request $request)
    {
        if ($request->ceklis) 
        {
            $ceklis = $request->ceklis;
            $money = Money::whereIn('id', $ceklis)->delete();
        } else {
            return redirect()->back()->with('error', 'Tidak ada data yang ingin dihapus, silahkan cek kembali');
        }
        return redirect()->back()->with('success', 'Data catatan finance sudah dihapus');
    }
}
