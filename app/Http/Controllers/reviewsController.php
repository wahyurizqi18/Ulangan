<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use Illuminate\Http\Request;

class reviewsController extends Controller
{
    public function Barang(){
        $data=[
            'barang'=>reviews::all()
        ];
        return view('admin.review', $data);

    }

    public function Detail($id){
        $detail = reviews::find($id);
        return view('admin.detail', compact('detail'));
    }
}
