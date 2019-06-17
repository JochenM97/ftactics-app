<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\CustomTactic;
use App\StandardTactic;

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

    public function showCustomTactic($customtactic_id)
    {
        try {
            $customtactic = CustomTactic::findOrFail($customtactic_id);
        } catch (\Exception $e) { 
            return redirect('/saved-tactics')->with('warning', 'This tactic does not exist.'); 
        }

        $this->authorize('view', $customtactic);

        return view('view-tactic')->with('tactic', $customtactic);
    }

    public function editCustomtactic($customtactic_id) {
        try {
            $customtactic = CustomTactic::findOrFail($customtactic_id);
        } catch (\Exception $e) { 
            return redirect('/saved-tactics')->with('warning', 'This tactic does not exist.'); 
        }
        return view('edit-tactic')->with('tactic', $customtactic);
    }

    public function postEditCustomtactic(Request $request, $customtactic_id) {
        $this->validate($request, [
            'name' => 'required',
            'data' => 'required',
        ]);
        $customtactic = new CustomTactic;
        $customtactic->name = $request->input('name');
        $customtactic->data = $request->input('data');

        $updatedata = array(
            'name' => $customtactic->name,
            'data' => $customtactic->data,
        );
        CustomTactic::where('id', $customtactic_id)->update($updatedata);
        return redirect('/saved-tactics/'.$customtactic_id)->with('tactic', $customtactic);
    }

    public function deleteCustomTactic($customtactic_id) {     
        try {
            CustomTactic::findOrFail($customtactic_id);
        } catch (\Exception $e) { 
            return redirect('/saved-tactics')->with('warning', 'You are trying to delete a tactic that does not exist!'); 
        }
        CustomTactic::where('id', $customtactic_id)->delete();
        return redirect('/saved-tactics')
        ->with('response', 'Tactic deleted successfully.'); 
    }

    public function showFindTactics()
    {
        $standardtactics = StandardTactic::all();
        return view('find-tactics', ['standardtactics' => $standardtactics]);
    }

    public function showStandardTactic($standardtactic_id)
    {
        $standardtactic = StandardTactic::findOrFail($standardtactic_id);

        return view('view-tactic')->with('tactic', $standardtactic);
    }
}
