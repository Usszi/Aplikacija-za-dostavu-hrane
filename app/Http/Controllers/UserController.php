<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    /* list of users */
    public function index()
    {
        $users = User::paginate();  
        return view('users.index',compact('users')); 
    }

    /* localhost:8000/users/create */
    public function create()
    {
        return view('users.create');
    }

    /* POST localhost:8000/users */
    public function store(Request $request)
    {
        /* validacija podataka: ime mora biti manje od 255 znakova, biti unique, itd. */
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'native_name' => 'required|unique:users|max:255',
        ]);
        $user = User::create($validated);
        return view('users.show', compact('user'));
    }

    /* localhost:8000/users/1 */
    public function show($id)
    {
        $user = User::with(['orders'])
            ->findOrFail($id);
        $friends = $user->messages()->paginate();

        return view('users.show', compact('user', 'messages'));
    }



    /* PUT localhost:8000/users/1 */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255',
            'adress' => 'required|max:255',
            'gender' => 'required|max:255'
        ]);

        $user = User::findOrFail($id);
        $user->fill($validated);
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }

    /* DELETE localhost:8000/users/1 */
    public function destroy($id)
    {
        /* primjer upita kojeg generira linija ispod: DELETE FROM users WHERE id = 1 */
        User::destroy($id);

        /* nakon brisanja, napravi redirect na index stranicu */
        return redirect()->route('users.index');
    }
}