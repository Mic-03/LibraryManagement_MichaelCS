<?php

namespace App\Http\Controllers;

use App\Models\Newspaper;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewspaperController extends Controller
{
    public function index(Request $request) : View
    {
        $sort = $request->query('sort', 'asc');
        $newspapers = Newspaper::orderBy('title', $sort)->paginate(10);
        return view('newspapers.index', compact('newspapers', 'sort'));
    }
}
