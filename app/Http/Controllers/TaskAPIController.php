<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskAPIController extends Controller
{
    public function read() { 
        $task = Task::all(); 
        return response()->json([
            'success' => true, 
            'message'=> 'Data Ditampilkan', 
            'data'=> $task

        ], 200);
    }

    public function create(Request $request)
    {
        $task = Task::create([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task
        ]);
        if ($task){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil di Tambahkan'
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal di Tambahkan'
            ], 401);
        }
    } 

    public function update($id, Request $request)
    {
        $task = Task::find($id)->update([ 
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task
        ]);

        if ($task){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil di Ubah'
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal di Ubah'
            ], 401);
        }
    }
    public function delete($id)
    {
        $mhs =Task::find($id)->delete();

        if($mhs)
        {
        return response()->json([
            'success'=>true,
            'message'=>'Data Berhasil di Hapus'
        ], 200);
    }
    else
    {
        return response()->json([
        'success'=>false,
        'message'=>'Data Gagal di Hapus'
        ], 401);
    }
    }
}