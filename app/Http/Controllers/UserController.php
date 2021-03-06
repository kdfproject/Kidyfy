<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Post;
use App\Doctor;
use App\UserSecondarie;

class UserController extends Controller
{
  public function view($id)
  {
      $user = User::find($id);
      $doctors = DB::table('doctors');
      $posts = Post::where("user_id", "=", $user->id)->orderBy('created_at', 'desc')->visibles()->get();
      return view('userviews.userprofile', compact('user', 'posts','doctors'));
  }

}
