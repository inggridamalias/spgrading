<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class GradeController extends Controller
{
    public function grade(Request $request)
    {
        if ($request->ajax())
        {
            $grade=Grade::all();
            return Datatables::of($grade)->toJson();
        }
        return view('admin.grade');
    }
    public function create()
    {
        return view('admin.create_grade');
    }
    public function edit($id)
    {
        $grade=Grade::find($id);
        if ($grade)
        {
            return view('admin.create_grade',[
                'kode_grade' => $grade->kode_grade,
                'nama_grade' => $grade->nama_grade,
                'harga' => $grade->harga,
                'id' => $id,
            ]);
        }

    }
    public function update(Request $request,$id)
    {
        if ($id)
        {
            $grade=Grade::find($id);
            if($grade)
            {
                $grade->kode_grade = $request->kode;
                $grade->nama_grade = $request->nama;
                $grade->harga = $request->harga;
                $grade->save();
                return redirect('admin/grade')->with('success','Data Berhasil di Update');
            }
            return redirect('admin/grade')->with('fail','Data Gagal di Update');
        }
    }
    public function store(Request $request)
    {
        Grade::create([
           'kode_grade' => $request->kode,
           'nama_grade' => $request->nama,
           'harga' => $request->harga,
        ]);
    return redirect('admin/grade')->with('success','Data Berhasil di Simpan');
    }
    public function delete($id)
    {
        $grade=Grade::find($id);
        if ($grade)
        {
            $grade->delete();
            return redirect('admin/grade')->with('success','Data Berhasil di Hapus');
        }
        return redirect('admin/grade')->with('fail','Data Gagal di Hapus');
    }
}
