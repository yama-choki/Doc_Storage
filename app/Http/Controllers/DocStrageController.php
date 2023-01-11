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
    public function index(Request $request)
    {
        $user = Auth::user();
        // 通常
        // $docs = DocStrage::where('user_id', '=', $user->id)->latest()->get();
        // ページネーション対応
        // $docs = DocStrage::where('user_id', '=', $user->id)->latest()->paginate(20);


        // 検索対応
        $search = $request->search;
        $query = DocStrage::search($search);
        $docs = $query->where('user_id', '=', $user->id)
                ->where('trash', '=', 0)
                ->select('id', 'user_id','title', 'category' ,'text', 'updated_at', 'created_at')
                ->latest()
                ->paginate(20);

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
            'title' => trim($request->title),
            'category' => trim($request->category),
            'text' => trim($request->text),
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
    public function update(StoreDocRequest $request, $id)
    {
        $doc = DocStrage::find($id);
        $doc->title = $request->title;
        $doc->category = $request->category;
        $doc->url = $request->url;
        $doc->text = $request->text;
        $doc->save();

        return to_route('docs.index');
    }

    public function delete(Request $request, $id)
    {
        $doc = DocStrage::find($id);
        $doc->trash = 1;
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
