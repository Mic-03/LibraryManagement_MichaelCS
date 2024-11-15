<?php

namespace App\Http\Controllers;

use App\Models\FYP;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FYPController extends Controller
{
    public function index(Request $request) : View
    {
        $sort = $request->query('sort', 'asc');
        $fyps = FYP::orderBy('title', $sort)->paginate(10);
        return view('fyps.index', compact('fyps', 'sort'));
    }
}
