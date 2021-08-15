<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        $users = DB::table('users')->paginate(4);
        return view('home', ['users' => $users]);
    }

    public function create()
    {
        return view('create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $email=$request->input('email');
        $user = User::where('email', '=', $email)->first();
        if ($user === null) {

            UserData::create($request->all());
            return redirect()->route('userData.index');
        }
        else {
            echo "<p style='background-color: #B94A48'>User E-Mail already Exists!</p>";
            return view('create');
        }

    }

    public function edit($id)
    {
        $user = User::find($id)->toArray();
        return view('edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user = UserData::find($id);


        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');


        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);


        $user->save();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user->update($request->all());

        echo "<p style='background-color: #B94A48'>User updated successfully</p>";
        return redirect()->route('userData.index');
    }

    public function destroy($id)
    {


        UserData::find($id)->delete();

        return redirect()->route('userData.index');

    }


}
