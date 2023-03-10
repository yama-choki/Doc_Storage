<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docs;
use App\Models\Friend;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDocRequest;
use App\Http\Requests\SendMailRequest;
use App\Mail\SendDocMail;
use Illuminate\Support\Facades\Mail;

class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 画面表示

        $user = Auth::user();
        // 通常
        // $docs = DocStrage::where('user_id', '=', $user->id)->latest()->get();
        // ページネーション対応
        // $docs = DocStrage::where('user_id', '=', $user->id)->latest()->paginate(20);


        // 検索対応
        $search = $request->search;
        // 検索ワードで絞り込み
        $query = Docs::search($search);
        // docsテーブルから自分の投稿かつtrashの値が0のモノを取得
        $docs = $query->where('user_id', '=', $user->id)
                ->where('trash', '=', 0)
                ->select('id', 'user_id','title', 'category' ,'text', 'url', 'updated_at', 'created_at')
                ->latest()
                ->paginate(15);

        return view('docs.index', compact('docs', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocRequest $request)
    {
        // 投稿をdocsテーブルに送信
        Docs::create([
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // modeの値によってshowページの内容を変えて表示
        $doc = Docs::find($id);
        $mode = $request->mode;
        $user = Auth::user();
        $friends = Friend::where("user_id", "=", $user->id)->get();

        return view('docs.show', compact('doc', 'mode', 'friends'));
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
        $doc = Docs::find($id);
        $doc->title = $request->title;
        $doc->category = $request->category;
        $doc->url = $request->url;
        $doc->text = $request->text;
        $doc->save();

        return to_route('docs.index');
    }

    public function delete(Request $request, $id)
    {
        // trashの値を1に変え、削除扱いにする
        $doc = Docs::find($id);
        $doc->trash = 1;
        $doc->save();

        return to_route('docs.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(SendMailRequest $request)
    {
        $email = $request->email;
        $user = Auth::user();
        $category = $request->category;
        $title = $request->title;
        $url = $request->url;
        $text = $request->text;

        Mail::to($email)->send(new SendDocMail($user, $category, $title, $url, $text));
        return to_route('docs.index');
    }
}
