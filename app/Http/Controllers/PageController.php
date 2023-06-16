<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class PageController extends Controller
{
    public function home(){ 
        return view('home',['key'=>'home']);
    }

    public function profile(){ 
        return view('profile',['key'=>'profile']);
    }

    public function student(){ 
        $mhs = Mahasiswa::orderby('id','asc')->paginate(10);
        return view('student',['key'=>'student','mhs'=> $mhs]);
    }

    public function contact(){ 
        return view('contact',['key'=>'contact']);
    }

    public function search(Request $request){ 
        $cari = $request->q; 
        $mhs = Mahasiswa::where('nama','like','%'.$cari.'%')->paginate(10); 
        //$mhs = Mahasiswa::where('nama','like','%'.$cari.'%')->orwhere('nim','like','%'.$cari.'%')->paginate(10);
        $mhs->appends($request->all());
        return view('student',['key'=>'student','mhs'=> $mhs]);
    }
    public function formadd(){ 
        return view('formadd',['key'=>'student']);

    }

    public function save(Request $request){ 
        $minat=implode(',', $request->get('minat')); 
        Mahasiswa::create([ 
            'nim'=>$request->nim, 
            'nama'=>$request->nama, 
            'gender'=>$request->gender, 
            'prodi'=>$request->prodi, 
            'minat'=>$minat
        ]);

        return redirect('student')->with('flash','Data berhasil disimpan')->with('flash_type', 'success');
    
        
    }

    public function formedit($id) { 
        $mhs = Mahasiswa::find($id); 
        return view('formedit', ['key'=>'student','mhs'=>$mhs]);
        //mhs untuk menampung data yang dipilih
        //metode akan dikirimkan ke view 
        //key akan mengirimkan student

    }

    public function update($id, Request $request){ 
        $minat=implode(',', $request->get('minat')); 
        $mhs = Mahasiswa::find($id); 
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = $minat;
        $mhs->save();

        return redirect('student')->with('flash','Data berhasil diubah')->with('flash_type', 'secondary');

    
    }

    public function delete($id){ 
        $mhs = Mahasiswa::find($id); 
        $mhs->delete();

        return redirect('student')->with('flash','Data berhasil dihapus')->with('flash_type', 'danger');
 
    }

}
