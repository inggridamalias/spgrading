<?php

namespace App\Http\Controllers;

use App\Http\Requests\Part1Request;
use App\Models\BioGrading;
use App\Models\CiriFisik;
use App\Models\DetailCiriFisik;
use App\Models\Grade;
use App\Models\Grading;
use App\Models\Hasil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GradingController extends Controller
{
    public function part1()
    {
        return view('grading.part1');
    }
    public function part2(Part1Request $request)
    {

        $id=BioGrading::create([
            'nama' => $request->nama,
            'no_hp' => $request->hp,
            'alamat' => $request->alamat,
            'tgl' => $request->tanggal,
        ]);

        $grade= Grade::all();
        $ciri_fisik = CiriFisik::all();
        $detil_ciri = DetailCiriFisik::all();
        return view('grading.part2',[
            'grade' => $grade,
            'ciri_fisik' => $ciri_fisik,
            'detil_fisik' => $detil_ciri,
            'id' => $id->id,
        ]);
    }
    public function part3(Request $request)
    {

        foreach ($request->fisik as $index =>$item)
        {
            Grading::create([
                'id_bio' => $request->id,
                'id_detail_fisik' => $request->fisik[$index],
                'nilai_cf' => $request->cf[$index],
            ]);
        }

        return redirect('finish')->with('success','Data Berhasil di Simpan')->with('id',$request->id);
    }
    public function finish()
    {
        //Session::put('id','37');
        if (Session::has('id'))
        {
            $grading=Grading::where('id_bio',Session::get('id'))->with('bio','detail_fisik')->get();

            foreach ($grading as $item)
            {
                $detail[]=$item->detail_fisik->id_grade;
                /** mencari nilai CF */
                $cf=$item->detail_fisik->mb - $item->detail_fisik->md;
                $cfHE[]=$cf *  $item->nilai_cf;
            }

            foreach ($detail as $value) {
                if (isset($counts[$value])) {
                    $counts[$value]++;
                } else {
                    $counts[$value] = 1;
                }
            }
            $banding=0;
            $id_grade=0;
            foreach ($counts as $index => $value)
            {
                if ($value > $banding)
                {
                    $banding = $value;
                    $id_grade=$index;
                }
            }

            $grade=Grade::find($id_grade);
            /** CF lanjutan */
            foreach ($cfHE as $key => $data)
            {
                if ($key == 0)
                {
                    $CFTotal[] =$data+($cfHE[$key+1]*(1-$data));
                }elseif ($key >= count($cfHE) -1 ){
                    break;
                }else{
                    $CFTotal[] =$data+($CFTotal[$key-1]*(1-$data));
                }

            }
            Hasil::create([
                'id_bio' => Session::get('id'),
                'id_grade' => $id_grade,
                'cf' => end($CFTotal)*100,

            ]);

            return view('grading.finish',[
                'grade' => $grade,
                'grading' => $grading,
                'persentase' => end($CFTotal)*100,
                'cfh' =>  $cfHE,
                'CFTotal' => $CFTotal
            ])->with('success','Data berhasil dihitung dan dianalisa');
        }else{
            abort(500);
        }

    }
}
