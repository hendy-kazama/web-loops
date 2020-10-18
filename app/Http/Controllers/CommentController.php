<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::whereNotIn('name', DB::table('users')->pluck('name'))
                            ->whereNotIn('email', DB::table('users')->pluck('email'))
                            ->orderBy('created_at', 'DESC')->get();

        // $comments = Comment::with('hasUser')->orderBy('created_at', 'DESC')->get();
        // $comments = Comment::all();

        return view('page.comment.comment', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $post_id = $request->id;
        $user = $request->user();
        
        return view('page.comment.form',[
            'post_id' => $post_id,
            'name' => ($user) ? $user->name : null,
            'email' => ($user) ? $user->email : null,
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
        try {
            
            $pelajar = Comment::create($request->all());

            return \Redirect::route('list.post')->with(['success' => 'Komentar Berhasil disimpan !']);

        } catch (\Exception $e) {
            return \Redirect::route('list.post')->with(['error' => 'Komentar Gagal disimpan !']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
