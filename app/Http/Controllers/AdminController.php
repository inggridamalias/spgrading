<?php

namespace App\Http\Controllers;



use App\Models\Grade;
use App\Models\Grading;
use App\Models\Hasil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\Fluent\Concerns\Has;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    public function laporan(Request $request)
    {


        if ($request->ajax())
        {
            $data=Hasil::with('grade','biograding')->orderBy('id','DESC')->get();
            return Datatables::of($data)->toJson();
        }
        return view('admin.laporan');
    }

    public function dashboard()
    {


        // if ($request->ajax())
        // {
        //     $data=Hasil::with('grade','biograding')->orderBy('id','DESC')->get();
        //     return Datatables::of($data)->toJson();
        // }
        return view('admin.dashboard');
    }

    public function grafik()
    {
        $grade=Grade::all();
        foreach ($grade as $item)
        {
            $data[]=Hasil::where('id_grade',$item->id)->count();
            $nama_grade[]=$item->nama_grade;
        }
        return response()->json(['data'=>$data,'grade'=>$nama_grade]);
    }

}
