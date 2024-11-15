<?php

namespace App\Http\Controllers;

use App\Models\CD;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CDController extends Controller
{
    
    public function index(Request $request) : View
    {
        $sort = $request->query('sort', 'asc');
        $cds = CD::orderBy('title', $sort)->paginate(10);
        return view('cds.index', compact('cds', 'sort'));
    }
}
