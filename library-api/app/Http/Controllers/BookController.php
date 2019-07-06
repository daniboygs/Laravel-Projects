<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $this->validate($request, [
            'id_book' => 'required',
            'name' => 'required',
            'author' => 'required',
            'published_date' => 'required',
            'available' => 'required',
            'id_category' => 'required'
        ]);

        //Book::create($request->all());


        $newBook = new Book([
            'id_book' => $request->id_book,
            'name' => $request->name,
            'author' => $request->author,
            'published_date' => $request->published_date,
            'available' => $request->available,
            'id_category' => $request->id_category
        ]);
        
        $newBook->save();
        

        
        

        return response()->json('OK');


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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book= Book::findOrFail($id);
        $book->update($request->all());
        return response()->json('OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::where('id_book', $id)->delete();
        return response()->json('OK');
    }
}
