<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CustomTactic;

class PublicController extends Controller
{
    public function showSharedTactic($sharedtactic_id)
    {
        $sharedtactic = CustomTactic::findOrFail($sharedtactic_id);

        return view('shared-tactic')->with('tactic', $sharedtactic);
    }
}
