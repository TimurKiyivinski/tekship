<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Subscription;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subscriptions = Subscription::where('user_id', Auth::user()->id)->get();

        return response()->json([
            'err' => false,
            'data' => $subscriptions
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
        $subscription = new Subscription();
        $subscription->user_id = Auth::user()->id;
        $subscription->subscription_id = $request->subscription_id;
        $subscription->save();

        return response()->json([
            'err' => false,
            'data' => $subscription
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
        $subscription = Subscription::find($id);

        return response()->json([
            'err' => false,
            'data' => $subscription
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
        $subscription = Subscription::find($id);

        if ($subscription->user_id == Auth::user()->id) {
            $subscription->subscription_id = $request->subscription_id;
            $subscription->save();
        } else {
            return response()->json([
                'err' => true,
                'message' => 'Access denied'
            ]);
        }

        return response()->json([
            'err' => false,
            'data' => $subscription
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
        $subscription = Subscription::find($id);

        if ($subscription->user_id == Auth::user()->id) {
            $subscription->delete();
        } else {
            return response()->json([
                'err' => true,
                'message' => 'Access denied'
            ]);
        }

        return response()->json([
            'err' => false,
            'data' => $subscription
        ]);
    }
}
