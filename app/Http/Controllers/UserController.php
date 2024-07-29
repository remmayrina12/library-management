<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookInfo;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['books'] = bookInfo::all();
        return view('books.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $BookInfo = new bookInfo();
        $BookInfo->title     = $request['title'];
        $BookInfo->author     = $request['author'];
        $BookInfo->description     = $request['description'];
        $BookInfo->isbn     = $request['isbn'];
        $BookInfo->publishedYear   = $request['publishedYear'];
        $BookInfo->save();

        return redirect()->to('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $BookInfo = bookInfo::find($id); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['books'] = bookInfo::find($id);
        return view('books.index', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $BookInfo = bookInfo::find($id);
        $BookInfo->title     = $request['title'];
        $BookInfo->author     = $request['author'];
        $BookInfo->description     = $request['description'];
        $BookInfo->isbn     = $request['isbn'];
        $BookInfo->publishedYear   = $request['publishedYear'];
        $BookInfo->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $BookInfo = bookInfo::find($id);
        $BookInfo->delete();
        return redirect()->to('books');
    }
}
