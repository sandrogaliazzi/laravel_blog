<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Coment;
use App\Post;


class ComentController extends Controller
{

    public function store(Request $request)
    {
        Coment::create($request->all());
    }

    public function show($id)
    {
        $coment = Coment::find($id);

        return response()->json($coment);
    }

    public function loadComents(Request $request, $postId)
    {
        $post = Post::find($postId);

        $user = 1;//$request->session()->get('user', '0');

        $html = view('posts.coments', compact('post', 'user'))->render();

        return response()->json($html);
    }

    public function edit(Request $request)
    {
        $coment = $request->content;

        $id = $request->id;

        $html = view('forms.editComent', compact('coment', 'id'))->render();

        return response()->json($html);
    }

    public function update(Request $request)
    {
        $coment = Coment::find($request->id);

        $coment->content = $request->content;
        
        if($coment->save()){
            return response()->json(['status'=>200, 'coment'=>$coment]);
        }
    }

    public function destroy($id)
    {
        $coment = Coment::find($id);

        $coment->delete();

        return response()->json($coment);
    }
}
