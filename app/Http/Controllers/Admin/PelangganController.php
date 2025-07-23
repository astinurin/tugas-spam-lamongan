<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PelangganModel;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = PelangganModel::all();
        return view('pages.admin.pelanggan.index', compact('pelanggan'));
        

        
    }

    public function create()
    {
        return view('pages.admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_meter' => 'required|unique:pelanggan,no_meter',
        ]);

        PelangganModel::create($request->all());

        return redirect()->route('admin.pelanggan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pelanggan = PelangganModel::findOrFail($id);
        return view('pages.admin.pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_meter' => 'required|unique:pelanggan,no_meter,' . $id,
        ]);

        $pelanggan = PelangganModel::findOrFail($id);
        $pelanggan->update($request->all());

        return redirect()->route('admin.pelanggan.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $pelanggan = PelangganModel::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('admin.pelanggan.index')->with('success', 'Data berhasil dihapus.');
    }
}
