<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => '',
            'result' => Post::all()->load([
                'user',
            ]),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = '6131e893f1cad24de918c292';
        $post->save();

        return response()->json([
            'success' => true,
            'message' => '',
            'result' => $post,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if ($post) {
            return response()->json([
                'success' => true,
                'message' => '',
                'result' => $post,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Post is not found',
            'result' => null,
        ], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();

            return response()->json([
                'success' => true,
                'message' => '',
                'result' => $post,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Post is not found',
            'result' => null,
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();

            return response()->json([
                'success' => true,
                'message' => '',
                'result' => null,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Post is not found',
            'result' => null,
        ], 404);
    }
}
