<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {

        // $model = new Post;
        // $datas = $model->all();
        // , ['datas' => $datas]
        return view('postt');
    }
    public function store(Request $request)
    {
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/')->with('status', 'Blog Post Form Data Has Been inserted');
        return redirect('/read')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function read()
    
    {
        $model = Post::find($id);
        $model->delete();
        return redirect('/')->with('status', 'Blog Post Form Data Has Been deleted');
        return redirect('/read')->with('status', 'Blog Post Form Data Has Been deleted');
    }

    public function edit($id)
    
    {
        $model->title = $request->title;
        $model->description = $request->description;
        $model->save();
        return redirect('/')->with('status', 'Blog Post Form Data Has Been Update');
        return redirect('/read')->with('status', 'Blog Post Form Data Has Been Update');
    }
}