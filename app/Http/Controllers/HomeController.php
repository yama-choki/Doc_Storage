<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddFriendRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // フレンドリストの値を取得
        $friends = Friend::where('user_id', '=', $user->id)->
                    select('id', 'name', 'email', 'remarks', 'created_at')
                    ->latest()
                    ->paginate(20);

        return view('home.index', compact('friends'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddFriendRequest $request)
    {
        // friendsテーブルに値を送信
        Friend::create([
            'user_id' => $request->user_id,
            'name' => trim($request->name),
            'email' => trim($request->email),
            'remarks' => trim($request->remarks),
        ]);

        return to_route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // アカウント情報を削除（テストアカウント（user_idが1）は削除不可）
        if($id != 1){
            $friend = User::find($id);
            $friend->delete();
        }

        return to_route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // フレンドを削除
        $friend = Friend::find($id);
        $friend->delete();

        return to_route('home.index');
    }
}
