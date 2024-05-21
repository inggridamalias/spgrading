<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CiriFisik;
use App\Models\DetailCiriFisik;
use App\Models\Grade;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DetailCiriFisikController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax())
        {
            $detail_ciri_fisik=DetailCiriFisik::with('ciri','grade')->get();
            return Datatables::of($detail_ciri_fisik)->toJson();
        }

        return view('admin.detail_ciri_fisik');
    }
    public function create()
    {
        $grade=Grade::all();
        $ciri=CiriFisik::all();
        return view('admin.create_detail_ciri_fisik',[
            'grade' => $grade,
            'ciri' => $ciri,
        ]);
    }
    public function store(Request $request)
    {
        DetailCiriFisik::create([
            'id_grade' => $request->id_grade,
            'id_ciri_fisik' => $request->id_ciri_fisik,
            'kode_detail_fisik' => $request->kode_detail_fisik,
            'nama_detail_fisik' => $request->detail_nama_fisik,
            'mb' => $request->mb,
            'md' => $request->md,
        ]);
        return redirect('admin/detail-ciri-fisik')->with('success','Data Berhasil di Simpan');
    }
    public function edit($id)
    {
        $detilFisik=DetailCiriFisik::find($id);
        if ($detilFisik)
        {
            $grade=Grade::all();
            $ciri=CiriFisik::all();
            return view('admin.create_detail_ciri_fisik',[
                'id' =>$id,
                'id_grade' => $detilFisik->id_grade,
                'id_ciri_fisik' => $detilFisik->id_ciri_fisik,
                'kode_detail_fisik' => $detilFisik->kode_detail_fisik,
                'detail_nama_fisik' => $detilFisik->nama_detail_fisik,
                'mb' => $detilFisik->mb,
                'md' => $detilFisik->md,
                'grade' => $grade,
                'ciri' => $ciri,
            ]);
        }

    }
    public function update(Request $request,$id)
    {
        if ($id)
        {
            $detail_fisik=DetailCiriFisik::find($id);
            if($detail_fisik)
            {
                $detail_fisik->id_grade = $request->id_grade;
                $detail_fisik->id_ciri_fisik = $request->id_ciri_fisik;
                $detail_fisik->kode_detail_fisik = $request->kode_detail_fisik;
                $detail_fisik->nama_detail_fisik = $request->detail_nama_fisik;
                $detail_fisik->mb = $request->mb;
                $detail_fisik->md = $request->md;
                $detail_fisik->save();
               
                return redirect('admin/detail-ciri-fisik')->with('success','Data Berhasil di Update');
            }
            return redirect('admin/detail-ciri-fisik')->with('fail','Data Gagal di Update');
        }
    }
    public function delete($id)
    {
        $detail_fisik=DetailCiriFisik::find($id);
        if ($detail_fisik)
        {
            $detail_fisik->delete();
            return redirect('admin/detail-ciri-fisik')->with('success','Data Berhasil di Hapus');
        }
        return redirect('admin/detail-ciri-fisik')->with('fail','Data Gagal di Hapus');
    }
}
