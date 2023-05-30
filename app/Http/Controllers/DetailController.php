<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id)
    {
        $details = Detail::find($id);

        return view('detail', compact('details'));
    }
}
