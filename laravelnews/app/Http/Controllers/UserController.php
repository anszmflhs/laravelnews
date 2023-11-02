<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'intern')->get();
        return view('welcome', compact('users'));
    }
    public function destroy($id)
    {
        $post = User::findOrFail($id);
        $post->delete();
        return redirect('user');
    }
}
