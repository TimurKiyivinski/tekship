<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return response()->json([
            'err' => false,
            'data' => $comments
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $comment = new Comment();

        $comment->user_id = Auth::user()->id();
        $comment->video_id = $request->video_id;
        $comment->data = $request->data;
        $comment->save();

        return response()->json([
            'err' => false,
            'data' => $comment
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
        //
        $comment = Comment::find($id);

        return response()->json([
            'err' => false,
            'data' => $comment
        ]);
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
        //
        $comment = Comment::find($id);

        if ($comment->user_id == Auth::user()->id) {
            $comment->data = $request->data;
            $comment->save();
        } else {
            return response()->json([
                'err' => true,
                'message' => 'Access denied'
            ]);
        }

        return response()->json([
            'err' => false,
            'data' => $comment
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comment = Comment::find($id);

        if ($comment->user_id == Auth::user()->id) {
            $comment->delete();
        } else {
            return response()->json([
                'err' => true,
                'message' => 'Access denied'
            ]);
        }

        return response()->json([
            'err' => false,
            'data' => $comment
        ]);
    }
}
