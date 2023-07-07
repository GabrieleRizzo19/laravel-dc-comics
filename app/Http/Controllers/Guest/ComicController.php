<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
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

    private function validateComic($data){

        $validator = Validator::make($data,[
            'title' => 'required|min:5|max:40',
            'description' => 'required|min:10',
            'thumb' => 'required|active_url',
            'price' => 'required',
            'series' => 'required|min:2|max:20',
            'sale_date' => 'required|date',
            'type' => 'required'
        ],[
            'title.required' => 'Il titolo  è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno 5 caratteri',
            'title.max' => 'Il titolo non può essere più lungo di 40 caratteri'
        ])->validate();

        return $validator;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->validateComic($request->all());

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
    public function update(Request $request, $id)
    {

        $data = $this->validateComic($request->all());

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
