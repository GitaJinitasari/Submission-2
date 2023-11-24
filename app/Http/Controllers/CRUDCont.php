<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDCont extends Controller{
    public function create()
{
    $data['buat'] = 'buat sesuatu';

    return view ('create',$data);
}

public function update()
{
    $data['kedua'] = 'perbaharui';

    return view ('update',$data);
}

public function delete()
{
    $data['terakhir'] = 'Hapus';

    return view ('delete',$data);
}
}