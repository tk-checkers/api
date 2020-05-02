<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Match;
use App\Http\Resources\Match as MatchResource;
use App\Events\MatchUpdated;


class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        // Get (creating if necessary) the Match for the given ID
        $match = Match::find($id);

        if (! $match ) {
            $match = new Match([
                'id' => $id
            ]);

            $match->save();

            $match->refresh();
        }

        return new MatchResource($match);
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
     */
    public function update(Request $request, $id)
    {
        // Update the Match for the given ID
        $match = Match::findOrFail($id);

        $data = $request->validate([
            'board' => 'required'
        ]);

        $match->board = $data['board'];

        $match->save();

        broadcast(new MatchUpdated($match));

        return new MatchResource($match);
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
    }
}
