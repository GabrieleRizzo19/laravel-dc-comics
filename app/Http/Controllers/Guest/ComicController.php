<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "headerLinks" => config('store.headerLinks'),
            "comicsArray" => Comic::all(),
            'iconBarItems' => config('store.iconBarItems'),
            'footerColumnLinks' => config('store.footerColumnLinks')
            ];
    
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = [
            "headerLinks" => config('store.headerLinks'),
            'iconBarItems' => config('store.iconBarItems'),
            'footerColumnLinks' => config('store.footerColumnLinks')
            ];

        return view('comics.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {

        $data = $request->validated();

        $newComic = new Comic();
        
        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            "headerLinks" => config('store.headerLinks'),
            "comic" => Comic::findOrFail($id) ,
            'iconBarItems' => config('store.iconBarItems'),
            'footerColumnLinks' => config('store.footerColumnLinks')
        ];
        return view('comics.comic', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            "headerLinks" => config('store.headerLinks'),
            'comic' => Comic::findOrFail($id),
            'iconBarItems' => config('store.iconBarItems'),
            'footerColumnLinks' => config('store.footerColumnLinks')
            ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {

        $data = $request->validated();

        $comic = Comic::findOrFail($id);
        
        $comic->fill($data);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
