<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CiriFisik;
use App\Models\Grade;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CiriFisikController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax())
        {
            $ciri_fisik=CiriFisik::get();
            return Datatables::of($ciri_fisik)->toJson();
        }

        return view('admin.ciri_fisik');
    }
    public function create()
    {

        return view('admin.create_ciri_fisik');
    }
    public function store(Request $request)
    {
        CiriFisik::create([
            'nama_fisik' => $request->nama_fisik,

        ]);
        return redirect('admin/ciri-fisik')->with('success','Data Berhasil di Simpan');
    }
    public function edit($id)
    {
        $fisik=CiriFisik::find($id);
        if ($fisik)
        {
            return view('admin.create_ciri_fisik',[
                'nama_fisik' => $fisik->nama_fisik,
                'id' => $id,
            ]);
        }

    }
    public function update(Request $request,$id)
    {
        if ($id)
        {
            $fisik=CiriFisik::find($id);
            if($fisik)
            {
                $fisik->nama_fisik = $request->nama_fisik;
                $fisik->save();
                return redirect('admin/ciri-fisik')->with('success','Data Berhasil di Update');
            }
            return redirect('admin/ciri-fisik')->with('fail','Data Gagal di Update');
        }
    }
    public function delete($id)
    {
        $fisik=CiriFisik::find($id);
        if ($fisik)
        {
            $fisik->delete();
            return redirect('admin/ciri-fisik')->with('success','Data Berhasil di Hapus');
        }
        return redirect('admin/ciri-fisik')->with('fail','Data Gagal di Hapus');
    }
}
