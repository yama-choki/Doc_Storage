<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocStrage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDocRequest;

class DocStrageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $docs = DocStrage::where('user_id', '=', $user->id)->latest()->get();
        return view('docs.index', compact('docs', 'user'));
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
    public function store(StoreDocRequest $request)
    {
        DocStrage::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'category' => $request->category,
            'text' => $request->text,
            'url' => $request->url,
        ]);

        return to_route('docs.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc = DocStrage::find($id);

        return view('docs.edit', compact('doc'));
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
        $doc = DocStrage::find($id);
        $doc->title = $request->title;
        $doc->category = $request->category;
        $doc->url = $request->url;
        $doc->text = $request->text;
        $doc->save();

        return to_route('docs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doc = DocStrage::find($id);
        $doc->delete();

        return to_route('docs.index');
    }
}
