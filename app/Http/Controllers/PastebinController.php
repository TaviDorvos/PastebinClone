<?php

//php artisan make:controller PastebinController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bin;

class PastebinController extends Controller {

    //get the list of all the bins of the current user
    public function binsList() {
        $bins = Bin::where('id_user', auth()->id())->get();

        return view('bins.bins-list', ['bins' => $bins]);
    }

    //creating the view of the specific bin ID
    public function showBin(Bin $id) {
        return view('bins.show-bin', ['bin' => $id]);
    }

    public function create() {
        return view('bins.new-bin');
    }

    //storing the info if the bin
    public function store() {
        $bin = new Bin;

        $bin->title = request('input-title');
        $bin->bin_text = request('input-text');
        $bin->id_user = auth()->id();
        $bin->save();

        return redirect()->to('/confirmation');
    }
}
