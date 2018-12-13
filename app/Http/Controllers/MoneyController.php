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
    public function index()
    {
        $money = Money::orderBy('created_at', 'DESC')->paginate(5);

        $total = 0;
        foreach ($money as $key => $value) {
            if ($value->operator == '+') {
                $total =  is_numeric($value->jumlah) + $total;
            } else {
                $total = is_numeric($value->jumlah) - $total;
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
        return redirect()->back()->with('success', 'Data catatan finance berhasil ditambahkan');
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
            'keterangan' => 'min:3|max:150',
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
        return redirect()->back()->with('success', 'Data catatan finance berhasil di edit');
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
