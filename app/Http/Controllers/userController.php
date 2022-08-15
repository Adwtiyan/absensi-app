<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index () {
        return view('Dashboard.Users',[
            'title' => 'users']);
    }

    public function create () {
        return view('User.add', [
            'title' => 'users'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'username' => ['required', 'min:8', 'max:32', 'unique:users'],
            'noHp' => 'required',
            'password' => 'required|min:8|max:32'
        ]);
        //hash password
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //alert berhasil menambah data
        // $request->session()->flash('success', 'Menambah data user baru berhasil');

        return redirect('/add-user')->with('success', 'Menambah data user baru berhasil');
    }
}
