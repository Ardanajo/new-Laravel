<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('latihan1');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('latihan1')->with('status', 'Blog Post Form Data Has Been inserted');
    }
    
    public function read()
    {
    $model_post = new Post;
    $data=$model_post->all();
    //echo "<pre>";
    return view ('read',['datanya'=>$data]);
    }

    public function delete($id)
    {
    $model = Post::find($id);
    $model->delete();
    return redirect('/')->with('status', 'Blog Post Form Data Has Been deleted');
    }

}


