<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\CustomTactic;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function makeTactic()
    {
        return view('make-tactic');
    }

    public function profile()
    {
        $user = Auth::user();

        return view('profile')->with('user', $user);
    }

    public function saveProfile(Request $request, $user_id) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $data = array(
            'name' => $user->name,
            'email' => $user->email,
        );
        User::where('id', $user_id)->update($data);
        return redirect('/')
        ->with('response', 'Profile updated successfully.');
    }

    public function saveTactic(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'data' => 'required',
        ]);
        $customtactic = new CustomTactic;
        $customtactic->name = $request->input('name');
        $customtactic->data = $request->input('data');

        $user = Auth::user();
        $customtactic->user_id = $user->id;

        $customtactic->save();

        return redirect('/')
        ->with('response', 'Tactic added successfully.');
    }

    public function showSavedTactics()
    {
        $user = Auth::user();
        $customtactics = CustomTactic::where('user_id', $user->id)->get();
        return view('saved-tactics', ['customtactics' => $customtactics]);
    }
}
