<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function create(Request $r)
    {
        return Guru::create($r->all());
    }

    public function read()
    {
        return Guru::all();
    }

    public function update(Request $r, $id)
    {
        $data = Guru::find($id);
        $data->update($r->all());
        return $data;
    }

    public function delete($id)
    {
        return Guru::destroy($id);
    }
}
