<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('users.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'position' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('users.index')->with('success','Created Successfully.');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show',compact('user'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'position' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success','Updated Successfully.');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','Item deleted successfully.');
    }
}