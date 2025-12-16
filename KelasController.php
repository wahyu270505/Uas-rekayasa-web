<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function create(Request $r)
    {
        return Kelas::create($r->all());
    }

    public function read()
    {
        return Kelas::all();
    }

    public function update(Request $r, $id)
    {
        $data = Kelas::find($id);
        $data->update($r->all());
        return $data;
    }

    public function delete($id)
    {
        return Kelas::destroy($id);
    }
}
