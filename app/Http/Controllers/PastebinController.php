<?php

//php artisan make:controller PastebinController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PastebinController extends Controller
{
    public function create() {
        return view('new-paste');
    }

    public function store(Request $request) {
        // dd($request->all());
        
        $result = DB::insert('INSERT INTO bins (title, bin_text) VALUES (?, ?)', [$request->input('input-title'), $request->input('input-text')]);

        return redirect()->to('/new-paste');
    }
}
