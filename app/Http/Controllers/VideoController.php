<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subscription_ids = Subscription::where('user_id', Auth::user()->id)->get()->map(function ($subscription) {
            return $subscription->user_id;
        });
        $videos = Video::where('user_id', $subscription_ids)->orderBy('created_at', 'desc')->paginate(12);

        return response()->json([
            'err' => false,
            'data' => $videos
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
        if ($request->hasFile('video')) {
            if ($request->file('video')->isValid()) {
                $video = new Video();
                $video->user_id = Auth::user()->id;
                $video->title = $request->title;
                $video->description = $request->description;

                $path = $request->video->store('videos');
                $video->path = $path;

                $video->save();

                response()->json([
                    'err' => false,
                    'data' => $video,
                    'mime' => $request->video->getMimeType()
                ]);
            } else {
                return response()->json([
                    'err' => true,
                    'message' => 'Invalid file uploaded'
                ]);
            }
        } else {
            return response()->json([
                'err' => true,
                'message' => 'No file uploaded'
            ]);
        }
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
        $video = Video::find($id);

        return response()->json([
            'err' => false,
            'data' => $video
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
        $video = Video::find($id);
        if ($video->user_id == Auth::user()->id) {
            $video->user_id = $request->user_id;
            $video->title = $request->title;
            $video->description = $request->description;
            $video->save();
        } else {
            return response()->json([
                'err' => true,
                'message' => 'Access denied'
            ]);
        }

        response()->json([
            'err' => false,
            'data' => $video
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
        $video = Video::find($id);

        if ($video->user_id == Auth::user()->id) {
            $path = $video->path;
            \File::delete($path);
            $video->delete();
        } else {
            return response()->json([
                'err' => true,
                'message' => 'Access denied'
            ]);
        }

        response()->json([
            'err' => false,
            'data' => $video
        ]);
    }
}
