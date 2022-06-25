<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class KusController extends Controller
{
    public static function landing()
    {
        return view('landing');
    }

    public static function blog()
    {
        $posts = Post::all();
        return view('blog.index', ['posts' => $posts]);
    }

    public static function post($post_name)
    {
        session_start();
        $post_name = implode(' ', explode('_', $post_name));

        $post_content = Post::where("post_name", $post_name)->first();

        if($post_content)
        {
            return view('post.index', ['post_content' => $post_content]);
        }
        else{
            return 'Error!';
        }
    }

	public static function reg()
    {
        return view('reg');
    }

	public static function auth()
    {
        return view('auth');
    }

    public function post_comment(Request $request){
        session_start();

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->comment_text = $request->comment_text;

        $comment->save();

        return redirect()->back();
        // return view('post/'.$_POST['post']->post_name);
    }

    public function reg_check(Request $request)
    {
        session_start();

        $valid = $request->validate(array(
            'login' => 'required|min:2|max:100',
            'email' => 'required|min:4|max:100',
            'password' => 'required|confirmed|min:1'
        ));

        $user = new User();
        $user->login = $request->login;
        $user->email = $request->email;
        $user->password = md5($request->login.$request->password);

        $user->save();

        $_SESSION["user"] = $user;
        session(['user' => $user]);

        return redirect()->route('auth');
    }

    public function auth_check(Request $request)
    {
        session_start();

        $login = $request->login;
        $password = $request->password;
        $user = User::where("login", $login)->where("password", md5($login.$password))->first();
        $_SESSION["user"] = $user;
        if($user)
        {
            return redirect()->route('landing');
        }
        else{
            return 'Error!';
        }
    }
}