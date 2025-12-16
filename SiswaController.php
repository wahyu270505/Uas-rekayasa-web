<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create(Request $r)
    {
        return Siswa::create($r->all());
    }

    public function read()
    {
        return Siswa::all();
    }

    public function update(Request $r, $id)
    {
        $data = Siswa::find($id);

        if (!$data) {
            return response()->json([
                "message" => "Data siswa tidak ditemukan"
            ], 404);
        }

        $data->update($r->all());
        return $data;
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return response()->json([
                "message" => "Data siswa tidak ditemukan"
            ], 404);
        }

        $siswa->delete();

        return response()->json([
            "message" => "Data siswa berhasil dihapus"
        ], 200);
    }
}
